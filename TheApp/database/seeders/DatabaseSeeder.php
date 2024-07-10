<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Car;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'User 1',
            'email' => 'test@example.com',
        ]);
        Customer::create([
            // 'id' => 1,
            'name' => 'Test Customer',
            'email' => 'hello@gmail.com',
            'password' => bcrypt('password'),
            'birth_date' => '1990-01-01',
            'gender' => 'Male',
        ]);
        Admin::create([
            // 'id' => 1,
            'name' => 'Admin 1',
            'email' => 'hello@gmail.com',
            'password' => bcrypt('password'),
        ]);
        Car::create([
            // 'name' => 'Test Car',
            // 'id' => 1,
            'brand' => 'Toyota',
            'model' => 'Corolla',
            'type' => 'Sedan',
            'image' => 'https://via.placeholder.com/150',
            'price' => 200,
        ]);
        Order::create([
            'customer_id' => 1,
            'car_id' => 1,
            'pickup_date' => '2021-12-01',
            'return_date' => '2021-12-05',
            'pickup_location' => 'New York',
            'return_location' => 'New York',
            'total_price' => 1000,
            'status' => 'Approved',
        ]);
        Order::create([
            'customer_id' => 1,
            'car_id' => 1,
            'pickup_date' => '2021-12-04',
            'return_date' => '2021-12-09',
            'pickup_location' => 'KL',
            'return_location' => 'KL',
            'total_price' => 1000,
            'status' => 'Pending Payment',
        ]);
        Order::create([
            'customer_id' => 1,
            'car_id' => 1,
            'pickup_date' => '2021-12-12',
            'return_date' => '2021-12-18',
            'pickup_location' => 'KL',
            'return_location' => 'KL',
            'total_price' => 1000,
            'status' => 'Pending Payment',
        ]);
        Payment::create([
            'order_id' => 2,
            'payment_statement' => 'Paid',
        ]);
        
    }
}
