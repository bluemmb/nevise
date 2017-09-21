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

            @foreach ($plugins as $plugin)

                <a class="not-link" href="/project/{{$project->id}}/module/{{$module->id}}/plugin/{{$plugin->id}}">
                    <div class="box plugin-box">
                        <h4 class="box-header plugin-box-header">
                            <i class="fa fa-file-text-o" aria-hidden="true" style="margin:2px 5px; font-size:20px;"></i>
                            {{$plugin->title}}
                        </h4>

                        <div class="box-body plugin-box-body">
                            Lorem ipsum dolor sit amet, ea sit causae quaeque. Vel ut porro scripta expetendis, est hendrerit posidonium deterruisset te, at est omnesque fabellas contentiones. Mazim copiosae cotidieque per an. Cu eam agam explicari efficiendi, meliore adipisci invenire ad cum. Appareat forensibus te nec.
                        </div>
                    </div>
                </a>

            @endforeach
        </div>

        <div class="col-sm-4" style="padding:30px;">
            Menu ....
        </div>

    </div>
@endsection
