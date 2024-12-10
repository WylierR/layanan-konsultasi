<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Permisions
        $permissions = [
            'akses_pemerintahan',
            'akses_sosial_budaya',
            'akses_sarana_prasarana',
            'akses_perekonomian',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $bidangPemerintahan = Role::firstOrCreate(['name' => 'bidang_pemerintahan']);
        $bidangSosialBudaya = Role::firstOrCreate(['name' => 'bidang_sosial_budaya']);
        $bidangSaranaPrasarana = Role::firstOrCreate(['name' => 'bidang_sarana_prasarana']);
        $bidangPerekonomian = Role::firstOrCreate(['name' => 'bidang_perekonomian']);

        // Role Permission
        $bidangPemerintahan->givePermissionTo('akses_pemerintahan');
        $bidangSosialBudaya->givePermissionTo('akses_sosial_budaya');
        $bidangSaranaPrasarana->givePermissionTo('akses_sarana_prasarana');
        $bidangPerekonomian->givePermissionTo('akses_perekonomian');

        // Admin Permission
        $admin->givePermissionTo($permissions);
    }
}
