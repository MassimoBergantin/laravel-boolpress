@extends('layouts.app')

@section('content')

<div class="container">


    <a href="{{ route('posts.index', $post) }}">
        <button class="btn btn-primary"><i class="bi bi-stickies"></i></button>    
    </a>

    <span>GO TO POSTS</span>


</div>

<br>

<div  class="posts-container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <br>
                        <h3>{{ $error }}</h3>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="{{ route('posts.update', $post) }}"  method="POST">
        @csrf

        @method('PUT') 

        <div style="padding: 25px; border: 2px solid lightgrey; " class="container">

            <div class="form-group">
                <label for="author"> <i style="font-size: 20px" class="bi bi-person-circle"></i> <br> Author</label>
                <input style="border-radius: 50px;" type="text" class="form-control" name="author" id="author" placeholder="Welcome back :)" value="{{ $post->author }}">
            </div>
    
            <div class="form-group">
                <label for="location"><i style="font-size: 20px" class="bi bi-geo-fill"></i> <br> Location</label>
                <input style="border-radius: 50px;" type="text" class="form-control" name="location" id="location" placeholder="Where you took the photo?"  value="{{ $post->location }}">
            </div>
    
            <div class="form-group">
                <label for="textpost"><i style="font-size: 20px" class="bi bi-file-earmark-post"></i> <br> Write here your thoughts</label>
                <input style="border-radius: 50px;" type="text" class="form-control" name="textpost" id="textpost" placeholder="What's your feeling?"  value="{{ $post->textpost }}">
            </div>
    
            <div class="form-group">
                <label for="image"><i style="font-size: 20px" class="bi bi-image-fill"></i> <br> Image</label>
                <br>
                <input style="border-radius: 50px;" type="text" class="form-control" name="image" id="image" placeholder="Insert img URL here!"
                 value="{{ $post->image }}">
                <br>
                <button style="border-radius: 25px; padding: 10px" type="button" class="btn btn-success"><i style="font-size: 20px;" class="bi bi-paperclip"></i>Upload your image here</button>
            </div>

            <br>
            <br>
            <hr>
            <div class="form-group">
                <!--<input type="submit" value="Salva">-->
                <button style="border-radius: 25px; padding: 15px" type="submit" class="btn btn-primary"> Post-it! </button>
            </div>

        </div>



    </form>

</div>




@endsection