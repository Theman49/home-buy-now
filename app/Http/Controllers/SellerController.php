<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Location;
use App\Models\HouseImage;

class SellerController extends Controller
{
    public function dashboard(){
        return view('seller/dashboard', [
            'title' => 'Dashboard'
        ]);
    }
    public function posts(){
        $data = DB::table('houses')
                ->join('locations', 'houses.id_lokasi', '=', 'locations.id_lokasi')
                ->select('houses.*', 'locations.nama_lokasi')
                ->get();
        return view('seller/posts', [
            'title' => 'Posts',
            'data' => $data
        ]);
    }

    public function insert(){
        $lokasi = Location::all();
        return view('seller/insert', [
            'title' => 'Tambah post',
            'lokasi' => $lokasi
        ]);
    }

    public function edit($id){
        $data = DB::table('houses')
                ->join('locations', 'houses.id_lokasi', '=', 'locations.id_lokasi')
                ->where('houses.id_house', '=', $id)
                ->select('*')
                ->get();
        $gambar = HouseImage::where('id_house', $id)->get();
        $lokasi = Location::all();        
        return view('seller/edit', [
            'title' => 'Edit',
            'data' => $data,
            'gambar' => $gambar,
            'lokasi' => $lokasi
        ]);
    }

    public function preview($id){
        $arrUrl = explode('/', url()->current());
        $section = $arrUrl[4];

        $data = DB::table('houses')
                ->join('locations', 'houses.id_lokasi', '=', 'locations.id_lokasi')
                ->where('houses.id_house', '=', $id)
                ->select('*')
                ->get();
        $maxId = DB::table('houses')
                ->max('id_house');
        $images = HouseImage::where('id_house', $id)->get();
        $nextId = ($id ==  $maxId ? 1 : $id+1);
        $prevId = ($id == 1 ? $maxId : $id-1);

        return view('seller/preview', [
            'data' => $data,
            'images' => $images, 
            'title' => 'Preview',
            'section' => $section,
            'nextId' => $nextId,
            'prevId' => $prevId,

        ]);


    }
}
