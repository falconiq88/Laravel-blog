@props(['posts'])
@forelse ($posts as $post)

 <div class="container m-auto">


<figure class=" d-flex flex-row flex-wrap">
  <img src="/uploads/{{($post->image)? $post->image :'1605012389-image3-1.jpg'}}" class="figure img-fluid rounded  col-xl-4  row-sm-1 row-md-1 row-lg-1" alt="...">
<div class="  col-xl-6  " style="padding:3%;">

                    <div class="flex-2 flex flex-col justify-between" style="margin:5%;">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">
                                <a href="/?author={{$post->author->username}}"
                                   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                   style="font-size: 15px">{{$post->author->name}}</a>

                                <a href="/?category={{$post->category->name}}"
                                   class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                   style="font-size: 15px">{{$post->category->name}}</a>
                            </div>
                        </header>
                    </div>
   <a href="/posts/{{$post->slug}}">
                            <h2 class="">{{$post->title}}</h2>
                            <h3 class="post-subtitle">{{$post->excerpt}}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a>{{$post->author->username}}</a>
                            on <a>{{$post->created_at}}</a>

                        </p>
</div>
</figure>
 </div>
<!-- Divider-->
<hr class="my-4" />
@empty
    <h1 style="text-align: center;">No Posts Available</h1>
@endforelse

