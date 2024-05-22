<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\PembelianBarang;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index()
    {
    $data = Member::latest()->paginate(10);
    return view('member.index', compact('data'));
    }
    public function create()
    {
        return view('member.create');
    }
    public function store(Request $request)
    {
         $request->validate([
            'email' => 'required|min:5|unique:users,email|email',
            'password' => 'required|min:5',
            'nama_member' => 'required|min:5',
            'alamat' => 'required|min:5',
            'nomor_hp' => 'required|min:5|unique:member,no_hp',
            'no_identitas' => 'required|min:5|unique:member,no_identitas',
         ]);
        
          $simpanuser = new User;
          $simpanuser->name = $request->nama_member;
          $simpanuser->email = $request->email;
          $simpanuser->password = bcrypt($request->password);
          $simpanuser->jabatan = 'member';
          $simpanuser->save();
          $userid = $simpanuser->id;

          $member = new Member;
          $member->no_identitas = $request->no_identitas;
          $member->nama_member = $request->nama_member;
          $member->alamat = $request->alamat;
          $member->no_hp = $request->nomor_hp;
          $member->user_id = $userid;
          $member->save();

         //redirect to index
         return redirect()->route('member.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        $data = Member::where('id',$id)->first();
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
        if($request->password <> ''){
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
