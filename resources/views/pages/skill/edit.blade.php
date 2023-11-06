@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <form action="{{ route('admin.skill.update', ['id' => $skill->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="mb-3">
                <label for="skill_name" class="form-label">Le nom de compétence:</label>
                <input type="text" class="form-control" id="skill_name" name="skill_name" value="{{ $skill->skill_name }}">
            </div>
            <div class="mb-3">
                <label for="percent" class="form-label">le pourcentage de savoir:</label>
                <input class="form-control" type="text" id="percent" name="percent" value="{{ $skill->percent }}">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
@endsection


@section('title', 'Skill Edit')
