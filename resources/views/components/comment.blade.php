@props(['comment'])
<div class="comments p-3 rounded bg-light" >
                <div class="d-flex justify-content-between align-items-center">
                    <div class="rounded flex-shrink-0"> <img src="/man.png" height="70" width="70" class="rounded" style="border-radius:0.75rem; object-fit:cover;"> <span style="padding-left: 1em"><a href='/?author={{ $comment->author->username }}'> {{ $comment->author->name }}</a></span> </div> <small>{{ $comment->created_at->diffForHumans() }}</small>
                </div>
                <div class="action d-flex justify-content-between mt-2 align-items-center">
                    <div class="py-4">{{ $comment->body }} </div>

                </div>
            </div>
