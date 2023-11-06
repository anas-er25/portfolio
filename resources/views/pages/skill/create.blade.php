@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <form action="{{ route('admin.skill.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="mb-3">
                <label for="skill_name" class="form-label">Le nom de compétence:</label>
                <input type="text" class="form-control" id="skill_name" placeholder="Le nom de compétence..." name="skill_name" value="{{ old('skill_name') }}">
            </div>
            <div class="mb-3">
                <label for="percent" class="form-label">le pourcentage de savoir:</label>
                <input type="text" class="form-control" id="percent" placeholder="Saisir le pourcentage de savoir...."
                    name="percent" value="{{ old('percent') }}">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection


@section('title', 'Skill Create')
