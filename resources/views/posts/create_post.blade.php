@extends('layouts.app')
@section('content')


<style>.divider:after,
.divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
}
.h-custom {
  height: calc(100% - 73px);

}
@media (min-width:700px){
  section{ margin-top:-70px;}
}
@media (max-width: 450px) {
  .h-custom {
    height: 100%;
  }
}</style>
<section class="vh-200"  >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100 w-100 ">

      <div class="col-md-8 col-lg-6 col-xl-7 offset-xl-1 bg-white" >
        <form  method="POST" action="/create_post" enctype="multipart/form-data" style="padding:5rem;">
            @csrf
          <div class="d-flex  justify-content-center justify-content-lg-center">
            <p class="lead fw-normal mb-5 text-center ">Create Post </p>
          </div>



          <!-- title input -->
          <div class="form-outline mb-4">
                <label class="form-label fw-normal lead" for="form3Example3">Title</label>
            <input id="title" type="text" class="form-control"  name="title"  required  autofocus>

          </div>
                                 @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

          <!-- excerpt input -->
          <div class="form-outline mb-3">
                <label class="form-label fw-normal  lead" for="form3Example4">excerpt</label>
             <textarea id="excerpt" type="text" class="form-control" name="excerpt" required ></textarea>
          </div>
                                 @error('excerpt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

               <!-- body input -->
          <div class="form-outline mb-3">
                <label class="form-label fw-normal  lead" for="form3Example4">the content of post</label>
             <textarea id="body" type="text" class="form-control" name="body" required ></textarea>
          </div>
                               @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

           <!-- Category select -->
          <div class="form-outline mb-3 mt-3">
          <label class="form-label fw-normal  lead" for="form3Example4">Category</label>
         <select class="form-select form-select-md mb-3 mt-3" aria-label=".form-select-lg example" name="category_id" id="category_id">

         @foreach ($categories as $category )
          <option value="{{ $category->id }}">{{ucwords($category->name)}}</option>
         @endforeach
        </select>
                                  @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="mb-3">
  <label for="formFile" class="form-label">Upload the image</label>
  <input name="image" class="form-control" type="file" id="formFile">
</div>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror







 <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;margin-top:1rem;">Create</button>
        </form>
      </div>
    </div>
  </div>










@endsection
