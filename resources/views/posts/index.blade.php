@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resor">

    <title>Document</title>
</head>
  

<body>
    <div class="container">

        <form>
            <a  href="{{route('posts.create')}}" method=""  class="btn btn-primary"><i style="padding-right: 10px" class="bi bi-plus-square"></i> CREATE A NEW POST</a>    
        </form>

    </div>

    <div class="posts-container container">
        <br>
        <table class="table table-striped">
            <thead>
              <tr>
        
                <th scope="col">#</th>
                <th scope="col"><i class="bi bi-person-circle"></i> <br> AUTHOR</th>
                <th scope="col"><i class="bi bi-geo-fill"> <br> </i>LOCATION</th>
                <th scope="col"><i class="bi bi-file-earmark-post"></i> <br> POST CONTENT</th>
                <th scope="col"><i class="bi bi-image-fill"></i> <br> IMAGE</th>
                <th scope="col"><i class="bi bi-info-circle-fill"></i> <br> ACTIONS</th>
    
        
              </tr>
        
            </thead>
        
            <tbody>
        
                @foreach($posts as $post)
        
                    <tr>
        
                        <th  style="padding-top: 100px; font-size: 16px" scope="row"><b>{{$post->id}}</b></th>
                        <td  style="padding-top: 100px; font-size: 16px">{{$post->author}}</td>
                        <td  style="padding-top: 100px; font-size: 16px">{{$post->location}}</td>
                        <td  style="padding-top: 65px">{{$post->textpost}}</td>
                        <td><img style="border-radius: 150px;" src="{{$post->image}}" alt="" /></td>
                        <td style="padding-top: 100px" class="">
                            <a href="{{ route('posts.show', $post) }}"><button class="btn btn-info"><i class="bi bi-zoom-in"></i></button></a>
                            <br>
                        </td>    
                        
        
                    </tr>
        
                @endforeach
        
            </tbody>
        
          </table>
    </div>
</body>
</html>
    
@endsection