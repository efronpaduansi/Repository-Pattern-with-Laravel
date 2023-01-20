<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Customer::create([
            'name' => 'Nguyen Van A',
            'email' => 'nguyen@gmail.com',
            'phone' => '0123456789',
            'address' => 'Ha Noi',
        ]);
        Customer::create([
            'name' => 'Nguyen Van B',
            'email' => 'nguyenb@gmail.com',
            'phone' => '0123456789',
            'address' => 'Ha Noi',
        ]);
    }
}
