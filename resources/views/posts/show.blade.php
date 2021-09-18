@extends('layouts.app')

@section('content')
<div style="border: 2px solid lightgrey" class="posts-container container">
    <div style="padding: 50px">

        <h2 style=""><i style="font-size: 25px" class="bi bi-person-circle"></i> <br> {{$post->author}}</h2>
        <div> 
                <i style="font-size: 22px" class="bi-geo-fill"></i>
                <span style="font-size: 16px">{{$post->location}}</span>
        </div>
        <br>
        <img style="border-radius: 150px" src="{{$post->image}}" alt="">
        <br>
        <br>
        <div style="padding: 25px; border: 1px solid lightgrey; font-size: 16px">{{$post->textpost}}</div>

    </div>
</div>
    
@endsection