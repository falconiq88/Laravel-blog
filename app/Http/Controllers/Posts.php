<?php



Namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use PHPUnit\Framework\Constraint\ObjectEquals;
use  App\Models\Post;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;
use Illuminate\Support\Str;

class Posts extends Controller
 {

public function show(Post $post){return view('posts.post', ['post' => $post]);}

public static function all()
{
return view('index',['posts'=>Post::latest('created_at')->filter(request(['search','category','author']))->paginate(4)->withQueryString(),
            'categories' => Category::all()
            , 'authors' => User::all()
            , 'currentCategory'=>Category::firstWhere('name',request('category'))
            ,'currentAuthor'=>User::firstWhere('username',request('author'))]);

}

public static function storeComment(Post $post){

    request()->validate(['body'=>'required']);
   $post->comments()->create([
       'user_id'=>auth()->id(),
       'post_id'=>$post->id,
       'body'=>request('body')
]);

return back();
}




    public static function storePost()
    {
       $attributes= request()->validate([
            'title'=> 'required|unique:posts',
            'excerpt'=>'required',
            'image'=>'required|image',
            'body'=>'required',
            'category_id'=>['required',ValidationRule::exists('categories', 'id')]//('categories','id')]

       ]);

       
       Post::create([
            'title' => $attributes['title'],
            'excerpt' => $attributes['excerpt'],
            'body' => $attributes['body'],
            'category_id' => $attributes['category_id'],
            'user_id'=>auth()->id(),
            'image'=>request()->file('image')->store('','public'),
            'slug'=>Str::slug($attributes['title'],0,7)

       ]);


        return redirect('/');
        //ddd(request()->file('image')->store('','public'));
    }
}


