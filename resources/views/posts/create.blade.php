@extends('layouts.master')
@section('title', '| Create New Post')
@section('contents')
<div class="container d-flex justify-content-center">
  <div>
    <h4 class="mx-5 mt-5">Add New Post Field</h4>
    <form class="mt-5 rounded" action="/posts/store" method="post" style="background-color: #444;">
      @csrf
      <div class="form-group mx-4" style="width: 550px;">
        <label style="font-weight: bold; color:aliceblue; margin-top:1px;">Title</label>
        <input type="text" name="title" value="{{ old('title') }}"  class="form-control" placeholder="Enter title" aria-describedby="helpId">
        <span class="alert text-danger">@error('title') {{ $message }} @enderror</span>
      </div>


      <div class="form-group mx-4"  style="width: 550px;">
        <label style="font-weight: bold; color:aliceblue; margin-top:1px;">Description</label>
        <textarea class = "form-control" name="body" id="" cols="50" rows="5">{{ old('body') }}</textarea>
        <span class="alert text-danger">@error('body') {{ $message }} @enderror</span>
      </div>
      <div class="form-group mx-4">
          <button type = "submit" name = "" class = "btn btn-info btn-md mb-4">Add Post</button>
      </div>
    </form>
  </div>
</div>
@endsection()

@section('footer')
   @parent()

@endsection()