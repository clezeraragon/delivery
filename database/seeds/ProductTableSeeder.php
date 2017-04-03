<?php

use CodeDelivery\Models\Category;
use CodeDelivery\Models\Product;
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
        // insert relacional tabela produto e categoria

        factory(Category::class,30)->create()->each(
            function ($category){
                factory(Product::class)->create(['category_id' => $category->id]);
            }
        );
//        factory(Product::class,30)->create();
    }
}
