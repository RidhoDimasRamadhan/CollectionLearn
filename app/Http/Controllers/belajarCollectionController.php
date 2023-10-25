<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPSTORM_META\map;

// use Illuminate\Http\Collection;
// Jadi pembuatan dari eloquent ini sendiri ialah untuk mempermudah dalam ememprosem dalam bentuk array yang ada didalam DB yang besar ataupun db yang kita buat sendiri.
class belajarCollectionController extends Controller
{
    public function controller(){

     $numerik = ([12,3,4,5,6,7,7,12,12,12,98,5,1,3,13,2,6]);
     
// Sum  = untuk penjumlahan bisa dengan mengguanakan array_sum atau dengan cara  collect(namavaiable)-> sum()


    //  $sum = collect($numerik)->min(); 
    //  $sum = collect($numerik)->max();
    //  $sum = collect($numerik)->average();
    //  $sum = collect($numerik)->count();
    //  $sum = collect($numerik)->contains(12);
    //  $sum = collect($numerik)->map(function($bebas){
    //     return $bebas *3;
    //  });
    
    // $filter = collect($numerik)->filter(function($bebas){
    //     return $bebas <= 12;
    // })->all();

    $asc = collect($numerik)->sortBy($numerik);

    dd($asc);

    //  dd($sum);
    }


    public function restoran(){

        $restoranA = ['nasigoreng','mi ayam', 'telor dadar'];
        $restoranB = ['Fried Chicken','mi ayam', 'telor Ceplok','bakso'];

        $hasil = collect($restoranA)->diff($restoranB);
        // $hasil = collect($restoranA)->diff($restoranB);
        // $hasil = array_merge($restoranA,$restoranB);
        dd($hasil);
    }

    public function identitasMahasiswa(){
        $identitasMahasiswa = collect([
            [
                "nama" => "Ridho",
                "NPM" => '10120999'
            ],
            [
                "nama" => "Dimas",
                "NPM" => '111111'
            ],
            [
                "nama" => "mouse",
                "NPM" => '2112112'
            ],
        ]);

        $ambil = collect($identitasMahasiswa)->pluck('nama');
        // $ambil = collect($identitasMahasiswa)->where('nama','ridho');
        dd($ambil);
    }

    public function uangJajan(){
        $uangjajan = collect([
            [
                "nama" => "Ridho Dimas Ramadhan",
                'uang jajan' => 25000
            ],
            [
                "nama" => "saiful",
                'uang jajan' => 15000
            ],
            [
                "nama" => "wahyu suboseto",
                'uang jajan' => 30000
            ],
        ]);
        $taelah = collect($uangjajan)->filter(function($bebass){
            return data_get($bebass,'uang jajan')>20000;;
        })->all();

        dd($taelah);
    }

    public function matkul(){
        $dosen = collect([
            [
                "dosen" => 'bu irwan',
                "matkul"=> "sejarah"
            ],
            [
                "dosen" => 'bu sasongko',
                "matkul"=> "sejarah"
            ],
            [
                "dosen" => 'bu megawati',
                "matkul"=> "matematika"
            ],
        ]);

        $bangke = collect($dosen)->groupBy("matkul")->all();
        dd($bangke);
        
    }

}
