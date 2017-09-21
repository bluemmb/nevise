@extends('layouts.app')

@section('content')
    <h3>Dashboard</h3>
    <div>
        {{print_r($projects)}}
    </div>
@endsection
