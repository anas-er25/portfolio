<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumes = Resume::all();
        return view('pages.resume.create', compact('resumes'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'text' => 'required',
            'school' => 'required',
        ]);

        $creresume = new Resume();

        $creresume->year = strip_tags($request->input('year'));
        $creresume->text = strip_tags($request->input('text'));
        $creresume->school = strip_tags($request->input('school'));

        $creresume->save();

        return redirect()->route('admin.dashboard')->with('success', "Le CV est ajouté avec succès");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.resume.edit', [
            'resume' => Resume::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'year' => 'required',
            'text' => 'required',
            'school' => 'required',
        ]);

        $update = Resume::findOrFail($id);
        $update->year = strip_tags($request->input('year'));
        $update->text = strip_tags($request->input('text'));
        $update->school = strip_tags($request->input('school'));

        $update->save();

        return redirect()->route('admin.dashboard')->with('success', "Le CV est modifié avec succès");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Resume::findOrFail($id);
        $delete->delete();
        return redirect()->route('admin.dashboard')->with('success', "Le CV est supprimè avec succès");

    }
}
