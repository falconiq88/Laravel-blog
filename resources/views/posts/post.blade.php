
@extends('layout')
@section('contents')
<article class="contanier ">

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('/uploads/GettyImages-480187760-58d907525f9b58468379b774.jpg')">

            <div class="container position-relative px-4 px-lg-5">
                <h3 style="text-align: left; color:#ffff;">Categories/ <a style="text-align: left; color:#ffff; "  href="/?category={{$post->category->name}}">{{$post->category->name}}</a></h3>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>{{$post->title}}</h1>
                            <h2 class="subheading">{{$post->slug}}</h2>
                            <span class="meta">
                                Posted by
                                <a  href="/authors/{{$post->author->username}}" role="button" style=" ">{{$post->author->username}}</a>
                                {{$post->created_at}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">

{!!$post->body!!}
                    </div>
                </div>
            </div>
        </article>
</article>
<!-- Comment Section -->
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="headings d-flex justify-content-between align-items-center mb-3">
                <h5>Comments</h5>

            </div>
            <div class="d-grid gap-3">
                @forelse ($post->comments as $comment)
               <x-comment :comment="$comment"  />
                @empty
                <h2 style="text-align: center">No Comments on this Post </h2>
                @endforelse


            </div>
        </div>
    </div>
</div>

@endsection
