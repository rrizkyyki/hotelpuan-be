<?php

namespace App\Http\Controllers;

use App\Models\Room_model;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        // $room = Room_model::all();
        // return view('index', compact(['room']));
        return Room_model::all();
    }

    public function details($id){
        $room = Room_model::find($id, ['jenis_kamar', 'deskripsi', 'harga']);
        return compact(['room']);

        // another try success but not right
        // $room = Room_model::where('id', 1)->get(['jenis_kamar', 'deskripsi', 'harga']);
        // $room = Room_model::pluck('jenis_kamar');

        // return Room_model::all('jenis_kamar', 'deskripsi', 'harga');
        
        // succes without id params at func
        // return Room_model::where('id', 1)->pluck('jenis_kamar', 'deskripsi', 'harga');
    }
}
