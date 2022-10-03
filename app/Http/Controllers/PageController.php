<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function beranda(){
        // $arrUrl = explode('/', url()->current());
        // $section = $arrUrl[3];
        $data = DB::table('houses')
            ->join('locations', 'houses.id_lokasi', '=', 'locations.id_lokasi')
            // ->where('houses.jenis_rumah', '=', 'primary')
            ->inRandomOrder()
            ->limit(6)
            ->select('houses.*', 'locations.nama_lokasi')
            ->get();
        $kategori = Category::all();
        return view('landing-page/beranda', [
            'data' => $data,
            'kategori' => $kategori,
            'section' => 'primary'
        ]);
    }
    public function login(){
        return view('auth/login', [
            'title' => 'Login'
        ]);
    }
    public function register(){
        return view('auth/register', [
            'title' => 'Register',
            'kategori' => CategoriesModel::all()
        ]);
    }
    public function default(){
        return view('test', [
            'data' => "test"
        ]);
    }
}
