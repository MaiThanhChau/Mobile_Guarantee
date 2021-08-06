<?php

namespace Modules\Roles\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RolesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        $modules = [
            'roles'                 => 'Quyền Hạn',
            'products'              => 'Sản Phẩm',
            'orders'                => 'Đơn Hàng',
            'users'                 => 'Người Dùng',
            'user_groups'           => 'Nhóm Người Dùng',
            'product_types'         => 'Loại Sản Phẩm',
            'product_suppliers'     => 'Nhà Cung Cấp',
            'customers'             => 'Khách hàng',
            'customer_group'        => 'Nhóm khách hàng',
            'report'                => 'Báo cáo',
            'importwarehouses'      => 'Nhập kho',
            'exportwarehouses'      => 'Xuất kho'
        ];

        $actions = [
            'index'     => 'Danh sách',
            'create'    => 'Tạo mới',
            'store'     => 'Lưu',
            'show'      => 'Xem',
            'edit'      => 'Sửa',
            'update'    => 'Cập nhật',
            'destroy'   => 'Xóa',
        'create_import' => 'Nhập mới',
            'import'    => 'Nhập',
            'export'    => 'Xuất'
        ];

        $data = [];
        foreach ($modules as $group => $module) {
            foreach ($actions as $action => $action_title) {
                $data[] = [
                    'title'         => $module.' : '.$action_title,
                    'name'          => $group.'_'.$action,
                    'group'         => $group,
                    'group_title'   => $module,
                ];
            }
        }

        foreach ($data as $insert_arr) {
            DB::table('roles')->insert($insert_arr);
        }
    }
}
