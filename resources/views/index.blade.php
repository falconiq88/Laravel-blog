<!-- base -->
@extends('layout')
@section('contents')
    <!-- Page Header-->
        <header class="masthead" style="background-image: url('/uploads/1605012389-image3-1.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>beta Blog</h1>
                            <span class="subheading"> Mohammed Alkelane</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!------------------- filters----------->

<div style="margin-top: 5rem; margin-bottom:10rem;" class="post-preview d-flex flex-row flex-wrap  justify-content-center  ">
<h5 style=" margin-top:2.5rem; margin-right:5rem; margin-left:5rem;" >The Posts fliter</h5>
<!-- category filter -->
    <div style="margin-top:25px;">
  <button class="btn btn-light dropdown-toggle rounded" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
    {{ isset($currentCategory) ? $currentCategory->name :'Categories'}}
  </button>
  <ul style="max-height:300px; overflow:auto;" class="dropdown-menu rounded" aria-labelledby="Category">
       <li><a class="dropdown-item" href="/">All</a></li>
      @foreach ($categories as $category )
 <li ><a " name='category' class="dropdown-item  {{ isset($currentCategory) && $currentCategory->id == $category->id ? 'bg-dark text-white' : ''}}" href="?category={{$category->name}}&{{http_build_query(request()->except('category','page'))}}">{{ucwords($category->name)}}</a></li>
      @endforeach
  </ul>
</div>
<!-- Author Filter -->
 <div style="margin-top:25px;" >
  <button class="btn btn-light dropdown-toggle rounded" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
    {{ isset($currentAuthor) ? $currentAuthor->name :'Authors'}}
  </button>
  <ul style="max-height:300px overflow:auto; " class="dropdown-menu rounded" aria-labelledby="Author">
       <li><a class="dropdown-item " href="/posts">All</a></li>
      @foreach ($authors as $author )
 <li><a class="dropdown-item {{ isset($currentAuthor) && $currentAuthor->id == $author->id ? 'bg-dark text-white' : ''}}" href="?author={{$author->username}}">{{ucwords($author->name)}}</a></li>
      @endforeach
  </ul>
</div>
<!-- search ----------->
<form method="GET" action="#">
@if (request('category'))
<input type='hidden' name="category" value='{{request('category')}}'>
@endif
<div class="d-flex justify-content-center px-xl-2  ">
<div class="search" > <input value="{{request('search')}}" style="height: 40px; width:300px;"  name="search" type="text" class="search-input rounded" placeholder="Find Post ... " > <button style="margin-top:35px;"  type="submit"  class="search-icon"> <i  class="fa fa-search"></i> </button> </div>
</div>
</div>
</form>
<!-- all posts -->
<x-posts :posts='$posts' ></x-posts>
<!-- pagination -->
<div class="d-flex justify-content-center" style="max-width:100%;">
<div class="pagination pagination-xl-lg">{{$posts->links()}}</div>
</div>
<!--create post -->
<div class="container row d-flex justify-content-center">
<p><a class="btn btn-dark btn-lg " href="/create_post" role="button">Create post</a></p>
</div>
@endsection
