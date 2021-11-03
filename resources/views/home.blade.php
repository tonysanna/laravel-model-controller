@extends('layouts.app')

@section('production')
    @foreach ($films as $film)
        <div class="card">
            <div class="title">
                <h1>{{$film['title']}}</h1>
            </div>
            <p>exit: {{$film['date']}}</p>
        </div>
        
    @endforeach
@endsection