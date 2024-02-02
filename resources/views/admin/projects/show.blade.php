@extends('layouts.admin')


@section('content')
<!--Section Card-->
<div class="container">
    <h1 class="text-center"><strong>Dettagli su {{$project->name}}</strong></h1>
    <div class="row">
        <div class="col-12">

            <img src="{{ $project->image }}" class="img-fluid" alt="Responsive Image">
            <div>
                <h5><strong>{{$project->name}} </strong></h5>
                <p>{{ $project->description }}</p>
                <p><strong>Data creazione</strong> {{ $project->dataCreation }}</p>
                <p><strong>Langua</strong> {{ $project->language }}</p>
                <p><strong>Piattaforma di sviluppo</strong> {{ $project->type->platform }}</p>
                <p><strong>Linguaggio</strong> {{ $project->type->language }}</p>
                <img src="{{ $project->type->image }}" class="img-fluid w3_5" alt="Responsive Image">
                <span class="d-flex gap-2 "></span>
            </div>

        </div>
    </div>
</div>
@endsection