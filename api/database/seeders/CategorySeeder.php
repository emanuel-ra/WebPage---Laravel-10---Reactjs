<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(["name"=>"Bocinas","parent_id"=>null,"disabled"=>1]);
        Category::create(["name"=>"Almacenamiento","parent_id"=>null,"disabled"=>1]);
        Category::create(["name"=>"Hogar","parent_id"=>null,"disabled"=>1]);
        Category::create(["name"=>"Iluminación","parent_id"=>null,"disabled"=>1]);
        Category::create(["name"=>"Cámaras de Vigilancia","parent_id"=>null,"disabled"=>1]);
    }
}
