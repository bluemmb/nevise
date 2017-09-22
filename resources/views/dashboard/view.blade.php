@extends('layouts.app')

@section('content')
    <div class="page-title">
        <a href="\dashboard" class="not-link">Dashboard</a>
    </div>

    <div class="box dashboard-box">
        <h4 class="box-header">
            Projects
        </h4>

        <div class="box-body dashboard-box-body">
            @foreach ($projects as $project)
                <div class="dashboard-item-box">
                    <a href="project/{{$project->id}}" style="text-decoration: none; color:inherit; display:inline-block" class="dashboard-item-title">
                        {{$project->title}}
                    </a>
                    <div style="display:inline-block; float:right">
                        <a href="/project/delete/{{$project->id}}" class="dashboard-item-action">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                        <a href="/project/update/{{$project->id}}" class="dashboard-item-action">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="box-footer">
            <a href="/project/insert">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Add
            </a>
        </div>
    </div>
@endsection
