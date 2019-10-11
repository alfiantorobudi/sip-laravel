<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use DateTime;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from kategori

        $data['daftar_barang'] = Barang::all();
        return view('admin/barang/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $time = new DateTime();
        $timestamp = $time->getTimestamp();
        $date['date'] = new Carbon($timestamp);

        return view('admin/barang/create', $date);
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
            'nama_barang' => 'required|min:3',
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'min:3' => ':attribute terlalu pendek',
        ];

        $validasi = Validator::make($request->all(), $rules, $message);

        if ($validasi->fails()) {
            return redirect(url('admin/barang/create'))->withErrors(
                $validasi->errors()
            )->withInput($request->all());
        } else {

            $barang = new Barang;
            $barang->no = $request->input('no_barang');
            $barang->nama = $request->input('nama_barang');
            $barang->tgl_penerimaan = $request->input('tgl_penerimaan');
            $barang->harga = $request->input('harga');
            $insert = $barang->save();

            if ($insert) {
                return redirect(url('admin/barang'))->with('success', 'Berhasil menambah barang.');
            } else
                return redirect(url('admin/barang'))->with('error', 'Gagal menambah data barang.');
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
        $data['barang'] = DB::table('barangs')
            ->select('barangs.*')
            ->where('barangs.id', $id)->first();

        // validasi kalau error
        if (empty($data['barang'])) {
            return redirect(url('admin/barang'))->with('not_found', 'Data Tidak Ditemukan');
        } else {
            return view('admin/barang/show', $data);
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
        $data['barang'] = DB::table('barangs')
            ->select('barangs.*')
            ->where('barangs.id', $id)->first();

        return view('admin/barang/edit', $data);
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

        $rules = [
            'nama_barang' => 'required|min:3',
        ];

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'min:3' => ':attribute terlalu pendek',
        ];

        $validator = Validator::make($request->all(), $rules, $message);


        if ($validator->fails()) {
            return redirect(url('barang/edit/' . $id))->withErrors(
                $validator
            )->withInput($request->all());
        } else {
            // jika berhasil maka jalankan proses ini
            // select nama dan status dari input
            // select database yg sesuai dengan id
            // insert dan save
            // buat pengkondisian   

            $barang = new Barang;
            $barang->no = $request->input('no_barang');
            $barang->nama = $request->input('nama_barang');
            $barang->tgl_penerimaan = $request->input('tgl_penerimaan');
            $barang->harga = $request->input('harga');
            $insert = $barang->save();

            // kondisi jika sudah diinsert, maka kembalikan ke product
            if ($insert) {
                return redirect(url('admin/barang'))->with('success', 'Berhasil mengupdate data barang.');
            } else {
                return redirect(url('admin/barang'))->with('error', 'Gagal mengupdate data barang.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $delete = $barang->delete();

        if ($delete) {
            return redirect(url('admin/barang'))->with('success', 'Berhasil delete data barang.');
        } else {
            return redirect(url('admin/barang'))->with('error', 'Gagal delete data barang.');
        }
    }

    public function generateID()
    { }
}
