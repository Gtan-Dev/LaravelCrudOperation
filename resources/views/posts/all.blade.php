@extends('layouts.master')
@section('title', '- Posts')
@section('contents')
<div class="container">
     <div class = "contents-wrapper" style = "display:flex; flex-direction:row; justify-content:space-between">             
              <div>
               <h4>List of all created post</h4>    
              </div>
              <div>
                    <a class = "btn btn-secondary" href="/posts/create">Add Post</a> 
              </div>
          </div>
          <table class = "table table-striped table-light" style = "margin-top:25px">
               <tr>
                    <th>PostN#</th>
                    <th>Post Title</th>
                    <th>Description</th>
                    <th>Action</th>
               </tr>
               @foreach ($data as $post)
               <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td class="d-flex">
                         <a class = "btn btn-info btn-sm mx-2" href="/posts/edit/{{ $post->id }}">Modify</a>
                         <a class = "btn btn-warning btn-sm" href="/posts/delete/{{ $post->id }}">Remove</a>
                    </td>
               </tr>     
               @endforeach
          </table>
</div> 
@endsection()

@section('footer')

@endsection()
