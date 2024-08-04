<?php

namespace App\Http\Controllers;

use App\Models\LaundryNonMember as Laundry;
use App\Models\Layanan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class LaundryNonMemberController extends Controller
{
   public function index(){
   $data = Laundry::latest()->paginate(10);
   return view('laundry.index', compact('data'));
   }
   public function create()
   {
   }
   public function store(Request $request)
   {
   }
   public function edit($id)
   {
   }
   public function update(Request $request, $id)
   {
   }
   public function destroy($id)
   {
   }
   public function show($id)
   {
   return back();
   }
}
