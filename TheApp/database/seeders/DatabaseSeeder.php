<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Car;
use App\Models\Customer;
use App\Models\Feedbacks;
use App\Models\Inquiries;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use Carbon\Carbon;
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
            'model' => 'Vios',
            'type' => 'Sedan',
            'image' => 'http://127.0.0.1:8000/images/carimage/toyotavios.png',
            'price' => 200,
        ]);

        Car::create([
            // 'name' => 'Test Car',
            // 'id' => 1,
            'brand' => 'Honda',
            'model' => 'Civic',
            'type' => 'Hatcback',
            'image' => 'http://127.0.0.1:8000/images/carimage/hondacivic.png',
            'price' => 500,
        ]);

        Car::create([
            // 'name' => 'Test Car',
            // 'id' => 1,
            'brand' => 'Nissan',
            'model' => 'Skyline-GTR',
            'type' => 'Super Car',
            'image' => 'http://127.0.0.1:8000/images/carimage/gtr.jpeg',
            'price' => 1200,
        ]);

        Car::create([
            // 'name' => 'Test Car',
            // 'id' => 1,
            'brand' => 'Honda',
            'model' => 'HR-V',
            'type' => 'SUV',
            'image' => 'http://127.0.0.1:8000/images/carimage/hondahrv.png',
            'price' => 400,
        ]);

        Inquiries::create([
            // 'name' => 'Test Car',
            // 'id' => 1,
            'name' => 'Test Inquiry',
            'email' => 'sheesh@gmail.com',
            'phone' => '0123456789',
            'date' => '2024-07-10',
            'time' => '12:00',
            'message' => 'Hello, I would like to inquire about your services.',
            'services' => 'Car Rental',
        ]);


        Order::create([
            'customer_id' => 1,
            'car_id' => 1,
            'pickup_date' => Carbon::now()->addDay(2)->format('Y-m-d'),
            'return_date' => Carbon::now()->addDay(7)->format('Y-m-d'),
            'pickup_location' => 'New York',
            'return_location' => 'New York',
            'total_price' => 1000,
            'status' => 'Approved',
        ]);
        Order::create([
            'customer_id' => 1,
            'car_id' => 1,
            'pickup_date' => Carbon::now()->addDay(8)->format('Y-m-d'),
            'return_date' => Carbon::now()->addDay(10)->format('Y-m-d'),
            'pickup_location' => 'KL',
            'return_location' => 'KL',
            'total_price' => 400,
            'status' => 'Pending Payment',
        ]);
        Order::create([
            'customer_id' => 1,
            'car_id' => 2,
            'pickup_date' => Carbon::now()->addDay(2)->format('Y-m-d'),
            'return_date' => Carbon::now()->addDay(4)->format('Y-m-d'),
            'pickup_location' => 'KL',
            'return_location' => 'KL',
            'total_price' => 1000,
            'status' => 'Pending Payment',
        ]);
        Payment::create([
            'order_id' => 1,
            'payment_statement' => 'http://127.0.0.1:8000/images/carimage/receipt.pdf',
        ]);
        Feedbacks::create([
            'customer_id' => 1,
            'rating' => 5,
            'message' => 'Great service!',
        ]);
    }
}
