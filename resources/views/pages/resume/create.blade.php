@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <form action="{{ route('admin.resume.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="year" class="form-label">Les année d'éducation:</label>
                <input type="text" class="form-control" id="year" placeholder="Les année d'éducation..." name="year" value="{{ old('year') }}">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Types - diplôme:</label>
                <input type="text" class="form-control" id="text" placeholder="Saisir le type-diplôme d'éducation...."
                    name="text" value="{{ old('text') }}">
            </div>
            <div class="mb-3">
                <label for="school" class="form-label">Ecole:</label>
                <input class="form-control" type="text" id="school" placeholder="Saisir l'école...." name="school" value="{{ old('school') }}">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection


@section('title', 'Resume Create')
