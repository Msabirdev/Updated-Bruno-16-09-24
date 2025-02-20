<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = [
            'read',
            'write',
            'create',
            'delete',
        ];

        $permissions_by_role = [
            'superadministrator' => [
                'user management',
                'content management',
                'settings management',
                'designer management',
                'property management',
            ],
            'administrator' => [
                'user management',
                'content management',
                'settings management',
                'designer management',
                'property management',
            ],
            'company' => [
                'content management',
                'designer management',

            ],
            'user' => [

            ],
            'trial' => [
            ],
        ];

        foreach ($permissions_by_role['administrator'] as $permission) {
            foreach ($abilities as $ability) {
                Permission::create(['name' => $ability . ' ' . $permission]);
            }
        }

        foreach ($permissions_by_role as $role => $permissions) {
            $full_permissions_list = [];
            foreach ($abilities as $ability) {
                foreach ($permissions as $permission) {
                    $full_permissions_list[] = $ability . ' ' . $permission;
                }
            }
            Role::create(['name' => $role])->syncPermissions($full_permissions_list);
        }

        User::find(1)->assignRole('superadministrator');
        User::find(2)->assignRole('company');
    }
}
