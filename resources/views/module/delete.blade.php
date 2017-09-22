@extends('layouts.app')

@section('content')

    <?php

    function valueOf( $name , $data )
    {
        if ( old($name) !== null )
            return old($name);

        if ( isset( $data ) )
            return $data->$name;

        return "";
    }

    ?>

    <div class="page-title">
        <a class="not-link" href="/dashboard">Projects</a>
        >
        <a class="not-link" href="/project/{{$project->id}}">{{$project->title}}</a>
        >
        <a class="not-link" href="/project/{{$project->id}}/module/{{$module->id}}">
            Delete Module : {{$module->title}}
        </a>
    </div>

    <div class="container" style="margin-top:50px;">

        <div class="box form-box" style="width:500px;">

            <div class="box-header form-box-header">
                Delete Module
            </div>

            <div class="box-body form-box-body">
                <form class="form-horizontal" method="POST" style="margin-bottom:0px;">
                    {{ csrf_field() }}
                    <input type="hidden" name="title" value="{{ $module->title  }}" />

                    <div class="form-group">
                        <h4 class="col-md-12" style="line-height: 1.5em;">
                            You are about to <span style="color:#900;">DELETE</span>
                                the Module : <span style="color:#00a7d0;">{{ $module->title  }}</span><br>
                            Are you sure ?
                        </h4>
                    </div>

                    <div class="form-group" style="margin-top:40px;">
                        <div class="col-md-12" style="text-align:right;">

                            <a href="/project/{{$project->id}}" class="btn btn-default">
                                Cancel
                            </a>

                            <button type="submit" class="btn btn-danger" name="action" value="delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                Delete
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
