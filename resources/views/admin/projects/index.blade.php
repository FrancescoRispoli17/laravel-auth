@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col py-5">
                <h1>Projects List</h1>
            </div>
            <div class="col-auto py-5 me-5">
                <a type="button" class="btn btn-primary" href="#">Add new</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="col-2">Title</th>
                        <th scope="col" class="col-3">Slug</th>
                        <th scope="col">Creation date</th>
                        <th scope="col" class="col-2">Size</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->title}}</td>
                                <td>{{$project->slug}}</td>
                                <td>{{$project->creation_date}}</td>
                                <td>{{$project->size}} Kb</td>
                                <td class="px-0"><button type="button" class="btn btn-light">Detail</button></td>
                                <td class="px-0"><button type="button" class="btn btn-primary">Update</button></td>
                                <td class="px-0"><button type="button" class="btn btn-danger">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection