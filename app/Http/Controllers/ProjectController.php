<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('pages.project.create', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'link_project' => 'required',
            'image_project' => 'required', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $creproject = new Project();

        $creproject->title = strip_tags($request->input('title'));
        $creproject->link_project = strip_tags($request->input('link_project'));

        if ($request->file('image_project')) {
            $img_file = $request->file('image_project');
            $uploadedFile = $_FILES['image_project'];
            $imageName = $uploadedFile['name'];
            $img_file->storeAs('public/img', $imageName);
            $creproject->image_project = 'storage/img/' . $imageName;
        }

        $creproject->save();

        return redirect()->route('admin.dashboard')->with('success', "Le projet est ajouté avec succès");
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
        return view('pages.project.edit', [
            'project' => Project::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'link_project' => 'required',
            'image_project' => 'required', 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $update = Project::findOrFail($id);
        $update->title = strip_tags($request->input('title'));
        $update->link_project = strip_tags($request->input('link_project'));

        if ($request->file('image_project')) {
            $img_file = $request->file('image_project');
            $uploadedFile = $_FILES['image_project'];
            $imageName = $uploadedFile['name'];
            $img_file->storeAs('public/img', $imageName);
            $update->image_project = 'storage/img/' . $imageName;
        }

        $update->save();

        return redirect()->route('admin.dashboard')->with('success', "Le projet est modifié avec succès");
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Project::findOrFail($id);
        $delete->delete();
        return redirect()->route('admin.dashboard')->with('success', "Le projet est supprimè avec succès");
    }
}
