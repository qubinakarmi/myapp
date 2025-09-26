<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // ✅ Correct
use Illuminate\Support\Str;         // ✅ For random strings

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('registers')->insert([
    'name'       => Str::random(10),
    'email'      => Str::random(10) . '@example.com',
    'city'       => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
]);

    }
}
