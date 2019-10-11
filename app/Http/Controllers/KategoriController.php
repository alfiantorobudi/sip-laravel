<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use DB;

use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from kategori
        $data['daftar_kategori'] = Kategori::all();

        return view('admin/kategori/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kategori/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // VALIDASI ERRORS

        $rules = [
            'nama_kategori' => 'required|min:3|unique:tbl_kategori,nama_kategori',
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'min:3' => ':attribute terlalu pendek',
            'unique' => ':attribute sudah ada di database'
        ];

        $validasi = Validator::make($request->all(), $rules, $message);

        if ($validasi->fails()) {
            return redirect(url('admin/kategori/create'))->withErrors(
                $validasi->errors()
            )->withInput($request->all());
        } else {

            $kategori = new Kategori;
            $kategori->nama_kategori = $request->input('nama_kategori');
            $kategori->status = $request->input('customSwitch1');
            $insert = $kategori->save();

            if ($insert) {
                return redirect(url('admin/kategori'))->with('success', 'Berhasil menambah kategori.');
            } else
                return redirect(url('admin/kategori'))->with('error', 'Gagal menambah data kategori.');
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
        $data['kategori'] = DB::table('tbl_kategori')
            ->select('tbl_kategori.*')
            ->where('tbl_kategori.id', $id)->first();

        // validasi kalau error
        if (empty($data['kategori'])) {
            return redirect(url('admin/kategori'))->with('not_found', 'Data Tidak Ditemukan');
        } else {
            return view('admin/kategori/show', $data);
        };
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kategori'] = DB::table('tbl_kategori')
            ->select('tbl_kategori.*')
            ->where('tbl_kategori.id', $id)->first();

        return view('admin/kategori/edit', $data);
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
