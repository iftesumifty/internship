<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Hash;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [

                'name'=>'admin',
                'email'=>'admin123@gmail.com',
                'phone'=> 6677,
                'address'=>'Dhaka',
                'roll_id'=> 1,
                'password'=>Hash::make('1234'),

            ]
            );
            
                User::create(
                    [
        
                        'name'=>'manager',
                        'email'=>'manager@gmail.com',
                        'phone'=>565777 ,
            
                        'address'=>'Dhaka',
                        'roll_id'=> 1,
                        'password'=>Hash::make('123'),
        
                    ]
                    );
                    User::create(
                        [
            
                            'name'=>'ria',
                            'email'=>'ria@gmail.com',
                            'address'=>'Dhaka',
                            'phone'=>8764,
                            'roll_id'=> 1,
                            'password'=>Hash::make('12345'),
            
                        ]
                        );
    }
}
