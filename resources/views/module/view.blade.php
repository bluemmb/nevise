@extends('layouts.app')

@section('content')
    <div class="page-title">
        <a class="not-link" href="/dashboard">Projects</a>
        >
        <a class="not-link" href="/project/{{ $project->id }}">{{ $project->title }}</a>
        >
        <a class="not-link" href="/project/{{ $project->id }}/module/{{ $module->id }}">{{ $module->title }}</a>
    </div>

    <div class="container" style="margin-top:70px; margin-bottom: 70px;">

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

                    <div class="box plugin-box" onclick="window.location='/project/{{$project->id}}/module/{{$module->id}}/plugin/{{$plugin->id}}/view'">
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
                            <iframe src="/project/{{$project->id}}/module/{{$module->id}}/plugin/{{$plugin->id}}/smallview"
                                        style="border:0px; position: absolute; width: 100%; height: 100%;">

                            </iframe>
                            <div class="plugin-box-viewall">View All</div>
                        </div>
                    </div>

                @endforeach
            </div>


    </div>
@endsection
