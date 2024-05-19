<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaundryMemberController extends Controller
{
    public function index(): View
    {
    $data = PembelianBarang::latest()->paginate(10);
    return view('pembelianbarang.index', compact('data'));
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
