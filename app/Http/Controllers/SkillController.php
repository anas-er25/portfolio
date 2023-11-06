<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('pages.skill.create', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('pages.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'skill_name' => 'required',
            'percent' => 'required',
        ]);

        $creresume = new Skill();

        $creresume->skill_name = strip_tags($request->input('skill_name'));
        $creresume->percent = strip_tags($request->input('percent'));

        $creresume->save();

        return redirect()->route('admin.dashboard')->with('success', "Le compétence est ajouté avec succès");
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pages.skill.edit', [
            'skill' => Skill::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'skill_name' => 'required',
            'percent' => 'required',
        ]);

        $update = Skill::findOrFail($id);
        $update->skill_name = strip_tags($request->input('skill_name'));
        $update->percent = strip_tags($request->input('percent'));

        $update->save();

        return redirect()->route('admin.dashboard')->with('success', "Le compétence est modifié avec succès");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Skill::findOrFail($id);
        $delete->delete();
        return redirect()->route('admin.dashboard')->with('success', "Le compétence est supprimè avec succès");

    }
}
