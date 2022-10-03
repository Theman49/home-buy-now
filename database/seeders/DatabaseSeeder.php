<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        $location = [
            'cibubur',
            'depok',
            'sentul',
            'bogor',
            'jakarta',
            'bekasi',
            'tangerang'
        ];
        for($i=0; $i<count($location); $i++){
            \App\Models\Location::factory()->create([
                'nama_lokasi' => $location[$i]
            ]);
        }
        $rangeHarga = [
            [0, 100000000],
            [100000001, 500000000],
            [500000001, 1000000000],
            [1000000001, 3000000000],
            [3000000001, 5000000000],
            [5000000001, 100000000000]
        ];
        for($i=0; $i<count($rangeHarga); $i++){
            \App\Models\HousePrice::factory()->create([
                'min_harga' => $rangeHarga[$i][0],
                'max_harga' => $rangeHarga[$i][1],
            ]);
        }

        $rangeLuas = [
            [0, 50],
            [51, 80],
            [81, 100],
            [101, 150],
            [151, 200],
            [201, 300],
            [301, 500],
            [501, 100000]
        ];
        for($i=0; $i<count($rangeLuas); $i++){
            \App\Models\LuasTanah::factory()->create([
                'min_luas' => $rangeLuas[$i][0],
                'max_luas' => $rangeLuas[$i][1],
            ]);
        }

        $categories = [
            'primary',
            'secondary',
            'renovasi',
            'konstruksi',
            'ruko',
            'kavling',
            'apartemen'
        ];
        for($i=0; $i<count($categories); $i++){
            \App\Models\Category::factory()->create([
                'nama_kategori' => $categories[$i],
            ]);
        }


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
