<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'name'          => 'Order - 1',
            'user_id'       => 1,
            'status'        => 'Active',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Order::create([
            'name'          => 'Order - 2',
            'user_id'       => 2,
            'status'        => 'Active',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Order::create([
            'name'          => 'Order - 3',
            'user_id'       => 1,
            'status'        => 'Active',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Order::create([
            'name'          => 'Order - 4',
            'user_id'       => 2,
            'status'        => 'Active',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
