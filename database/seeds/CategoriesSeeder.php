<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Zapatillas',
            'Remeras hombres',
            'Remeras mujeres',
        ];

        DB::table('categories')->insert([
            'name' => $categories[0],
            'slug' => Str::slug($categories[0]),
            'imageUrl' => '/images/zapatillas.jpg'
        ]);

        DB::table('categories')->insert([
            'name' => $categories[1],
            'slug' => Str::slug($categories[1]),
            'imageUrl' => '/images/remeras-hombres.jpg'
        ]);

        DB::table('categories')->insert([
            'name' => $categories[2],
            'slug' => Str::slug($categories[2]),
            'imageUrl' => '/images/remeras-mujeres.jpg'
        ]);
    }
}
