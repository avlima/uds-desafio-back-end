<?php

use App\Api\V1\Product\Models\ProductModel;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductModel::class, 5)->create();
    }
}
