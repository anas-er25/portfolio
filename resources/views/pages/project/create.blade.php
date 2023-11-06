@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titre de Projet:</label>
                <input type="text" class="form-control" id="title" placeholder="Titre de Projet" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="link_project" class="form-label">Saisir le lien du projet:</label>
                <input type="text" class="form-control" id="link_project" placeholder="Saisir le lien du projet"
                    name="link_project" value="{{ old('link_project') }}">
            </div>
            <div class="mb-3">
                <label for="image_project" class="form-label">Télécharger l'Image:</label>
                <input class="form-control" type="file" id="image_project" name="image_project">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection


@section('title', 'Project Create')
