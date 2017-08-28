<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EntranceTablesSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        // Create groups
        $group = config('entrance.group');
        $group::truncate();
        $group::create([
            [
                'id'          => 1,
                'name'        => '系统功能',
                'description' => '系统主要功能',
                'order'       => 1,
            ],
            [
                'id'          => 2,
                'name'        => '权限控制',
                'description' => '角色，权限，模块等相关功能的管理',
                'order'       => 2,
            ],
        ]);

        // Create modules
        $module = config('entrance.module');
        $module::truncate();
        $module::create([
            [
                'id'          => 1,
                'name'        => '板块管理',
                'description' => '系统板块的管理',
                'icon'        => 'fa fa-sun-o',
                'group_id'    => 2,
            ],
            [
                'id'          => 2,
                'name'        => '模块管理',
                'description' => '系统模块的管理',
                'icon'        => 'fa fa-sun-o',
                'group_id'    => 2,
            ],
            [
                'id'          => 3,
                'name'        => '权限管理',
                'description' => '系统权限的管理',
                'icon'        => 'fa fa-sun-o',
                'group_id'    => 2,
            ],
            [
                'id'          => 4,
                'name'        => '角色管理',
                'description' => '系统角色的管理',
                'icon'        => 'fa fa-sun-o',
                'group_id'    => 2,
            ],
            [
                'id'          => 5,
                'name'        => '管理员',
                'description' => '系统管理员',
                'icon'        => 'fa fa-sun-o',
                'group_id'    => 2,
            ],
        ]);

        // Create permissions
        $permission = config('entrance.permission');
        $permission::truncate();
        $permission::create([
            [
                'id'          => 1,
                'name'        => '浏览',
                'description' => '系统板块的浏览',
                'method'      => 'GET',
                'uri'         => 'auth/groups',
                'module_id'   => 1,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 2,
                'name'        => '添加',
                'description' => '添加板块页面',
                'method'      => 'GET',
                'uri'         => 'auth/groups/create',
                'module_id'   => 1,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 3,
                'name'        => '保存',
                'description' => '保存新的板块',
                'method'      => 'POST',
                'uri'         => 'auth/groups',
                'module_id'   => 1,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 4,
                'name'        => '编辑',
                'description' => '编辑板块页面',
                'method'      => 'GET',
                'uri'         => 'auth/groups/{group}/edit',
                'module_id'   => 1,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 5,
                'name'        => '更新',
                'description' => '更新板块',
                'method'      => 'PATCH',
                'uri'         => 'auth/groups/{group}',
                'module_id'   => 1,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 6,
                'name'        => '删除',
                'description' => '删除系统板块',
                'method'      => 'DELETE',
                'uri'         => 'auth/groups/{group}',
                'module_id'   => 1,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 7,
                'name'        => '浏览',
                'description' => '浏览系统模块',
                'method'      => 'GET',
                'uri'         => 'auth/modules',
                'module_id'   => 2,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 8,
                'name'        => '添加',
                'description' => '添加模块页面',
                'method'      => 'GET',
                'uri'         => 'auth/modules/create',
                'module_id'   => 2,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 9,
                'name'        => '保存',
                'description' => '保存新的模块',
                'method'      => 'POST',
                'uri'         => 'auth/modules',
                'module_id'   => 2,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 10,
                'name'        => '编辑',
                'description' => '编辑模块页面',
                'method'      => 'GET',
                'uri'         => 'auth/modules/{module}/edit',
                'module_id'   => 2,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 11,
                'name'        => '更新',
                'description' => '更新模块',
                'method'      => 'PATCH',
                'uri'         => 'auth/modules/{module}',
                'module_id'   => 2,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 12,
                'name'        => '删除',
                'description' => '删除系统模块',
                'method'      => 'DELETE',
                'uri'         => 'auth/modules/{module}',
                'module_id'   => 2,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 13,
                'name'        => '浏览',
                'description' => '浏览系统权限',
                'method'      => 'GET',
                'uri'         => 'auth/permissions',
                'module_id'   => 3,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 14,
                'name'        => '添加',
                'description' => '添加权限页面',
                'method'      => 'GET',
                'uri'         => 'auth/permissions/create',
                'module_id'   => 3,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 15,
                'name'        => '保存',
                'description' => '保存新的权限',
                'method'      => 'POST',
                'uri'         => 'auth/permissions',
                'module_id'   => 3,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 16,
                'name'        => '编辑',
                'description' => '编辑权限页面',
                'method'      => 'GET',
                'uri'         => 'auth/permissions/{permission}/edit',
                'module_id'   => 3,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 17,
                'name'        => '更新',
                'description' => '更新权限',
                'method'      => 'PATCH',
                'uri'         => 'auth/permissions/{permission}',
                'module_id'   => 3,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 18,
                'name'        => '删除',
                'description' => '删除系统权限',
                'method'      => 'DELETE',
                'uri'         => 'auth/permissions/{permission}',
                'module_id'   => 3,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 19,
                'name'        => '浏览',
                'description' => '浏览角色列表',
                'method'      => 'GET',
                'uri'         => 'auth/roles',
                'module_id'   => 4,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 20,
                'name'        => '添加',
                'description' => '添加角色页面',
                'method'      => 'GET',
                'uri'         => 'auth/roles/create',
                'module_id'   => 4,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 21,
                'name'        => '保存',
                'description' => '保存新的角色',
                'method'      => 'POST',
                'uri'         => 'auth/roles',
                'module_id'   => 4,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 22,
                'name'        => '编辑',
                'description' => '编辑角色页面',
                'method'      => 'GET',
                'uri'         => 'auth/roles/{role}/edit',
                'module_id'   => 4,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 23,
                'name'        => '更新',
                'description' => '更新角色',
                'method'      => 'PATCH',
                'uri'         => 'auth/roles/{role}',
                'module_id'   => 4,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 24,
                'name'        => '删除',
                'description' => '删除角色',
                'method'      => 'DELETE',
                'uri'         => 'auth/roles/{role}',
                'module_id'   => 4,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 25,
                'name'        => '浏览',
                'description' => '浏览系统管理员列表',
                'method'      => 'GET',
                'uri'         => 'auth/users',
                'module_id'   => 5,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 26,
                'name'        => '添加',
                'description' => '添加系统管理员页面',
                'method'      => 'GET',
                'uri'         => 'auth/users/create',
                'module_id'   => 5,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 1,
            ],
            [
                'id'          => 27,
                'name'        => '保存',
                'description' => '保存新的系统管理员',
                'method'      => 'POST',
                'uri'         => 'auth/users',
                'module_id'   => 5,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 28,
                'name'        => '编辑',
                'description' => '编辑系统管理员页面',
                'method'      => 'GET',
                'uri'         => 'auth/users/{user}/edit',
                'module_id'   => 5,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 29,
                'name'        => '更新',
                'description' => '更新管理员',
                'method'      => 'PATCH',
                'uri'         => 'auth/users/{user}',
                'module_id'   => 5,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 30,
                'name'        => '删除',
                'description' => '删除管理员',
                'method'      => 'DELETE',
                'uri'         => 'auth/users/{user}',
                'module_id'   => 5,
                'group_id'    => 0,
                'icon'        => null,
                'is_visible'  => 0,
            ],
            [
                'id'          => 31,
                'name'        => 'Demo',
                'description' => 'Demo演示页面',
                'method'      => 'GET',
                'uri'         => 'demo',
                'module_id'   => 0,
                'group_id'    => 1,
                'icon'        => 'fa fa-tachometer',
                'is_visible'  => 1,
            ],
        ]);

        // Create roles
        $role = config('entrance.role');
        $role::truncate();
        $role::create([
            [
                'id'          => 1,
                'name'        => '超级管理员',
                'description' => '系统最高权限拥有者',
            ],
            [
                'id'          => 2,
                'name'        => '测试管理员',
                'description' => '该角色用于系统功能的测试',
            ],
        ]);


        // Create users
        $user = config('entrance.user');
        $user::truncate();
        $user::create([
            [
                'id'       => 1,
                'name'     => 'admin',
                'email'    => 'admin@admin.com',
                'password' => bcrypt('123123'),
                'role_id'  => 1,
            ],
            [
                'id'       => 2,
                'name'     => 'test',
                'email'    => 'test@test.com',
                'password' => bcrypt('123123'),
                'role_id'  => 2,
            ],
        ]);

        // Sync permissions for admin
        $admin = $role::first();
        $admin::sync([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31]);
    }
}
