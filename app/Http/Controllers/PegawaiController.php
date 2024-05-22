<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\User;

class PegawaiController extends Controller
{
    public function index()
    {
    $data = Pegawai::with('users')->latest()->paginate(10);
    return view('pegawai.index', compact('data'));
    }
    public function create()
    {
        return view('pegawai.create');
    }
    public function store(Request $request)
    {
         $request->validate([
         'nama' => 'required|min:5',
         'nohp' => 'required|min:5',
         'email' => 'required|min:5|unique:users,email|email',
         'password' => 'required|min:5',
         'jabatan' => 'required'
         ]);

         $simpanuser = new User;
         $simpanuser->name = $request->nama;
         $simpanuser->email = $request->email;
         $simpanuser->password = bcrypt($request->password);
         $simpanuser->jabatan = $request->jabatan;
         $simpanuser->save();
         $userid = $simpanuser->id;

        Pegawai::create([
        'nama_pegawai' => $request->nama,
        'no_hp' => $request->nohp,
        'alamat' => $request->alamat,
        'user_id' => $userid
        ]);

        //redirect to index
        return redirect()->route('pegawai.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        $data = Pegawai::with('users')->where('id',$id)->first();
        return view('pegawai.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Pegawai::find($id);
        $data->nama_pegawai = $request->nama_pegawai;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->nomor_hp;
        $data->save();

        $user = User::find($data->user_id);
        $user->email = $request->email_pegawai;
        $user->jabatan = $request->jabatan;
        $user->save();
        return redirect()->route('pegawai.index');
    }
    public function destroy($id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        $data->users->delete();
        return redirect()->route('pegawai.index')->with(['success', 'Data Berhasil Dihapus!']);
    }
    public function show($id)
    {
        $data = Pegawai::find($id);
        return view('pegawai.show', compact('data'));
    }
}
