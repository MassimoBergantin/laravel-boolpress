@extends('layouts.app')

@section('content')

<div class="posts-container">
    <table class="table table-striped">
        <thead>
          <tr>
    
            <th scope="col">#</th>
            <th scope="col"><i class="bi bi-person-circle"></i> <br> AUTHOR</th>
            <th scope="col"><i class="bi bi-geo-fill"></i>LOCATION</th>
            <th scope="col"><i class="bi bi-file-earmark-post"></i> <br> POST CONTENT</th>
            <th scope="col"><i class="bi bi-image-fill"></i> <br> IMAGE</th>
            <th scope="col"><i class="bi bi-info-circle-fill"></i> <br> INFO</th>

    
          </tr>
    
        </thead>
    
        <tbody>
    
            @foreach($Posts as $post)
    
                <tr>
    
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->author}}</td>
                    <td>{{$post->location}}</td>
                    <td>{{$post->textpost}}</td>
                    <td><img src="{{$post->image}}" alt="" /></td>
                    <td><a href="{{ route('posts.show', $post) }}"><i class="bi bi-zoom-in"></i></a></td>

    
                </tr>
    
            @endforeach
    
        </tbody>
    
      </table>
</div>
    
@endsection