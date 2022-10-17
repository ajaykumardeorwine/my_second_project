<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Merchant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merchant = [
            'firstname'=>'Ajay',
            'lastname'=>'Rajput',
            'email'=>'merchants@gmail.com',
            'password'=>bcrypt(123456),
            'login_at'=>date('Y-m-d H:i:s'),
        ];

        Merchant::create($merchant);

        $customer = [
            'firstname'=>'Yunoos',
            'lastname'=>'Sir',
            'email'=>'customer@gmail.com',
            'password'=>bcrypt(123456),
            'login_at'=>date('Y-m-d H:i:s'),
        ];

        Customer::create($customer);
    }
}
