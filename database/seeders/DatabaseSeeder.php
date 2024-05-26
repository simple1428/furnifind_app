<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    protected static ?string $password;
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Misbah',
            'email' => 'misbahudin1428@gmail.com',
            'password' => static::$password ??= Hash::make('A7051892b'),
            'phone_number' => '6289619080300',
            'avatar' => 'https://lh3.googleusercontent.com/a/AEdFTp7iPfPFqbaYN_E66N3_Kuh3mtqDdyr_NVHX6neufQ=s96-c',
            'address' => 'Dk.Dunggayam 003/003 Ds.Tulakan Kec.Donorojo Jepara',
            'role' => 'buyer'
        ]);
        $this->call([
            CategorySeeder::class,
        ]);
    }
}