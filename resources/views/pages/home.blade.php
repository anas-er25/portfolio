@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        {{-- <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        $53,000
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            </div>
        </div>
    </div>
     <div class="row mt-4">
        <div class="col-lg-5 mb-lg-0 mb-4">
            <div class="card z-index-2">
                <div class="card-body p-3">
                    <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                        <div class="chart">
                            <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                    <h6>Sales overview</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">4% more</span> in 2021
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


        {{-- project --}}
        <div class="col-12 mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Projects</h6>
                    <p class="text-sm"></p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        @if (count($projects) > 0)
                            @foreach ($projects as $project)
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="{{ url($project->image_project) }}" alt="l'image d'{{ $project->title }}"
                                                    class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">

                                            <h4>
                                                {{ $project->title }}
                                            </h4>

                                            <a href="{{ $project->link_project }}">
                                                <p class="mb-4 text-sm">
                                                    View Project
                                                </p>
                                            </a>

                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="{{ route('admin.project.edit', ['id' => $project->id]) }}"
                                                    class="btn btn-outline-primary btn-sm mb-0"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                        <path
                                                            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                    </svg></a>
                                                <a href="{{ route('admin.project.destroy', ['id' => $project->id]) }}"
                                                    class="btn btn-outline-danger btn-sm ms-1 mb-0"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                        <path
                                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                    </svg></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card h-100 card-plain border">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <a href="{{ route('admin.project.create') }}">
                                        <i class="fa fa-plus text-secondary mb-3"></i>
                                        <h5 class=" text-secondary"> New project </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- resume --}}
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Resume</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            @if (count($resumes) > 0)
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Year</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Text</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Ecole</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resumes as $resume)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm"> {{ $resume->year }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $resume->text }}</p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs text-secondary mb-0">{{ $resume->school }}</p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a href="{{ route('admin.resume.edit', ['id' => $resume->id]) }}"
                                                        class="btn btn-outline-primary btn-sm ms-1 mb-0"
                                                        data-toggle="tooltip" data-original-title="Edit resume">
                                                        Edit
                                                    </a>
                                                    &nbsp;
                                                    <a href="{{ route('admin.resume.destroy', ['id' => $resume->id]) }}"
                                                        class="btn btn-outline-danger btn-sm ms-1 mb-0"
                                                        data-toggle="tooltip" data-original-title="Delete resume">
                                                        delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- skills --}}
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Skills</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            @if (count($skills) > 0)
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                compétence</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Pourcentage</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($skills as $skill)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm"> {{ $skill->skill_name }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $skill->percent }}</p>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a href="{{ route('admin.skill.edit', ['id' => $skill->id]) }}"
                                                        class="btn btn-outline-primary btn-sm ms-1 mb-0"
                                                        data-toggle="tooltip" data-original-title="Edit skill">
                                                        Edit
                                                    </a>
                                                    &nbsp;
                                                    <a href="{{ route('admin.skill.destroy', ['id' => $skill->id]) }}"
                                                        class="btn btn-outline-danger btn-sm ms-1 mb-0"
                                                        data-toggle="tooltip" data-original-title="Delete skill">
                                                        delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    @section('title', 'Dashboard')
