<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\Category;
use App\Models\RelCategoryProducts;

class RelCategoryProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$Categories = Category::get();
        $Products = Products::get();
        foreach($Products as $product)
        {
            RelCategoryProducts::create(['product_id'=>$product->id,'category_id'=>Category::all()->random()->id]);
        }
    }
}
