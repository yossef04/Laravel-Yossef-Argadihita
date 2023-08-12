<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data['result'] = Produk::paginate();
        return view('Produk.list', $data);
    }


public function create()
{
    return view('produk.form');
}

public function store(Request $request)
{
    $rules = [
        'kategori_produk' => 'required',
        'harga_produk' => 'required|numeric|min:1000'
    ];
    $this->validate($request, $rules);
    return view('produk.show',['data'=> $request]);
}
}