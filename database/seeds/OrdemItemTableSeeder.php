<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\OrderItem;
class OrdemItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrderItem::class,10)->create();
    }
}
