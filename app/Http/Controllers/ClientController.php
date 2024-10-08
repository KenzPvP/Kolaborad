<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\StudiKasus;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ClientController extends Controller
{
    public function create(){
        return view('client.add');
    }

    public function store(Request $request)
    {
        // Validasi data
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|string|in:testimoni,kasus', // Hanya testimoni atau studi_kasus
            'name' => 'required|string',
            'company' => 'required|string',
            'description' => 'required|string',
        ]);
    
        // Cek apakah ada file gambar yang di-upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/image'), $imageName);
            
            $data['image'] = 'storage/image/' . $imageName;
        }
    
        // Simpan data ke tabel yang sesuai berdasarkan 'type'
        if ($data['type'] === 'testimoni') {
            // Simpan ke tabel 'testimonis'
            Testimoni::create([
                'image' => $data['image'],
                'name' => $data['name'],
                'company' => $data['company'],
                'description' => $data['description'],
            ]);
        Alert::success('Hore!', 'Data Berhasil ditambahkan');
        return redirect('/testimoni/list')->with('success', 'Add Client is Successful');

        } elseif ($data['type'] === 'kasus') {
            // Simpan ke tabel 'studi_kasus'
            StudiKasus::create([
                'image' => $data['image'],
                'name' => $data['name'],
                'company' => $data['company'],
                'description' => $data['description'],
            ]);
        Alert::success('Hore!', 'Data Berhasil ditambahkan');
        return redirect('/kasus/list')->with('success', 'Add Client is Successful');
        }
    }
    



    public function kasus(){
        $data = StudiKasus::get();
        return view('client.kasus.index', compact('data'));
    }
    public function testimoni(){
        $data = Testimoni::get();
        return view('client.testimoni.index', compact('data'));
    }

    public function editTesti($id)
    {
        $testimoni = Testimoni::where('id', $id)->first();
        
        if ($testimoni) {
            return view('client.update', ['client' => $testimoni]);
        } else {
            return back()->with('error', 'Data tidak ditemukan');
        }
    }
    public function editKas($id)
    {
        $kasus = StudiKasus::where('id', $id)->first();
    
        if ($kasus) {
            return view('client.update', ['client' => $kasus]);
        } else {
            return back()->with('error', 'Data tidak ditemukan');
        }
    }

    

    public function update(Request $request, $id)
{
    $data = $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        'name' => 'required|string',
        'type' => 'required|string|in:testimoni,studi_kasus', 
        'company' => 'required|string',
        'description' => 'required|string',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/image'), $imageName);
        
        $data['image'] = 'storage/image/' . $imageName;
    }

    if ($data['type'] === 'testimoni') {
        $testi = Testimoni::findOrFail($id);
        $testi->update($data);
    } elseif ($data['type'] === 'kasus') {
        $kasus = StudiKasus::findOrFail($id);
        $kasus->update($data);
    }

    Alert::success('Hore!', 'Data Berhasil di update');
        return redirect('/client/list')->with('success', 'Update Client is Successful');
}



public function delete($id)
    {
        $testimoni = Testimoni::where('id', $id)->delete();
        $kasus = StudiKasus::where('id', $id)->delete();

        if ($testimoni){
            Alert::success('Hore!', 'Data Berhasil di hapus');
            return back();
        }elseif($kasus){
            Alert::success('Hore!', 'Data Berhasil di hapus');
            return back();
        }else{
            Alert::error('Nooo!', 'Data Gagal di hapus');
            return back();
        }
    }


}
