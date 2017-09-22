@extends('layouts.app')

@section('content')
    <div class="page-title">
        <a class="not-link" href="/dashboard">Projects</a>
        >
        <a class="not-link" href="/project/{{ $project->id }}">{{ $project->title }}</a>
    </div>

    <div class="container" style="margin-top:50px;">

        <div class="action-box">
            <a href="/project/{{$project->id}}/module/insert" style="font-size:16px;">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Add
            </a>
        </div>

        <?php $i=0; ?>
        @foreach ($modules as $module)

            @if ( $i==0 )
                <div class="row" style="margin-top:30px;">
            @endif

                    <div class="col-sm-4">
                        <div class="box project-box" onclick="window.location = '/project/{{$project->id}}/module/{{$module->id}}'">
                            <h4 class="box-header project-box-header">
                                <i class="fa fa-book" aria-hidden="true" style="margin:2px 5px; font-size:20px;"></i>
                                {{$module->title}}

                                <div style="display:inline-block; float:right">
                                    <a href="/project/{{$project->id}}/module/delete/{{$module->id}}" class="project-item-action">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                    <a href="/project/{{$project->id}}/module/update/{{$module->id}}" class="project-item-action">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </h4>

                            <div class="box-body project-box-body">
                                {{$module->description}}
                            </div>
                        </div>
                    </div>

            <?php $i = $i+1; ?>
            @if ( $i==3 )
                </div>
                <?php $i=0; ?>
            @endif

        @endforeach

    </div>
@endsection
