<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCertificateController extends Controller
{
  
    // Menampilkan daftar sertifikat
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificates.index', compact('certificates'));
    }

    // Menampilkan form untuk membuat sertifikat baru
    public function create()
    {
        return view('admin.certificates.create');
    }

    // Menyimpan sertifikat baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'issued_by' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,jpg,png|max:2048',
            'thumbnail' => 'nullable|image',
        ]);

        // Menyimpan file dan thumbnail
        $filePath = $request->file('file')->store('certificates/files', 'public');
        $thumbnailPath = $request->file('thumbnail') ? $request->file('thumbnail')->store('certificates/thumbnails', 'public') : null;

        Certificate::create([
            'name' => $validated['name'],
            'issued_at' => $validated['issued_at'],
            'issued_by' => $validated['issued_by'],
            'file' => $filePath,
            'thumbnail' => $thumbnailPath,
        ]);

        return redirect()->route('certificates.index')->with('success', 'Certificate created successfully.');
    }

    // Menampilkan detail sertifikat
    public function show(Certificate $certificate)
    {
        return view('admin.certificates.show', compact('certificate'));
    }

    // Menampilkan form edit sertifikat
    public function edit(Certificate $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    // Memperbarui sertifikat yang sudah ada
    public function update(Request $request, Certificate $certificate)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'issued_by' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,jpg,png',
            'thumbnail' => 'nullable|image',
        ]);

        // Menyimpan file dan thumbnail baru jika ada
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('certificates/files');
            $certificate->file = $filePath;
        }

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('certificates/thumbnails');
            $certificate->thumbnail = $thumbnailPath;
        }

        $certificate->update([
            'name' => $validated['name'],
            'issued_at' => $validated['issued_at'],
            'issued_by' => $validated['issued_by'],
        ]);

        return redirect()->route('certificates.index')->with('success', 'Certificate updated successfully.');
    }

    // Menghapus sertifikat dan file terkait
    public function destroy(Certificate $certificate)
    {
        // Menghapus file dan thumbnail
        if ($certificate->file) {
            Storage::delete($certificate->file);
        }
        if ($certificate->thumbnail) {
            Storage::delete($certificate->thumbnail);
        }

        $certificate->delete();

        return redirect()->route('certificates.index')->with('success', 'Certificate deleted successfully.');
    }
}
