<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $pemerintahan = User::create([
            'name' => 'Pemerintahan',
            'email' => 'pemerintahan@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $pemerintahan->assignRole('bidang_pemerintahan');

        $sosialBudaya = User::create([
            'name' => 'Sosial Budaya',
            'email' => 'sosialbudaya@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $sosialBudaya->assignRole('bidang_sosial_budaya');

        $saranaPrasarana = User::create([
            'name' => 'Sarana Prasarana',
            'email' => 'saranaprasarana@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $saranaPrasarana->assignRole('bidang_sarana_prasarana');

        $perekonomian = User::create([
            'name' => 'Perekonomian',
            'email' => 'perekonomian@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $perekonomian->assignRole('bidang_perekonomian');
    }
}
