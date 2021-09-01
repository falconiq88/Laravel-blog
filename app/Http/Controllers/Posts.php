<?php



Namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use PHPUnit\Framework\Constraint\ObjectEquals;

use  App\Models\Post;
class Posts extends Controller
 {

public function find(Post $post){return view('posts.post', ['post' => $post]);}

public static function all()
{
return view('index',['posts'=>Post::latest('created_at')->filter(request(['search','category','author']))->paginate(4)->withQueryString(),
            'categories' => Category::all()
            , 'authors' => User::all()
            , 'currentCategory'=>Category::firstWhere('name',request('category'))
            ,'currentAuthor'=>User::firstWhere('username',request('author'))]);

}
}
