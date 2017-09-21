@extends('layouts.app')

<!-- Styles -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('content')
    <div class="page-title">
        <a class="not-link" href="/dashboard">Projects</a>
        >
        <a class="not-link" href="/project/{{ $project->id }}">{{ $project->title }}</a>
    </div>

    <div class="container" style="margin-top:50px;">

        <?php $i=0; ?>
        @foreach ($modules as $module)

            @if ( $i==0 )
                <div class="row" style="margin-top:30px;">
            @endif

                    <div class="col-sm-4">
                        <a href="#" class="not-link">
                            <div class="box project-box">
                                <h4 class="box-header project-box-header">
                                    <i class="fa fa-book" aria-hidden="true" style="margin:2px 5px; font-size:20px;"></i>
                                    {{$module->title}}
                                </h4>

                                <div class="box-body project-box-body">
                                    Lorem ipsum dolor sit amet, ea sit causae quaeque. Vel ut porro scripta expetendis, est hendrerit posidonium deterruisset te, at est omnesque fabellas contentiones. Mazim copiosae cotidieque per an. Cu eam agam explicari efficiendi, meliore adipisci invenire ad cum. Appareat forensibus te nec.
                                </div>
                            </div>
                        </a>
                    </div>

            <?php $i = $i+1; ?>
            @if ( $i==3 )
                </div>
                <?php $i=0; ?>
            @endif

        @endforeach

    </div>
@endsection
