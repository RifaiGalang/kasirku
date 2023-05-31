<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diskon;
class DiskonController extends Controller
{
    public function index()

    {
     $data = array(
         'title' => 'Setting Diskon',
<<<<<<< HEAD
         'data_diskon' => diskon::all(),
=======
         'data_diskon' => Diskon::all(),
>>>>>>> 688e55c7d3d74e7e04f05ea650624196db57177e
     );
     return view('admin.master.diskon.list',$data);
    }
    public function update(Request $request, $id){

        Diskon::where('id', $id)
<<<<<<< HEAD
=======
        ->where('id', $id)
>>>>>>> 688e55c7d3d74e7e04f05ea650624196db57177e
        ->update([
            'total_belanja'=> $request->total_belanja,
            'diskon'       => $request->diskon,
           
        ]);
        return redirect('/setdiskon')->with('succes','Data Berhasil Diubah');
    }
   
<<<<<<< HEAD
}   
=======
}
>>>>>>> 688e55c7d3d74e7e04f05ea650624196db57177e
