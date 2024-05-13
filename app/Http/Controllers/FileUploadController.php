<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:5000'
        ]);

        $extFile = $request->berkas->getClientOriginalName();
        $nameFile = 'web-' . time() . '.' . $extFile;

        $path = $request->berkas->move('gambar', $nameFile);
        $path = str_replace("\\", "//", $path);
        echo "Variabel path berisi: $path <br>";

        $pathBaru = asset('gambar/' . $nameFile);
        echo "proses upload berhasil. data disimpan pada: $path";
        echo "<br>";
        echo "Tampilkan link: <a href='$pathBaru'>$pathBaru</a>";

        // echo $request->berkas->getClientOriginalName() . ' lolos validasi';
    }

    public function fileUploadRename()
    {
        return view('file-upload-rename');
    }

    public function prosesFileUploadRename(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:5000'
        ]);

        $extFile = $request->berkas->extension();
        $nameFile = $request->namaGambar . '.' . $extFile;

        $path = $request->berkas->move('gambar', $nameFile);
        $path = str_replace("\\", "//", $path);

        $pathBaru = asset('gambar/' . $nameFile);

        echo "Gambar berhasil di upload ke <a href='$pathBaru'>$nameFile</a>";
        echo "<br>";
        echo "<img src='$pathBaru'>";
    }
}
