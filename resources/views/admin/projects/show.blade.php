@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div>Name: {{$project->title}}</div>
                <div>Creation date: {{$project->creation_date}}</div>
                <div>Size: {{$project->size}}</div>
            </div>
        </div>
    </div>
@endsection