@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <form action="{{ route('admin.resume.update', ['id' => $resume->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
            <div class="mb-3">
                <label for="year" class="form-label">Les année d'éducation:</label>
                <input type="text" class="form-control" id="year" placeholder="Les année d'éducation..." name="year" value="{{ $resume->year }}">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Types - diplôme:</label>
                <input type="text" class="form-control" id="text" placeholder="Saisir le type-diplôme d'éducation...."
                    name="text" value="{{ $resume->text }}">
            </div>
            <div class="mb-3">
                <label for="school" class="form-label">Ecole:</label>
                <input class="form-control" type="text" id="school" name="school" value="{{ $resume->school }}">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
@endsection


@section('title', 'Resume Edit')
