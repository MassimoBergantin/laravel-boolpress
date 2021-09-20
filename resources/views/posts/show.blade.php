@extends('layouts.app')

@section('content')
<div style="" class="container">


    <a href="{{ route('posts.index', $post) }}">
        <button class="btn btn-primary"><i class="bi bi-stickies"></i> ALL POSTS</button>  
        <a style="float:right;"  href="{{ route('posts.edit', $post) }}">
            <button class="btn btn-success"><i class="bi bi-pencil-square"></i> EDIT</button>    
        </a>  
    </a>
    <br>

    <hr>
</div>



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

<div class="container">

    <hr>

    <div style="text-align: center">

        <button type="submit" class="btn btn-danger" data-toggle= "modal" data-target="#exampleModal"><i class="bi bi-trash"></i> DELETE</button>

    </div>
    
    <div style="float: right" class="container">
    
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">WARNING</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
    
                </div>
                <div  style="text-align: center"  class="modal-body">
                    <h4>
                        Are you sure you want to delete this post?
                    </h4>
                    <h3>
                        This action is irreversible!
                    </h3>
    
                </div>
                <div class="modal-footer">
                    <form style="" action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" data-toggle= "modal" data-target="#exampleModal"><span>Yes, I want delete this post</span></button>
                    </form>  
    
                </div>
            </div>
            </div>
        </div>    
    </div>
</div>

    
@endsection