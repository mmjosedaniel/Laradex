@extends('layouts.base')

@section('title', 'Trainer Edit')

@section('content')
<div class="text-center">
    <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" 
    class="card-img-top rounded-circle mx-auto d-block" src="/images/{{ $trainer->avatar }}"  alt="">
</div>
<form action="/trainers/{{ $trainer->slug }}" class="form-group" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
        
        @include('trainers.form')
        
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection