<?php

use App\Customer;
use App\Information;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        factory(Customer::class, 50)->create()->each(function ($customer) use ($faker) {
            $information        = new Information;
            $information->phone = '71231231234';
            $information->email = $faker->email;
            $customer->information()->save($information);
        });
    }
}
