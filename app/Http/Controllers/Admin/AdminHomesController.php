<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminHomesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homes = Home::all();
        return view('admin.homes.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Home::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('homes.index')->with('success', 'Home created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $home = Home::findOrFail($id);
        return view('admin.homes.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $home = Home::findOrFail($id);
        return view('admin.homes.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $home = Home::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $home->update($data);

        return redirect()->route('homes.index')->with('success', 'Home updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $home = Home::findOrFail($id);
        $home->delete();

        return redirect()->route('homes.index')->with('success', 'Home deleted successfully.');
    }
}