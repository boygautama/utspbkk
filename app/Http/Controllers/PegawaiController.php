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

          $simpanuser = User::create([
          'name' => $request->nama,
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'jabatan' => $request->jabatan,
          ]);
          $userid = $simpanuser->id();
          dd($userid);
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
        $data = Pegawai::where('id',$id)->first();
        return view('pegawai.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        return redirect()->route('pegawai.index');
    }
    public function destroy($id)
    {
        return redirect()->route('pegawai.index');
    }
    public function show($id)
    {
    return back();
    }
}
