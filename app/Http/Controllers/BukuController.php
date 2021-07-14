<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use App\Buku;
use Yajra\DataTables\DataTables;


class BukuController extends Controller
{
    public function index(Request $request, Builder $builder)
    {

        if($request->ajax()){
            $buku = Buku::all();
            return DataTables::of($buku)
            ->editColumn('action', function($buku){
                return view('partials._action', [
                    'model'     => $buku,
                    'form_url'  => route('buku.destroy', $buku->id),
                    'edit_url'  => route('buku.edit', $buku->id),
                    'confirm_message' => 'Yakin Mau Menghapus Data Ini ?'

                ]);
            })
            ->editColumn('judul', function($buku){
                 return view('partials._detail',[
                     'model' => $buku,
                     'detail_url' => route('buku.show', $buku->id),
                 ]);
            })

            ->rawColumns(['aksi', 'judul'])
            ->make(true);
        }

        $html = $builder->columns([
            ['data'  => 'judul', 'name' => 'judul', 'title' => 'Judul Buku'],
            ['data'  => 'isbn', 'name' => 'isbn', 'title' => 'ISBN'],
            ['data'  => 'penerbit', 'name' => 'penerbit', 'title' => 'Penerbit'],
            ['data'  => 'tahun_terbit', 'name' => 'tahun_terbit', 'title' => 'Tahun Terbit'],
            ['data'  => 'jumlah', 'name' => 'jumlah', 'title' => 'Jumlah'],
            ['data'  => 'deskripsi', 'name' => 'deskripsi', 'title' => 'Deskripsi'],
            ['data'  => 'lokasi', 'name' => 'lokasi', 'title' => 'Lokasi'],
            ['data'  => 'action', 'name' => 'action', 'title' => 'Aksi', 'orderable' => false, 'searchable' => false],
        ]);

        return view('modules.buku.index', compact('html'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'judul' => 'required',
            'cover' => 'required|mimes:png,jpg,jpeg|max:1025',
        ],
        [
            'judul.required'=> "Judul tidak boleh Kosong",
            'cover.required'=> "Masukan Cover",
            'cover.mimes' => "File tidak Support",
            'cover.max' => "Batas Maksimum upload adalah 1 mb"
        ]
    );

        $nama_cover = null ;
        if($request->hasFile('cover')){
            $fileupload = $request->file('cover');
            $extension = $fileupload->getClientOriginalExtension();
            $nama_cover = md5(time()).'.'.$extension;
            $destination = public_path().DIRECTORY_SEPARATOR.'cover';
            $fileupload->move($destination, $nama_cover);
        }
        $buku = Buku::create([
            'judul' => $request->judul,
            'isbn'  => $request->isbn,
            'penerbit'  => $request->penerbit,
            'tahun_terbit'  => $request->tahun_terbit,
            'jumlah'  => $request->jumlah,
            'deskripsi'  => $request->deskripsi,
            'lokasi'  => $request->lokasi,
            'cover'  => $nama_cover
        ]);

        toast('Berhasil Menambahkan Data', 'info');
        return redirect()->route('buku.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        return view('modules.buku.show', compact('buku'));
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
