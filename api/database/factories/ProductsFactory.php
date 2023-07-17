<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Brand;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->randomFloat(2, 100, 1000);

        return [
            "sku" => $this->faker->unique()->regexify('[A-Z]{5}[0-4]{3}') , 
            "name" => $this->faker->name() , 
            "description" => $this->faker->sentence() ,  
            "image" => 'https://placehold.co/600x400/png' , 
            "price" => $price , 
            "price_wholesale" => $price-10 , 
            "price_distributor" => $price-15 , 
            "price_box" => $price-20 , 
            "price_vip" => $price-25 , 
            "pieces_by_box" => $this->faker->randomNumber(5, true) , 
            "stock" => $this->faker->randomNumber(5, true) , 
            "min_stock" => $this->faker->randomNumber(2, true) , 
            "disabled" => 0 , 
            "brand_id" => Brand::all()->random()->id ,
        ];
    }
}
