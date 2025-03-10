<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gambar;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    public function upload()
    {
        $gambar = Gambar::get();
        return view('upload', ['gambar' => $gambar]);
    }

    public function index()
    {
        $gambar = Gambar::get();
        return view('index', ['gambar' => $gambar->reverse()]);
    }
    public function search($q)
    {
        $gambar = Gambar::where('keterangan', 'LIKE', 'a%')->first();


        $gambar->get();

        return view('detail', ['gambar' => $gambar]);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            'keterangan' => 'required',
            'aspek' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
            'aspek' => $request->aspek
        ]);

        return redirect('/');
    }

    public function hapus($id)
    {
        // hapus file
        $gambar = Gambar::where('id', $id)->first();
        File::delete('data_file/' . $gambar->file);

        // hapus data
        Gambar::where('id', $id)->delete();

        return redirect('/');
    }

    public function detail($id)
    {
        $gambar = Gambar::where('id', $id)->first();

        $gambar->get();
        // Gambar::find($id);

        return view('detail', ['gambar' => $gambar]);
    }
}
