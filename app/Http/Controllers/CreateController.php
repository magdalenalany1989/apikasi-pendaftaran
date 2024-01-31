<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function editSiswa($id)
    {
    $data =  Siswa::where('id', $id)->first();
    return view('edit', compact('data'));
    }

    public function updateSiswa(Request $request){
        $update = Siswa::where('id', $request->id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'no_handphone' => $request->no_handphone,
        ]);

        if($update){
            return back()->with('success', 'Data successfully updated');
        } else {
            return back()->with('error', 'Error: Data could not be updated. Please check your input and try again.');
        }
    }

    public function deleteSiswa($id){
        $delete= Siswa::where('id', $id)->delete();

        if($delete){
            return back()->with('success', 'Data successfully deleted');
        }else{
            return back()->with('error', 'Error: Data could not be deleted. Please check your input and try again.');

        }
    }


}
