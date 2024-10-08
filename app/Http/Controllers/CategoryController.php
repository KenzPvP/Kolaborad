<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function create(){
        return view('category.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'Required|string',
        ]);

        $request = Category::create($data);
        if($request){
            Alert::success('Hore!', 'Data Berhasil di Tambahkan');
            return redirect('/category/list')->with('success','Add Category is Successful');
        }else{
            return back()->with('error','failed to add category');
        }
    }

    public function index(){
        $data = Category::get();
        return view('category.index', compact('data'));
    }
    public function articleTambah(){
        $data = Category::all();
        return view('article.add', compact('data'));
    }
    public function articleUpdate(){
        $data = Category::all();
        return view('article.update', compact('data'));
    }

    public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('category.update', compact('category')); 
}

    public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
    ]);

    $data = [
        'judul' => $request->judul,
    ];

    $category = Category::findOrFail($id);

    if($category->update($data)) {
        Alert::success('Hore!', 'Data Berhasil di Update');
        return redirect()->route('category-list')->with('success', 'Update is successful');
    } else {
        Alert::error('No Way', 'Data Gagal di Update');
        return back()->with('error', 'Failed to update category');
    }
}


    public function delete($id)
{
    $data = Category::find($id);

    if ($data) {
        $data->delete();
        Alert::success('Hore!', 'Data Berhasil di Hapus');
        return back()->with('success', 'Category was deleted');
    } else {
        return back()->with('error', 'Category not found');
    }
}

}
