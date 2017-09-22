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
        @if ( $action == "insert" )
            Add New Module
        @elseif ( $action == "update" )
            <a class="not-link" href="/project/{{$project->id}}/module/{{$module->id}}">
                Edit Module : {{$module->title}}
            </a>
        @endif
    </div>

    <div class="container" style="margin-top:50px;">

        <div class="box form-box" style="width:700px;">

            <div class="box-header form-box-header">
                @if ( $action == "insert" )
                    Add New Module
                @elseif ( $action == "update" )
                    Edit Module
                @endif
            </div>

            <div class="box-body form-box-body">
                @if ( $errors->any() )
                    <strong>Got some errors!</strong>
                    <ul>
                        @foreach( $errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form class="form-horizontal" method="POST" style="margin-bottom:0px;">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <div class="col-md-2">
                            <label class="control-label" for="title">Title</label>
                        </div>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title"
                                   required autofocus value="<?php echo valueOf( "title" , isset($module) ? $module : null ); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label class="control-label" for="description">Description</label>
                        </div>

                        <div class="col-md-10">
                            <textarea id="description" type="text" class="form-control" name="description"rows="5"
                                   autofocus><?php echo valueOf( "description" , isset($module) ? $module : null ); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top:40px;">
                        <div class="col-md-12" style="text-align:right;">

                            <a href="/project/{{$project->id}}" class="btn btn-default">
                                Cancel
                            </a>

                            @if ( $action == "insert" )
                                <button type="submit" class="btn btn-primary" name="action" value="insert">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    Add
                                </button>
                            @elseif ( $action == "update" )
                                <button type="submit" class="btn btn-primary" name="action" value="update">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Update
                                </button>
                            @endif

                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
