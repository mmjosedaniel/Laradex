@extends('layouts.app')

@section('title','Create Trainer')

@section('content')

@include('common.errors')

    <form action="/trainers" class="form-group" method="POST" enctype="multipart/form-data">
    @csrf

        @include('trainers.form')

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection