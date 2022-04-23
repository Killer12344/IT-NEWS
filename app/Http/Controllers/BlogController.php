<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $articles = Article::when(isset(request()->search),function ($query){

            $search = request()->search;
            return $query->where('title','like',"%$search%")->orwhere('description','like',"%$search%");

        })->with(['user','category'])->orderBy('id','DESC')->paginate('5');
        return view('welcome',compact('articles'));
    }

    public function detail($slug){
        $article = Article::where('slug',$slug)->first();

        if (empty($article)){
            return abort(404);
        }

        return view('blog.show', compact('article'));
    }

    public function baseCategory($id){

        $articles = Article::when(isset(request()->search),function ($query){

            $search = request()->search;
            return $query->orwhere('title','like',"%$search%")->orwhere('description','like',"%$search%");

        })->where('category_id',$id)->with(['user','category'])->orderBy('id','DESC')->paginate('5');

        return view('welcome',compact('articles'));

    }

    public function baseUser($id){
        $articles = Article::when(isset(request()->search),function ($query){

            $search = request()->search;
            return $query->where('title','like',"%$search%")->orwhere('description','like',"%$search%");

        })->where('user_id',$id)->with(['user','category'])->orderBy('id','DESC')->paginate('5');
        return view('welcome',compact('articles'));
    }

}
