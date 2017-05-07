<?php

use CodeDelivery\Models\User;
use Illuminate\Database\Seeder;
use CodeDelivery\Models\Client;
use CodeDelivery\Models\Order;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,1)->create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10),
        ]);
        factory(User::class,1)->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'remember_token' => str_random(10),
        ]);
        factory(User::class,10)->create()->each(
            function ($user){
                factory(Client::class)->create(['user_id' => $user->id]);
                factory(Order::class)->create(['user_delivery_id' => $user->id,'client_id'=> $user->id ]);

            }
        );
    }
}
