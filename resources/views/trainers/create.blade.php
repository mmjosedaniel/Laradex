@extends('layouts.base')

@section('title','Create Trainer')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif
    <form action="/trainers" class="form-group" method="POST" enctype="multipart/form-data">
    @csrf

        @include('trainers.form')

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection