@extends('layouts.app')

<!-- Styles -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')
    <div class="page-title">Dashboard</div>

    <div class="box dashboard-box">
        <h4 class="box-header">
            Projects
        </h4>

        <div class="box-body" style="padding-bottom:80px;">
            @foreach ($projects as $project)
                <a href="project/{{$project->id}}" style="text-decoration: none; color:inherit;">
                    <div class="dashboard-item-box">
                        {{$project->title}}
                    </div>
                </a>
            @endforeach
        </div>

        <div class="box-footer">
            <form class="form-horizontal" method="POST" style="margin-bottom:0px;">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">
                            + Add
                        </button>
                    </div>

                    <div class="col-md-10">
                        <input id="add" type="text" class="form-control" name="add"
                               required autofocus >
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
