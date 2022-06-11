<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'garden_access',
            ],
            [
                'id'    => 34,
                'title' => 'gallery_create',
            ],
            [
                'id'    => 35,
                'title' => 'gallery_edit',
            ],
            [
                'id'    => 36,
                'title' => 'gallery_show',
            ],
            [
                'id'    => 37,
                'title' => 'gallery_delete',
            ],
            [
                'id'    => 38,
                'title' => 'gallery_access',
            ],
            [
                'id'    => 39,
                'title' => 'request_a_service_create',
            ],
            [
                'id'    => 40,
                'title' => 'request_a_service_edit',
            ],
            [
                'id'    => 41,
                'title' => 'request_a_service_show',
            ],
            [
                'id'    => 42,
                'title' => 'request_a_service_delete',
            ],
            [
                'id'    => 43,
                'title' => 'request_a_service_access',
            ],
            [
                'id'    => 44,
                'title' => 'contact_us_create',
            ],
            [
                'id'    => 45,
                'title' => 'contact_us_edit',
            ],
            [
                'id'    => 46,
                'title' => 'contact_us_show',
            ],
            [
                'id'    => 47,
                'title' => 'contact_us_delete',
            ],
            [
                'id'    => 48,
                'title' => 'contact_us_access',
            ],
            [
                'id'    => 49,
                'title' => 'agricultural_project_create',
            ],
            [
                'id'    => 50,
                'title' => 'agricultural_project_edit',
            ],
            [
                'id'    => 51,
                'title' => 'agricultural_project_show',
            ],
            [
                'id'    => 52,
                'title' => 'agricultural_project_delete',
            ],
            [
                'id'    => 53,
                'title' => 'agricultural_project_access',
            ],
            [
                'id'    => 54,
                'title' => 'agricultural_treatment_access',
            ],
            [
                'id'    => 55,
                'title' => 'common_disease_create',
            ],
            [
                'id'    => 56,
                'title' => 'common_disease_edit',
            ],
            [
                'id'    => 57,
                'title' => 'common_disease_show',
            ],
            [
                'id'    => 58,
                'title' => 'common_disease_delete',
            ],
            [
                'id'    => 59,
                'title' => 'common_disease_access',
            ],
            [
                'id'    => 60,
                'title' => 'ask_consultation_create',
            ],
            [
                'id'    => 61,
                'title' => 'ask_consultation_edit',
            ],
            [
                'id'    => 62,
                'title' => 'ask_consultation_show',
            ],
            [
                'id'    => 63,
                'title' => 'ask_consultation_delete',
            ],
            [
                'id'    => 64,
                'title' => 'ask_consultation_access',
            ],
            [
                'id'    => 65,
                'title' => 'oders_protect_create',
            ],
            [
                'id'    => 66,
                'title' => 'oders_protect_edit',
            ],
            [
                'id'    => 67,
                'title' => 'oders_protect_show',
            ],
            [
                'id'    => 68,
                'title' => 'oders_protect_delete',
            ],
            [
                'id'    => 69,
                'title' => 'oders_protect_access',
            ],
            [
                'id'    => 70,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
