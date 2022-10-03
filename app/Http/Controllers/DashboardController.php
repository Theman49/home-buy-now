<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\LuasTanah;
use App\Models\HousePrice;
use App\Models\HouseImage;
use File;

class DashboardController extends Controller
{
    public function createHome(Request $request){
        $maxId = DB::table('houses')
                ->max('id_house');
        $newId = $maxId + 1;
        $rules = [
            'nama_object' => "required",
            'id_lokasi' => "required",
            'jumlah_lantai' => "required",
            'harga' => "required",
            'luas_tanah' => "required",
            'luas_bangunan' => "required",
            'jumlah_kamar_tidur' => "required",
            'jumlah_kamar_mandi' => "required",
            'jumlah_carport' => "required",
            'tahun_bangun' => "required",
            'jenis_rumah' => "required",
        ];
        $validatedData = $request->validate($rules);

        $validatedData['id_house'] = $newId;
        $validatedData['id_harga'] = $this->getRangeHargaId($validatedData['harga']);
        $validatedData['id_luas'] = $this->getRangeLuasTanahId($validatedData['luas_tanah']);
        $validatedData['deskripsi'] = $request->deskripsi;

        $rulesGambar = [
            'item' => "required",
            'item.*' => "image"
        ];
        $request->validate($rulesGambar);

        // $validatedGambar = $request->validate($rulesGambar);
        $validatedGambar['no'] = null;
        $validatedGambar['id_house'] = $newId;

        $insert = DB::table('houses')
                ->insert($validatedData);

        if($request->file('item')){
            $destination = public_path()."/storage/app/public/".$validatedData['jenis_rumah']."/".$newId;
            File::makeDirectory($destination, $mode = 0777, true, true);
            $no = 1;
            foreach($request->file('item') as $item){
                Storage::disk('public')
                    ->put( "/public/".$validatedData['jenis_rumah'] . '/' . $newId . "/$no.jpg",
                        File::get($item));
                $validatedGambar['item'] = "$no.jpg";
                $insertGambar = DB::table('house_images')
                        ->insert($validatedGambar);
                $no++;
            }
        }
        return redirect('/seller/posts')->with('success', 'Post baru berhasil ditambahkan!');
    }

    public function deleteHome(Request $request){
        $id_house = $request->id;
        $jenis_rumah = $request->jenis_rumah;
        $delete = DB::table('houses')
                ->where('id_house', '=', $id_house)
                ->delete();
        $deleteGambar = DB::table('house_images')
                ->where('id_house', '=', $id_house)
                ->delete();
        Storage::disk('public')->deleteDirectory("/public/". $jenis_rumah . '/' . $id_house);
        return redirect('/seller/posts')->with('success', 'Post berhasil dihapus!');
    }

    public function editHome(Request $request){
        $rules = [
            'nama_object' => "required",
            'id_lokasi' => "required",
            'jumlah_lantai' => "required",
            'harga' => "required",
            'luas_tanah' => "required",
            'luas_bangunan' => "required",
            'jumlah_kamar_tidur' => "required",
            'jumlah_kamar_mandi' => "required",
            'jumlah_carport' => "required",
            'tahun_bangun' => "required",
            'jenis_rumah' => "required",
        ];
        $validatedData = $request->validate($rules);

        $validatedData['id_harga'] = $this->getRangeHargaId($validatedData['harga']);
        $validatedData['id_luas'] = $this->getRangeLuasTanahId($validatedData['luas_tanah']);
        $validatedData['deskripsi'] = $request->deskripsi;

        if($request->tipe_rumah != $validatedData['jenis_rumah']){
            // $from = "/public/".$request->tipe_rumah."/".$request->id_house;
            $from = "/public/".$request->tipe_rumah."/".$request->id_house;
            $to = "/public/".$validatedData['jenis_rumah']."/".$request->id_house;

            Storage::disk('public')->makeDirectory($to);
            $files = Storage::disk('public')->files($from);
            foreach($files as $file){
                $namaFile = substr($file, -5);
                Storage::disk('public')->move($file, "$to/$namaFile");
            }
            $deleteDir = Storage::disk('public')->deleteDirectory($from);
            // die();

        }
        // if($changeJenisRumah == true){
        //     $from = "/public/".$request->tipe_rumah."/".$request->id_house;
        //     Storage::disk('public')->deleteDirectory($from);
        // }

        $update = DB::table('houses')
                ->where('id_house', "=", $request->id_house)
                ->update($validatedData);

        if($request->deletedGambar != ""){
            $no_arr = explode(",", $request->deletedGambar);
            array_pop($no_arr);
            foreach($no_arr as $no){
                // $getRow = DB::table('home_image')
                //         ->where('no', '=', $no)
                //         ->select("*")
                //         ->get();
                $getRow = HouseImage::where('no', $no)->get();
                foreach($getRow as $row){
                    $id_house = $row->id_house;
                    $item = $row->item;
                    $pathFile = "/public/".$validatedData['jenis_rumah']."/".$id_house."/".$item;
                    Storage::disk('public')->delete($pathFile);
                }
                $deleteGambarDatabase = DB::table('house_images')
                                        ->where('no', '=', $no)
                                        ->delete();

            }
        }

        $pathDir = "/public/".$validatedData['jenis_rumah']."/".$request->id_house;
        $files = Storage::disk('public')->files($pathDir);
        if(count($files) > 1){
            $file0 = substr($files[0], -5);
            if($request->setPrimaryImage != $file0){
                echo $request->setPrimaryImage."<br>";
                $url1 = $validatedData['jenis_rumah']."/$request->id_house/$file0";
                $url2 = $validatedData['jenis_rumah']."/$request->id_house/$request->setPrimaryImage";
                echo $url1."<br>";
                echo $url2."<br>";
                $this->setPrimaryImage($url1, $url2, $request->id_house, $validatedData['jenis_rumah']);

            }
        }

        $rulesGambar = [
            'item.*' => "image"
        ];
        $request->validate($rulesGambar);

        if($request->file('item')){
            $validatedGambar['no'] = null;
            $validatedGambar['id_house'] = $request->id_house;
            // $getItem = DB::table('home_image')
            //         ->where('id_house', "=", $validatedGambar['id_house'])
            //         ->select("*")
            //         ->get();
            $getItem = HouseImage::where('id_house', $validatedGambar['id_house'])->get();
            $no = 0;
            foreach($getItem as $item){
                $no = explode(".", $item->item);
                $no = (int) $no[0];
                $no++;
            }

            foreach($request->file('item') as $item){
                Storage::disk('public')
                    ->put( "/public/".$validatedData['jenis_rumah'] . '/' . $validatedGambar['id_house'] . "/$no.jpg", File::get($item));

                $validatedGambar['item'] = "$no.jpg";
                $insertGambar = DB::table('house_images')
                        ->insert($validatedGambar);
                $no++;
            }
        }


        return redirect('/seller/posts')->with('success', 'Post berhasil diupdate!');
    }

    public function getRangeHargaId($harga){
        $harga_primary = DB::table('house_prices')
                        ->where('min_harga', "<=", $harga)
                        ->where('max_harga', ">=", $harga)
                        ->select('id_harga')
                        ->get();
        foreach($harga_primary as $idHarga){
            return (int) $idHarga->id_harga;
        }
    }
    public function getRangeLuasTanahId($luas){
        $luas_tanah = DB::table('luas_tanahs')
                        ->where('min_luas', "<=", $luas)
                        ->where('max_luas', ">=", $luas)
                        ->select('*')
                        ->get();
        foreach($luas_tanah as $idLuas){
            return (int) $idLuas->id_luas;
        }
    }

    public function setPrimaryImage($url1, $url2, $idRumah, $jenisRumah){
        $file = Storage::disk('public')->copy("/public/$url1", "/public/$jenisRumah/$idRumah/primary.jpg");
        $file = Storage::disk('public')->delete("/public/$url1");
        $file = Storage::disk('public')->move("/public/$url2", "/public/$url1");
        $file = Storage::disk('public')->move("/public/$jenisRumah/$idRumah/primary.jpg", "/public/$url2");
    }
}
