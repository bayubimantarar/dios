<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\Pegawai;
use App\Http\Requests\PegawaiRequest;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $pegawai = Pegawai::all();

        $datatables = DataTables($pegawai)
            ->addColumn('action', function($pegawai){
                return '
                    <center>
                        <a
                            href="/form-ubah/'.$pegawai->id.'"
                            class="btn btn-sm btn-social btn-warning text-white"
                        >
                            Ubah
                        </a>
                        <a
                            class="btn btn-sm btn-social btn-danger text-white"
                            id="delete-button"
                            onclick="destroy('.$pegawai->id.')"
                        >
                            Hapus
                        </a>
                    </center>
                ';
            })
            ->rawColumns(['action'])
            ->toJson();

        return $datatables;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pegawai.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PegawaiRequest $pegawaiRequest)
    {
        if($pegawaiRequest->hasFile('photo')) {
            $data = [
                'nip' => $pegawaiRequest->nip,
                'name' => $pegawaiRequest->name,
                'email' => $pegawaiRequest->email,
                'gender' => $pegawaiRequest->gender,
                'hobby' => $pegawaiRequest->hobby,
                'photo' => $pegawaiRequest->file('photo')->getClientOriginalName()
            ];
        }else{
            $data = [
                'nip' => $pegawaiRequest->nip,
                'name' => $pegawaiRequest->name,
                'email' => $pegawaiRequest->email,
                'gender' => $pegawaiRequest->gender,
                'hobby' => $pegawaiRequest->hobby
            ];
        }

        Pegawai::create($data);

        return redirect('/');
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
        $pegawai = Pegawai::findOrFail($id);

        return view('pegawai.form_ubah', compact(
            'pegawai'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PegawaiRequest $pegawaiRequest, $id)
    {
        if($pegawaiRequest->hasFile('photo')) {
            $data = [
                'nip' => $pegawaiRequest->nip,
                'name' => $pegawaiRequest->name,
                'email' => $pegawaiRequest->email,
                'gender' => $pegawaiRequest->gender,
                'hobby' => $pegawaiRequest->hobby,
                'photo' => $pegawaiRequest->file('photo')->getClientOriginalName()
            ];
        }else{
            $data = [
                'nip' => $pegawaiRequest->nip,
                'name' => $pegawaiRequest->name,
                'email' => $pegawaiRequest->email,
                'gender' => $pegawaiRequest->gender,
                'hobby' => $pegawaiRequest->hobby
            ];
        }

        Pegawai::where('id', $id)->update($data);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::destroy($id);

        return response()->json(200);
    }
}
