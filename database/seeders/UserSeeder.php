<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
        'name'=>'Operator',
        'role_id'=>1,
        'phone'=>'+998884160313',
        'password'=>Hash::make('12345678')

       ]);
    }
}
