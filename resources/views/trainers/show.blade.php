@extends('layouts.base')

@section('title', 'trainer')

@section('content')
    <img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px;" 
    class="card-img-top rounded-circle mx-auto d-block" src="/images/{{ $trainer->avatar }}"  alt="">
    <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p>{{ $trainer->description }}</p>
        <a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Edit</a>

        <form action="/trainers/{{ $trainer->slug }}" method="post">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection