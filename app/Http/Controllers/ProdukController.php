<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kategori;
use App\Produk;
use App\Satuan;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::pluck('nama_kategori', 'id');
        $satuan = Satuan::pluck('nama', 'id');

        $produk = DB::table('tbl_produk')->join('tbl_kategori', 'tbl_produk.id_kategori', '=', 'tbl_kategori.id')
            ->select('tbl_kategori.nama_kategori AS nama_kategoris', 'tbl_produk.*')->get();

        $data = array(
            'list_kategori' => $kategori,
            'list_produk' => $produk,
            'list_satuan' => $satuan
        );

        return view('admin/produk/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::pluck('nama_kategori', 'id');
        $satuan = Satuan::pluck('nama', 'id');

        $data = array(
            'list_kategori' => $kategori,
            'list_satuan' => $satuan
        );
        return view('admin/produk/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_produk' => 'required',
            'harga' => 'required',
            'image' => 'required|image',
            'status' => 'required',
            'deskripsi' => 'required',

        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'image' => ':attribute harus gambar',

        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect(url('admin/produk/create'))->withErrors($validator->errors())->withInput($request->all());
        } else {

            // image adalah name dari form image
            $gambar_upload = $request->file('image');
            // upload gambar ke admin/produk/public
            $image = $gambar_upload->store('admin/produk/public');

            $produk = new Produk;
            $produk->id_kategori = $request->input('id_kategori');
            $produk->id_satuan = $request->input('satuan');
            $produk->nama_produk = $request->input('nama_produk');
            $produk->harga = $request->input('harga');
            $produk->satuan = $request->input('satuan');
            $produk->image = $image;
            $produk->status = $request->input('aktif');
            $produk->deskripsi = $request->input('deskripsi');

            $insert = $produk->save();

            if ($insert) {
                return redirect(url('produk'))->with('success', 'Berhasil menambah data produk');
            } else {
                return redirect(url('produk'))->with('error', 'Gagal menambah data produk');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
