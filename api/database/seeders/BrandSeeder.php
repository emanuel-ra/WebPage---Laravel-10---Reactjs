<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['name'=>'LinkBits','disabled'=>1]);
        Brand::create(['name'=>'Mega Luz','disabled'=>1]);
        Brand::create(['name'=>'HP','disabled'=>1]);
        Brand::create(['name'=>'Kingston','disabled'=>1]);
        Brand::create(['name'=>'ASUS','disabled'=>1]);
        Brand::create(['name'=>'Apple','disabled'=>1]);
    }
}
