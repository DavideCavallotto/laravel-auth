@extends('layouts.app')

@section('content')
    <section>
        <h1>Projects Index</h1>
        @foreach ($projects as $project)
        <div class="col-3 mb-4" >
            <div class="card h-100" style="width: 18rem;">            
                <div class="card-body d-flex flex-column justify-content-end">
                    <h5 class="card-title">{{$project->title}}</a></h5>                  
                    <p class="card-text">{{$project->description}}</p>                
                </div>
            </div>
            
        </div>
        @endforeach
        
    </section>


@endsection