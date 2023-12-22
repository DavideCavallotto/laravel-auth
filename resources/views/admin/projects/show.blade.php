@extends('layouts.app')

@section('content')
   
    <section class="container text-center">
        <h1>Projects Show</h1>
        <img class="w-50" src="{{$project->image}}" alt="">
        <h1>{{$project->title}}</h1>
        <p>{{$project->description}}</p>
    </section>
    <div class="text-center">
        <a class="text-light text-decoration-none btn btn-primary" href="{{route('admin.projects.index')}}">I miei Progetti</a>
    
    </div>
    
   
@endsection