<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class LayananController extends Controller
{
    public function index()
    {
        $data = Layanan::latest()->paginate(10);
        return view('layanan.index', compact('data'));
    }
    public function create()
    {
        return view('layanan.create');
    }
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'namalayanan' => 'required',
            'durqasi' => 'required',
            'harga' => 'required'
        ]);

        $simpanuser = new Layanan();
        $simpanuser->nama = $request->namalayanan;
        $simpanuser->durasi = $request->durasi;
        $simpanuser->harga = $request->harga;
        $simpanuser->save();

        //redirect to index
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        $data = Member::where('id', $id)->first();
        return view('member.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'min:5|email',
            'nama_member' => 'required|min:5',
            'alamat' => 'required|min:5',
            'nomor_hp' => 'required|min:5',
            'no_identitas' => 'required|min:5',
        ]);
        $data = Member::find($id);
        $data->nama_member = $request->nama_member;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->nomor_hp;
        $data->no_identitas = $request->no_identitas;
        $data->save();

        $user = User::find($data->user_id);
        $user->email = $request->email;
        if (
            $request->password

            <> ''
        ) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('member.index');
    }
    public function destroy($id)
    {
        $data = Member::find($id);
        $data->delete();
        $data->users->delete();
        return redirect()->route('member.index')->with(['success', 'Data Berhasil Dihapus!']);
    }
    public function show($id)
    {
        $data = Member::find($id);
        return view('member.show', compact('data'));
    }
}
