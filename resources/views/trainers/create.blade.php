@extends('layouts.base')

@section('title','Create Trainer')

@section('content')
    <form action="/trainers" class="form-group" method="POST" enctype="multipart/form-data">
    @csrf
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">

            <button type="submit" class="btn btn-primary">Save</button>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description">

            <button type="submit" class="btn btn-primary">Save</button>
        </div>

        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar">

        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection