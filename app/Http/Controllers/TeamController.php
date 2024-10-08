<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class TeamController extends Controller
{
    public function create(){
        return view('team.add');
    }

    public function index(){
        $data = Team::get();
        return view('team.index', compact('data'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string',
            'jabatan' => 'required|string',
            'description' => 'required|string',
        ]);
    
        // Cek apakah ada file gambar yang di-upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/image'), $imageName);
            
            $data['image'] = 'storage/image/' . $imageName;
        }
    
        if($data){
            Team::create($data);
            Alert::success('Hore!', 'Data Berhasil di upload');
            return redirect('/team/list');
        }
    }

    public function edit($id)
    {
        $team = Team::where('id', $id)->first();
        
        if ($team) {
            return view('team.update', compact('team'));
        }
    }

    public function update(Request $request, $id)
{
    $data = $request->validate([
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        'name' => 'required|string',
        'jabatan' => 'required|string',
        'description' => 'required|string',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/image'), $imageName);
        
        $data['image'] = 'storage/image/' . $imageName;
    }

    $team = Team::findOrFail($id);
    if($team->update($data)) {
        Alert::success('Hore!', 'Data Berhasil di Update');
        return redirect()->route('team-list')->with('success', 'Update is successful');
    }
}



public function delete($id)
{
    $data = Team::find($id);

    if ($data) {
        $data->delete();
        Alert::success('Hore!', 'Data Berhasil di Hapus');
        return back()->with('success', 'Team was deleted');
    } else {
        return back()->with('error', 'Team not found');
    }


}
}