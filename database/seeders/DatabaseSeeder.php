<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::insert([
            'uuid' => Str::uuid()->toString(),
            'name' => 'Administrador',
            'email' => 'gabrielhenpilger@gmail.com',
            'admin' => 1,
            'phone' => '(49) 98803-8194',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => bcrypt('123456'),
            'remember_token' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'deleted_at' => null
        ]);
    }
}
