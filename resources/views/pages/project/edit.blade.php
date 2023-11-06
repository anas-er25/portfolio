@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <form action="{{ route('admin.project.update', ['id' => $project->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="mb-3">
                <img class="form-control" src="{{ url($project->image_project) }}" alt="" style="height : 30vh; width : 30vh">
                <label for="title" class="form-label">Titre de Projet:</label>
                <input type="text" class="form-control" id="title" placeholder="Titre de Projet" name="title" value="{{ $project->title }}">
            </div>
            <div class="mb-3">
                <label for="link_project" class="form-label">Saisir le lien du projet:</label>
                <input type="text" class="form-control" id="link_project" placeholder="Saisir le lien du projet"
                    name="link_project" value="{{ $project->link_project }}">
            </div>
            <div class="mb-3">
                <label for="image_project" class="form-label">Télécharger l'Image:</label>
                <input class="form-control" type="file" id="image_project" name="image_project">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
@endsection


@section('title', 'Project Edit')
