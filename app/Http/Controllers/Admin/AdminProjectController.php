<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;  // Pastikan Storage diimpor
class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $project = Project::all();
            return view('admin.project.index', compact('project'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'date' => 'required|date',
            'image' => 'nullable|image|', // Validasi untuk gambar
        ]);
        
        // Menyimpan gambar jika ada
        if ($request->hasFile('images')) {
            $imagePath = $request->file('images')->store('projects/images', 'public');
        } else {
            $imagePath = null; // Jika tidak ada gambar, set null
        }
        
        // Membuat proyek baru
        Project::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'link' => $validated['link'],
            'date' => $validated['date'],
            'image' => $imagePath, // Menyimpan path gambar
        ]);
        
        return redirect()->route('project.index')->with('success', 'Project created successfully.');
    }
 
    

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        // Validasi data yang diterima dari form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'date' => 'required|date',
            'image' => 'nullable|image|max:2048', // Validasi untuk gambar
        ]);
        
        // Menyimpan gambar baru jika ada yang di-upload
        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            if ($project->images) {
                Storage::delete('public/' . $project->images);
            }
            
            // Menyimpan gambar baru
            $imagePath = $request->file('images')->store('projects/images', 'public');
            $project->images = $imagePath; // Menyimpan path gambar baru ke database
        }
        
        // Memperbarui data proyek tanpa mengubah gambar (jika gambar tidak di-upload)
        $project->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'link' => $validated['link'],
            'date' => $validated['date'],
        ]);
        
        // Redirect kembali ke daftar proyek dengan pesan sukses
        return redirect()->route('project.index')->with('success', 'Project updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id); // Mencari data berdasarkan ID
        $project->delete(); // Menghapus data
        return redirect()->route('project.index')->with('success', 'Data deleted successfully');
    }
}