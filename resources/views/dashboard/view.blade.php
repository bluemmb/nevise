@extends('layouts.app')

@section('content')
    <h3>Dashboard</h3>
    <div>
        {{$projects[0]->title}}
    </div>
@endsection
