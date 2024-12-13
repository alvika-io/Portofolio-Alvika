<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;  // Pastikan Storage diimpor

class AdminSkillController extends Controller
{
    // Menampilkan daftar skill
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index', compact('skill'));
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    // Menyimpan skill baru ke database
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi logo
        ]);
    
        // Proses upload logo jika ada
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');  // Menyimpan gambar di folder 'logos' di public storage
        } else {
            $logoPath = null;
        }
    
        // Membuat skill baru
        Skill::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'logo' => $logoPath, // Menyimpan path logo
        ]);
    
        // Redirect ke halaman skill
        return redirect()->route('skill.index')->with('success', 'Skill created successfully!');
    }

    // Menampilkan form untuk mengedit skill yang sudah ada
    public function edit(Skill $skill)
    {
        return view('admin.skill.edit', compact('skill'));
    }

    // Memperbarui skill yang ada di database
    public function update(Request $request, $id)
    {
        // Validasi data yang masuk
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi logo
        ]);
    
        // Menemukan skill berdasarkan ID
        $skill = Skill::findOrFail($id);
    
        // Proses upload logo jika ada
        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($skill->logo) {
                Storage::disk('public')->delete($skill->logo); // Menghapus file logo lama
            }
            $logoPath = $request->file('logo')->store('logos', 'public'); // Upload logo baru
        } else {
            $logoPath = $skill->logo; // Tetap menggunakan logo lama jika tidak ada file baru
        }
    
        // Update skill dengan data baru
        $skill->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'logo' => $logoPath, // Update path logo
        ]);
    
        // Redirect ke halaman skill
        return redirect()->route('skill.index')->with('success', 'Skill updated successfully!');
    }

    // Menghapus skill dari database
    public function destroy(Skill $skill)
    {
        // Hapus logo file dari storage jika ada
        if ($skill->logo) {
            Storage::disk('public')->delete($skill->logo);
        }

        // Hapus skill dari database
        $skill->delete();

        return redirect()->route('skill.index')->with('success', 'Skill Berhasil Di Hapus!');
    }
    
    // Menampilkan detail skill
    public function show(Skill $skill)
    {
        return view('admin.skill.show', compact('skill'));
    }
}
