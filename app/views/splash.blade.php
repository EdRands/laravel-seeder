@extends('layouts.main')

<?php $pageTitle = 'Seeded'; ?>

@section('content')
<div class="container text-center">
    <p><img src="{{ asset('img/sprout.png') }}" height="256" width="256" alt="Sprouted plant"></p>
    <h1>{{ trans('project.name.full') }}</h1>
    <p class="lead">{{ trans('project.name.full') }} is planted and sprouted. Now let's get growing!</p>
</div>
@stop
