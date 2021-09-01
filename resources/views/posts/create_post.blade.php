@extends('layout')
@section('contents')




<form class="container mx-auto" action="POST" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title</label>
      <input name='title' type="text" class="form-control" id="inputEmail4" placeholder="Title">
    </div>

  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
    <label >Excerpt</label>
    <input name='excerpt' type="text" class="form-control" id="inputAddress" placeholder="short description">
  </div>
  </div>
  <div class="form-row">
      <div class="form-group col-md-6">
    <label >content post</label>
    <input name='body' type="text" class="form-control" id="inputAddress2" placeholder="lorem ipsoum....................">
  </div>
  </div>

  </div>
  <button type="submit" class="btn btn-primary">submit</button>
</form>









@endsection
