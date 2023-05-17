@extends('layouts.master')
@section('title', '| Edit Post')
@section('contents')
<div class="container d-flex justify-content-center">
  <div>
    <h4 class="mx-0 mt-5">Modify This Post</h4>
    <form action="/posts/update" method="post"  style = "margin-top: 30px; background-color: #444;">
        @csrf
        @foreach ($posts as $post)
        <div class="form-group  mx-4" style = "margin-top:25px; width: 550px;">
          <label for="" style="font-weight: bold; color:aliceblue;" class="mt-4">Title</label>
          <input type="hidden" name="id" value="{{ $post->id }}"  class="form-control" placeholder="" aria-describedby="helpId">
          <input type="text" name="title" value="{{ $post->title }}"  class="form-control" placeholder="" aria-describedby="helpId">
          <span class="alert text-danger">@error('title') {{ $message }} @enderror</span>
        </div>
        <div class="form-group mx-4" style = "margin-top:25px; width: 550px;">
          <label style="font-weight: bold; color:aliceblue; margin-top:1px;" class="mt-4" for="body">Description</label>
          <textarea class = "form-control" name="body" id="" cols="50" rows="6">{{ $post->body }}</textarea>
          <span class="alert text-danger">@error('body') {{ $message }} @enderror</span>
        </div>
        
        @endforeach
        <div class="form-group mx-4">
            <button type = "submit" class = "btn btn-info btn-md mb-4">Save Change</button>
        </div>
    </form>
  </div>
</div>

  @endsection()

  @section('footer')
     @parent()
  
  @endsection()