<?php

use Illuminate\Database\Seeder;

use CodeShopping\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Product::class, 30)->create();
    }
}


