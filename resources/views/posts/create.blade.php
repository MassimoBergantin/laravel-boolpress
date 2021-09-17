@extends('layouts.app')

@section('content')
<div class="posts-container">

    <form action="{{ route('posts.store')}}"  method="POST">
        @csrf

        <div style="padding: 25px" class="container">

            <div class="form-group">
                <label for="author"> <i style="font-size: 20px" class="bi bi-person-circle"></i> <br> Author</label>
                <input style="border-radius: 50px;" type="text" class="form-control" name="author" id="author" placeholder="Welcome back :)">
            </div>
    
            <div class="form-group">
                <label for="location"><i style="font-size: 20px" class="bi bi-geo-fill"></i> <br> Location</label>
                <input style="border-radius: 50px;" type="text" class="form-control" name="location" id="location" placeholder="Where you took the photo?">
            </div>
    
            <div class="form-group">
                <label for="textpost"><i style="font-size: 20px" class="bi bi-file-earmark-post"></i> <br> Write here your thoughts</label>
                <input style="border-radius: 50px;" type="text" class="form-control" name="textpost" id="textpost" placeholder="What's your feeling?">
            </div>
    
            <div class="form-group">
                <label for="image"><i style="font-size: 20px" class="bi bi-image-fill"></i> <br> Image</label>
                <input style="border-radius: 50px;" type="text" class="form-control" name="image" id="image" placeholder="Upload your pic here!">
            </div>

        </div>



    </form>

</div>




@endsection