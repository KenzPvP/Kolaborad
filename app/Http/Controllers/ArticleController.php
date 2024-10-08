<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{

    public function create(){
        return view('article.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'Required|string',
            'description' => 'Required',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $data['upload'] = now();

        $request = Article::create($data);
        if($request){
            Alert::success('Hore!', 'Data Berhasil di Tambahkan');
            return redirect('/article/list')->with('success','Add Category is Successful');
        }else{
            return back()->with('error','failed to add article');
        }
    }

    public function index(){
        $data = Article::get();
        return view('article.index', compact('data'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
    
        $category = Category::all();
    
        return view('article.update', compact('article', 'category'));
    }
    

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'Required|string',
        'description' => 'Required',
        'category_id' => 'required|integer|exists:categories,id',
    ]);

    $data = [
        'title' => $request->title,
        'description' => $request->description,
        'category_id' => $request->category_id,
    ];

    $article = Article::findOrFail($id);

    if($article->update($data)) {
        Alert::success('Hore!', 'Data Berhasil di Update');
        return redirect()->route('article-list')->with('success', 'Update is successful');
    } else {
        Alert::error('No Way', 'Data Gagal di Update');
        return back()->with('error', 'Failed to update article');
    }
}


public function delete($id)
{
    $article = Article::find($id);

    if ($article) {
        $article->delete();

        Alert::success('Hore!', 'Data Berhasil di Hapus');
        return back()->with('success', 'Article was deleted');
    } else {
        return back()->with('error', 'Article not found');
    }
}


}
