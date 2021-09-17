@extends('layouts.app')

@section('content')
<div class="posts-container">
    <h2 style=""><i style="font-size: 25px" class="bi bi-person-circle"></i> <br> {{$post->author}}</h2>
    <div> 
            <i style="font-size: 25px" class="bi-geo-fill"></i>
            {{$post->location}}
    </div>
    <img src="{{$post->image}}" alt="">
    <hr>
    <div>{{$post->textpost}}</div>
</div>
    
@endsection