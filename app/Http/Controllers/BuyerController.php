<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Location;
use App\Models\Category;
use App\Models\HouseImage;
use App\Models\HousePrice;
use Illuminate\Support\Facades\DB;

class BuyerController extends Controller
{
    public function primaryPage(){
        $arrUrl = explode('/', url()->current());
        $section = $arrUrl[3];
        $data = DB::table('houses')
            ->join('locations', 'houses.id_lokasi', '=', 'locations.id_lokasi')
            ->where('houses.jenis_rumah', '=', 'primary')
            ->select('houses.*', 'locations.nama_lokasi')
            ->get();
        $kategori = Category::all();
        $lokasi = Location::all();
        $harga = HousePrice::all();
        return view('buyer/primary', [
            'title' => 'Primary',
            'data' => $data,
            'kategori' => $kategori,
            'section' => $section,
            'lokasi' => $lokasi,
            'prices' => $harga
        ]);
    }
    public function secondaryPage(){
        $arrUrl = explode('/', url()->current());
        $section = $arrUrl[3];
        $data = DB::table('houses')
            ->join('locations', 'houses.id_lokasi', '=', 'locations.id_lokasi')
            ->where('houses.jenis_rumah', '=', 'secondary')
            ->select('houses.*', 'locations.nama_lokasi')
            ->get();
        $kategori = Category::all();
        $lokasi = Location::all();
        $harga = HousePrice::all();
        return view('buyer/secondary', [
            'title' => 'Secondary',
            'data' => $data,
            'kategori' => $kategori,
            'section' => $section,
            'lokasi' => $lokasi,
            'prices' => $harga
        ]);
    }
    public function detail($id){
        $arrUrl = explode('/', url()->current());
        $section = $arrUrl[3];

        $data = DB::table('houses')
                ->join('locations', 'houses.id_lokasi', '=', 'locations.id_lokasi')
                ->where('houses.id_house', '=', $id)
                ->select('*')
                ->get();
        $maxId = DB::table('houses')
                ->max('id_house');
        $kategori = Category::all();
        $images = HouseImage::where('id_house', $id)->get();
        $nextId = ($id ==  $maxId ? 1 : $id+1);
        $prevId = ($id == 1 ? $maxId : $id-1);

        return view('buyer/detail', [
            'data' => $data,
            'images' => $images,
            'title' => 'Detail',
            'section' => $section,
            'kategori' => $kategori,
            'nextId' => $nextId,
            'prevId' => $prevId,

        ]);
    }
    /*
    public function search(Request $request){
        if ($request->search == ""){
            return redirect('/primary');
        }
        $search_query = $request->search;
        $data = DB::table('houses')
                ->join('locations', 'houses.id_lokasi', "=", 'locations.id_lokasi')
                ->where('houses.nama_object', 'like', "%$search_query%")
                // ->orWhere('home.harga', '<=', "$search_query")
                ->orWhere('locations.nama_lokasi', 'like', "%$search_query%")
                // ->orWhere('home.tahun_bangun', '=', "$search_query")
                ->select("houses.*", "locations.nama_lokasi")
                ->get();
        $jumlah = 0;
        foreach($data as $item){
            $jumlah++;
        }
        return view('buyer/search', [
            'title' => 'Search',
            'section' => 'search',
            'jumlah' => $jumlah,
            'search_query' => $search_query,
            'data' => $data
        ]);
    }
    */
    public function search(){
        $getIdLokasi = $_GET['lokasi'];
        $getIdHarga = $_GET['harga'];
        $getType = $_GET['jenis'];
        if($getIdHarga == "" && $getIdLokasi == "" && $getType == ""){
            $data = DB::table('houses')
                    ->join('locations', 'houses.id_lokasi', '=', 'locations.id_lokasi')
                    ->select('*')
                    ->get();
        }else{
            $whereStatements = [];
            if($getIdLokasi != ""){
                array_push($whereStatements, ['houses.id_lokasi', '=', "$getIdLokasi"]);
            }
            if($getType != ""){
                array_push($whereStatements, ['houses.jenis_rumah', '=', "$getType"]);
            }
            if($getIdHarga != ""){
                array_push($whereStatements, ['houses.id_harga', '=', "$getIdHarga"]);
            }
            $data = DB::table('houses')
                    ->join('locations', 'houses.id_lokasi', '=', 'locations.id_lokasi')
                    // ->where('houses.id_lokasi', '=', "$getIdLokasi")
                    // ->orWhere('houses.jenis_rumah', '=', "$getType")
                    // ->orWhere('houses.id_harga', '=', "$getIdHarga")
                    ->where($whereStatements)
                    ->select("*")
                    ->get();
        }
        $kategori = Category::all();
        $lokasi = Location::all();
        $harga = HousePrice::all();
        $jumlah = 0;
        foreach($data as $item){
            $jumlah++;
        }
        return view('buyer/search', [
            'title' => 'Search',
            'section' => 'search',
            'jumlah' => $jumlah,
            'data' => $data,
            'kategori' => $kategori,
            'lokasi' => $lokasi,
            'prices' => $harga
        ]);
    }
    public function searchByQuery($query){
        $search_query = $query;
        $data = DB::table('houses')
                ->join('locations', 'houses.id_lokasi', "=", 'locations.id_lokasi')
                ->where('houses.nama_object', 'like', "%$search_query%")
                // ->orWhere('home.harga', '<=', "$search_query")
                ->orWhere('locations.nama_lokasi', 'like', "%$search_query%")
                // ->orWhere('home.tahun_bangun', '=', "$search_query")
                ->select("houses.*", "locations.nama_lokasi")
                ->get();
        $kategori = Category::all();
        $lokasi = Location::all();
        $harga = HousePrice::all();
        $jumlah = 0;
        foreach($data as $item){
            $jumlah++;
        }
        return view('buyer/search', [
            'title' => 'Search',
            'section' => 'search',
            'jumlah' => $jumlah,
            'search_query' => $search_query,
            'data' => $data,
            'kategori' => $kategori,
            'lokasi' => $lokasi,
            'prices' => $harga
        ]);
    }
}
