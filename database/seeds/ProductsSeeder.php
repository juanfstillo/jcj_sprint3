<?php

use Illuminate\Database\Seeder;
use App\Category;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zapatillas = Category::where('slug', 'zapatillas')->first();
        $remerasHombre = Category::where('slug', 'remeras-hombres')->first();
        $remerasMujeres = Category::where('slug', 'remeras-mujeres')->first();

        $products = [
            [
                'name' => 'ZAPATILLAS CLUB C 85 MU',
                'price' => 5599,
                'imageUrl' => '/images/zapatillas-club-c-85-mu.jpg',
                'category_id' => $zapatillas->id
            ],
            [
                'name' => 'ZAPATILLAS NANO 9.0',
                'price' => 6599,
                'imageUrl' => '/images/zapatillas-nano-9-0.jpg',
                'category_id' => $zapatillas->id
            ],
            [
                'name' => 'ZAPATILLAS NANO 9.0 AZUL',
                'price' => 4899,
                'imageUrl' => '/images/zapatillas-nano-9-0-azul.jpg',
                'category_id' => $zapatillas->id
            ],
            [
                'name' => 'ZAPATILLAS SOLE FURY Adapt',
                'price' => 3799,
                'imageUrl' => '/images/zapatillas-sole-fury-adapt.jpg',
                'category_id' => $zapatillas->id
            ],
            [
                'name' => 'REMERA TE MARBLE GROUP TEE',
                'price' => 1099,
                'imageUrl' => '/images/remera-te-marble-group-tee.jpg',
                'category_id' => $remerasHombre->id
            ],
            [
                'name' => 'REMERA GRAPHIC SERIES TRAIN STRONG',
                'price' => 1499,
                'imageUrl' => '/images/remera-graphic-series-train-strong.jpg',
                'category_id' => $remerasHombre->id
            ],
            [
                'name' => 'REMERA GS TRAINING SPEEDWICK',
                'price' => 899.50,
                'imageUrl' => '/images/remera-gs-training-speedwick.jpg',
                'category_id' => $remerasHombre->id
            ],
            [
                'name' => 'MUSCULOSA STUDIO REEBOK',
                'price' => 1499,
                'imageUrl' => '/images/musculosa-studio-reebok.jpg',
                'category_id' => $remerasMujeres->id
            ],
            [
                'name' => 'REMERA REEBOK CLASSICS',
                'price' => 1999,
                'imageUrl' => '/images/remera-reebok-classics.jpg',
                'category_id' => $remerasMujeres->id
            ],
            [
                'name' => 'MUSCOLOSA RE MESH TANK',
                'price' => 899.50,
                'imageUrl' => '/images/musculosa-re-mesh-tank.jpg',
                'category_id' => $remerasMujeres->id
            ]
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'imageUrl' => $product['imageUrl'],
                'price' => $product['price'],
                'category_id' => $product['category_id'],
            ]);
        }

    }
}
