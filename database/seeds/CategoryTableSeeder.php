<?php

use CodeDelivery\Models\Category;
use Illuminate\Database\Seeder;
use CodeDelivery\Models\Product;

class CategoryTableSeeder extends Seeder
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
    }
}
