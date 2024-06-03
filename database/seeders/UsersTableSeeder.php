<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Giancarlo Chimoy',
                'email' => 'giancarlo21deagosto@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('giancarlo21'),
                'type' => 'admin',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Teacher Carlitos',
                'email' => 'carlitos123@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('carlitos9000'),
                'type' => 'teacher',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Student Perales',
                'email' => 'perales123@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('perales9000'),
                'type' => 'student',
                'remember_token' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
        ]);
    }
}
