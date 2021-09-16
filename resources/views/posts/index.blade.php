@extends('layouts.app')

@section('content')

<table class="table table-striped table-dark">
    <thead>
      <tr>

        <th scope="col">#</th>
        <th scope="col">author</th>
        <th scope="col">location</th>
        <th scope="col">textpost</th>
        <th scope="col">image</th>

      </tr>

    </thead>

    <tbody>

        @foreach($posts as $post)

            <tr>

                <th scope="row">{{$post->id}}</th>
                <td>{{$post->author}}</td>
                <td>{{$post->location}}</td>
                <td>{{$post->textpost}}</td>
                <td>{{$post->image}}</td>

            </tr>

        @endforeach

    </tbody>
    
  </table>
    
@endsection