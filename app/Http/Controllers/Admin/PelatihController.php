<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mobil;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\MobilStoreRequest;
use App\Http\Requests\Admin\MobilUpdateRequest;
use App\Models\Pelatih;

// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Carbon;


class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobils = Pelatih::latest()->get();
        return view('admin.mobils.index', compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pelatih,slug',
            'prestasi' => 'required|string|max:255',
            'pengalaman' => 'required|numeric',
            'metode' => 'required|string|max:255',
            'taktis' => 'required|string|max:255',
            'kepemimpinan' => 'required|string|max:255',
        ]);
    
        $slug = Str::slug($request->nama, '-');
    
        Pelatih::create([
            'nama' => $request->nama,
            'slug' => $slug,
            'prestasi' => $request->prestasi,
            'pengalaman' => $request->pengalaman,
            'metode' => $request->metode,
            'taktis' => $request->taktis,
            'kepemimpinan' => $request->kepemimpinan,
        ]);
    
        return redirect()->route('mobils.index')->with([
            'message' => 'Data Berhasil Ditambahkan',
            'alert-type' => 'success'
        ]);
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
    public function edit(Pelatih $mobil)
    {
        return view('admin.mobils.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MobilUpdateRequest $request, Pelatih $mobil)
    {
        if($request->validated()){
            $slug = Str::slug($request->nama,'-');
            $mobil->update($request->validated()+['slug'=> $slug]);
            // if($request-> gambar){
            //     File::delete('storage/' .$mobil->gambar);
            // }
            // $mobilGambar = $request->file('gambar')->store(
            //     'assets/mobil', 'public'
            // );
            // $mobil ->update($request->except('gambar')+['gambar'=>$mobilGambar]);
        }
        return redirect()->route('mobils.index')->with([
            'message'=> 'Data Berhasil DiEdit',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelatih $mobil)
    {
        if($mobil->gambar){
            unlink('storage/' . $mobil->gambar);
        }
        $mobil->delete();
        return redirect()->back()->with([
            'message'=> 'Data Berhasil DiHapus',
            'alert-type' => 'danger'
        ]);
    }

}
