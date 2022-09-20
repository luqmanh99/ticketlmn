<?php

namespace App\Http\Controllers;


use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(){

        $statuses = Status::all();
        return view('status.datastatus',compact('statuses'));
    }

    public function tambahstatus(){
        return view('status.tambahstatus');
    }

    public function inserstatus(Request $request){
        Status::create($request->all());
        return redirect()->route('status.datastatus');
    }

    public function editstatus($id){

        $statuses = Status::find($id);

        return view('status.editstatus', compact('statuses'));
    }
    
    public function updatestatus(Request $request, $id){
        $statuses = Status::find($id);
        $statuses->update($request->all());
        return redirect()->route('status.datastatus')->with('success',' Data Berhasil Di Update');
    }
}
