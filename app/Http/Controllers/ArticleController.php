<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{

    public function view($id){
        $data = Article::where('id', $id)->get();
        $more = Article::inRandomOrder()->take(2)->get();
        return view('pages.article_page', compact('data', 'more'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'Required|string',
            'penulis' => 'Required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'Required',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/image'), $imageName);
            
            $data['image'] = 'storage/image/' . $imageName;
        }

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
    $data = $request->validate([
        'title' => 'Required|string',
        'penulis' => 'Required|string',
        'description' => 'Required',
        'category_id' => 'required|integer|exists:categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif', 
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/image'), $imageName);
        
        $data['image'] = 'storage/image/' . $imageName;
    }

    $request = Article::findOrFail($id);

    if($request->update($data)) {
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
        // Hapus gambar jika ada
        if ($article->image && file_exists(public_path($article->image))) {
            unlink(public_path($article->image));
        }

        $article->delete();

        Alert::success('Hore!', 'Data Berhasil di Hapus');
        return back()->with('success', 'Article was deleted');
    } else {
        return back()->with('error', 'Article not found');
    }
}


}
