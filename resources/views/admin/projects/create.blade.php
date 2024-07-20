@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h1>Create new</h1>   
                <form action="{{ route('admin.projects.store') }}" method="POST" class="mt-5">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control @if ($errors->get('title')) is-invalid @endif" id="exampleFormControlInput1" name="title" value="{{ old('title') }}">
                        @if ($errors->get('title'))
                            <div class="invalid-feedback">
                                @foreach ($errors->get('title') as $error )
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Cration date</label>
                        <input type="date" class="form-control @if ($errors->get('creation_date')) is-invalid @endif" id="exampleFormControlInput1" name="creation_date" value="{{ old('creation_date') }}">
                        @if ($errors->get('creation_date'))
                            <div class="invalid-feedback">
                                @foreach ($errors->get('creation_date') as $error )
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">size</label>
                        <input type="number" class="form-control @if ($errors->get('size')) is-invalid @endif" id="exampleFormControlInput1" name="size" value="{{ old('size') }}">
                        @if ($errors->get('size'))
                            <div class="invalid-feedback">
                                @foreach ($errors->get('size') as $error )
                                    {{ $error }}
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
@endsection