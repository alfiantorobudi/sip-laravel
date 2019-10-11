<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;
use DB;
use Illuminate\Support\Facades\Validator;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from satuan
        $data['daftar_satuan'] = Satuan::all();

        return view('admin/satuan/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/satuan/create');
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
            'nama_satuan' => 'required|unique:tbl_satuan,nama',
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'unique' => ':attribute sudah ada di database'
        ];

        $validasi = Validator::make($request->all(), $rules, $message);

        if ($validasi->fails()) {
            return redirect(url('admin/satuan/create'))->withErrors(
                $validasi->errors()
            )->withInput($request->all());
        } else {

            $satuan = new Satuan;
            $satuan->nama = $request->input('nama_satuan');
            $insert = $satuan->save();

            if ($insert) {
                return redirect(url('admin/satuan'))->with('success', 'Berhasil menambah satuan.');
            } else
                return redirect(url('admin/satuan'))->with('error', 'Gagal menambah data satuan.');
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
        return view('admin/satuan/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['satuan'] = DB::table('tbl_satuan')
            ->select('tbl_satuan.*')
            ->where('tbl_satuan.id', $id)->first();

        return view('admin/satuan/edit', $data);
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
