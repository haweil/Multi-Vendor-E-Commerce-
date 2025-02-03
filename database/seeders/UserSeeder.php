<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mohamed Haweil',
            'email' => 'haweil@user.com',
            'password' => Hash::make('password'),
            'phone_number' => '01026536382',
        ]);
        DB::table('users')->insert([
            'name' => 'System Admin',
            'email' => 'haweil@admin.com',
            'password' => Hash::make('password'),
            'phone_number' => '01026536383',
        ]);
    }
}
