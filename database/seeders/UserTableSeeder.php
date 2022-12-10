<?php

namespace Database\Seeders;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRecords = [
            [
                'id' => 1,
                'firstname' => 'Christapher',
                'lastname' => 'Recess',
                'username' => 'chris',
                'email' => 'chris@gmail.com',
                'phone' => '+123456789',
                'password' => '$2a$12$7SJSGUi6LPbk.EL1pnHWBOfV1sO.UUfBaY07mzJ88xBlVhGSt3BOO',
                'zipcode' => '2345',
                'country' => 'United State',
                'state'=>  'Alaska',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

           
        ];

        User::insert($userRecords);
    }
}
