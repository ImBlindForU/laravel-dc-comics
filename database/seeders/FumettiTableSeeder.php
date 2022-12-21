<?php

namespace Database\Seeders;

use App\Models\Fumetto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FumettiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumettiArray= config('comics'); 
        
        foreach($fumettiArray as $fumetto){
            $newfumetto = new Fumetto();
            $newfumetto->title= $fumetto['title'];
            $newfumetto->description= $fumetto['description'];
            $newfumetto->thumb= $fumetto['thumb'];
            $newfumetto->price= $fumetto['price'];
            $newfumetto->series= $fumetto['series'];
            $newfumetto->sale_date= $fumetto['sale_date'];
            $newfumetto->type= $fumetto['type'];
            $newfumetto->save();
        }
    }
}
