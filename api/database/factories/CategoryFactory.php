<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>"Bocina Portátil" ,
            "parent_id"=>null,
            "image" => 'https://placehold.co/600x400/png' , 
            "disabled"=>0,
            "description"=>"Excepteur consequat culpa aliqua consectetur deserunt culpa veniam officia ullamco duis voluptate Lorem cillum aliquip."
        ];
    }
}
