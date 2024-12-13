<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                 //untuk memvalidasi inputan
                 $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'socialmedia' => 'required',
                ]);
        
                Contact::create($request->all());
                return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'socialmedia' => 'required',
        ]);

        $contact->update($request->all());
        return redirect()->route('contact.index')->with('success','Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id); // Mencari data berdasarkan ID
        $contact->delete(); // Menghapus data
        return redirect()->route('contact.index')->with('success', 'Data deleted successfully');
    }
}