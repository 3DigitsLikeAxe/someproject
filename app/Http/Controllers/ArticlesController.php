<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Article;


class ArticlesController extends Controller
{
	public function index()
	{
		if (request('tag'))
		{
			$articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
		}else{
			$articles = Article::paginate(4);
		}
		
		return view('blog.blog', ['articles' => $articles]);
	}
	public function show(Article $article)
	{
		
		return view('blog.index', ['article' => $article]);
	}
	
	public function showGallery()
	{
		$gallery = Article::paginate(4);
		
		return view('galary', ['gallery' => $gallery]);
	}
	public function create()
	{
		return view('blog.create', ['tags' => Tag::all()]);
	}
	public function store()
	{
		
		$article = new Article(request(['img', 'description', 'text']));
		
		$this->validateArticle();
		$user = 2;
		$article->user_id = $user;	
		
		$image = request()->file('img');
        if ($image) { 
            $path = $image->store('uploads', 'public');
            $base = basename($path);
        }
        $data = request()->all();
        $data['img'] = $base ?? null;
		
        
		$article->img = "/storage/uploads/" . $base;
		$article->description = request('description');
		$article->text = request('text');
		
		$article->save();
		
		if (request()->has('tags'))
		{
			$article->tags()->attach(request('tags'));
		}
		
		return redirect('/blog');
	}
	public function edit(Article $article)
	{
		
		return view('blog.edit', ['article' => $article]);
	}
	
	public function update($id)
	{
		request()->validate([
		'img'=>'required',
		'description'=>'required',
		'text'=>'required',
		]);
		
		$article = Article::find($id);
		$image = request()->file('img');
        if ($image) { 
            $path = $image->store('uploads', 'public');
            $base = basename($path);
        }
        $data = request()->all();
        $data['img'] = $base ?? null;
		
		$article->img = "/storage/uploads/" . $base;
		$article->description = request('description');
		$article->text = request('text');
		
		$article->save();
		
		return redirect('/blog/'.$article->id);
	}
	
	protected function validateArticle()
	{
		return request()->validate([
		'img'=>'required',
		'description'=>'required',
		'text'=>'required',
		'tags' =>'exists:tags,id',
		]);
	}
	
	public function delete($id)
	{
		$article = Article::findOrFail($id);
        $article->delete();
        return redirect('/blog');
	}
	public function refreshToken(Request $request)
	{
		 session()->regenerate();
		 return response()->json([
			"token"=>csrf_token()],
		  200);

	}
}
