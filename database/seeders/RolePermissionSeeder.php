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
        $pages = [
            'Roles' , 
            'Users' , 
            'Suppliers' , 
            'Customers' , 
            'Brand' ,
            'BrandModel' ,
            'BrandDeviceModel' ,
            'Product' ,
            'ProductCategory' ,
            'Unit' ,
            'PaymentMethodAccount' ,
            'PurchaseList' ,
            'PurchaseOrder' ,
            'PurchaseReturn' ,
            'SaleList' ,
            'SaleReturn' ,
            'RepairStatus',
            'Repair',
            'Stock',
            'Branch',
            'StockTransactionType',
            'StockTransaction',
            'StockTransactionProduct',
        ] ;
        $actions = [
            'view' ,
            'add' ,
            'update' ,
            'delete' ,
            'print' ,
        ] ;
        //-----------------------------
        $permissions = [];
        foreach ($pages as $page) {
            foreach ($actions as $action) {
                $permissions[] = $page . '_' . $action;
            }
        }
        //-----------------------------Special Permissions
        $permissions = array_merge($permissions , [
            'dashboard'
        ]);
        //-----------------------------
        $adminRole = Role::create(['name' => 'Admin']);
        //-----------------------------
        // create permissions
        foreach($permissions as $permission ){
            Permission::create(['name' => $permission ]);
            //-------- assign to admin 
            $adminRole ->givePermissionTo($permission);
        }
        //-----------------------------
    }
}
