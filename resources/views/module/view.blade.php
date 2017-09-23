@extends('layouts.app')

@section('content')
    <div class="page-title">
        <a class="not-link" href="/dashboard">Projects</a>
        >
        <a class="not-link" href="/project/{{ $project->id }}">{{ $project->title }}</a>
        >
        <a class="not-link" href="/project/{{ $project->id }}/module/{{ $module->id }}">{{ $module->title }}</a>
    </div>

    <div class="container" style="margin-top:50px;">

        <div class="col-sm-8">

            <div class="search-box">
                <form class="form-horizontal" method="POST" style="margin-bottom:0px;">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-2" style="padding-right:2px;">
                            <button type="submit" class="btn btn-default" style="width:100%;">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Search
                            </button>
                        </div>

                        <div class="col-md-10" style="padding-left:2px;">
                            <input id="search_text" type="text" class="form-control" name="search_text">
                        </div>
                    </div>

                </form>
            </div>

            <div class="action-box">
                <a href="/project/{{$project->id}}/module/{{$module->id}}/plugin/insert" style="font-size:16px;">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Add
                </a>
            </div>

            @foreach ($plugins as $plugin)

                <div class="box plugin-box" onclick="window.location='/project/{{$project->id}}/module/{{$module->id}}/plugin/{{$plugin->id}}/editor'">
                    <h4 class="box-header plugin-box-header">
                        <i class="fa fa-file-text-o" aria-hidden="true" style="margin:2px 5px; font-size:20px;"></i>
                        {{$plugin->title}}

                        <div style="display:inline-block; float:right">
                            <a href="/project/{{$project->id}}/module/{{$module->id}}/plugin/delete/{{$plugin->id}}" class="plugin-item-action">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            <a href="/project/{{$project->id}}/module/{{$module->id}}/plugin/update/{{$plugin->id}}" class="plugin-item-action">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </div>
                    </h4>

                    <div class="box-body plugin-box-body">
                        {{$plugin->content}}
                    </div>
                </div>

            @endforeach
        </div>

        <div class="col-sm-4" style="padding:30px;">
            Menu ....
        </div>

    </div>
@endsection
