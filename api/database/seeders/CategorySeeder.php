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
            //$category = Category::create(["name"=>"Bocinas","parent_id"=>null,"disabled"=>0]);
            // SUB CATEGORY

            $category = Category::factory()->create([
                'name' => 'Bocinas',
                'parent_id' => null ,
            ]);

           
                Category::factory()->create([
                    'name' => 'Bocina Portátil',
                    'parent_id' => $category->id ,
                ]);
                
                Category::factory()->create([
                    'name' => 'Bocina 3 pulgadas',
                    'parent_id' => $category->id ,
                ]);

                Category::factory()->create([
                    'name' => 'Bocina 4 pulgadas',
                    'parent_id' => $category->id ,
                ]);

                Category::factory()->create([
                    'name' => 'Bocina 5 pulgadas',
                    'parent_id' => $category->id ,
                ]);
                
                Category::factory()->create([
                    'name' => 'Bocina 6 pulgadas',
                    'parent_id' => $category->id ,
                ]);


                Category::factory()->create([
                    'name' => 'Bocina 8 pulgadas',
                    'parent_id' => $category->id ,
                ]);

                Category::factory()->create([
                    'name' => 'Bocina 10 pulgadas',
                    'parent_id' => $category->id ,
                ]);

                Category::factory()->create([
                    'name' => 'Bocina 12 pulgadas',
                    'parent_id' => $category->id ,
                ]);

                Category::factory()->create([
                    'name' => 'Bocina 14 pulgadas',
                    'parent_id' => $category->id ,
                ]);
        
        $category = Category::factory()->create([
            'name' => 'Iluminación',
            'parent_id' => null ,
        ]);
            Category::factory()->create([
                'name' => 'Focos',
                'parent_id' => $category->id ,
            ]);

            Category::factory()->create([
                'name' => 'Reflectores',
                'parent_id' => $category->id ,
            ]);

            Category::factory()->create([
                'name' => 'Lamparas',
                'parent_id' => $category->id ,
            ]);

            Category::factory()->create([
                'name' => 'Led',
                'parent_id' => $category->id ,
            ]);

            Category::factory()->create([
                'name' => 'Iluminación Solar',
                'parent_id' => $category->id ,
            ]);

        $category = Category::factory()->create([
            'name' => 'Ventiladores',
            'parent_id' => null ,
        ]);

            Category::factory()->create([
                'name' => 'Ventiladores de Piso',
                'parent_id' => $category->id ,
            ]);

            Category::factory()->create([
                'name' => 'Ventiladores de Techo',
                'parent_id' =>  $category->id ,
            ]);

        $category = Category::factory()->create([
            'name' => 'Cámaras de Vigilancia',
            'parent_id' => null ,
        ]);


        $category = Category::factory()->create([
            'name' => 'Gadgets',
            'parent_id' => null ,
        ]);
            Category::factory()->create([
                'name' => 'Power Banks',
                'parent_id' =>  $category->id ,
            ]);

        $category = Category::factory()->create([
            'name' => 'Electrodomésticos',
            'parent_id' => null ,
        ]);

            Category::factory()->create([
                'name' => 'Dispensador de Agua',
                'parent_id' =>  $category->id ,
            ]);

            Category::factory()->create([
                'name' => 'Freidora de Aire',
                'parent_id' =>  $category->id ,
            ]);
    }
}
