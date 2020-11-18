<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
     
        $posts = Post::Selection()->get();

        if (!$posts)
        return $this->returnError('404', 'This post does not exist');

        return response()->json($posts, 200);
        
    }

}
