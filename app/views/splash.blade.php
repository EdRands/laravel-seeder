@extends('layouts.main')

<?php $pageTitle = 'Seeded'; ?>

@section('content')
<div class="container text-center">
    <p><img src="{{ asset('img/sprout.png') }}" height="256" width="256" alt="Sprouted plant"></p>
    <h1>{{ Config::get('project.name.full', 'Untitled Project') }}</h1>
    <p class="lead">{{ Config::get('project.name.full', 'Untitled Project') }} is planted and sprouted. Now let's get growing!</p>
</div>
@stop
