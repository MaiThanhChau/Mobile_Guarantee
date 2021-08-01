<?php

namespace App\Imports;

use Modules\Product\Entities\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

class ProductImport implements ToCollection
{
    public function collection(Collection $rows)
    {
    
        $rows = $rows->toArray();
        unset($rows[0]);
        foreach ($rows as $row) 
        {
           $group_name = $row[2];
            $group  = DB::table('product_groups')
           ->select('id')->where('name','=',$group_name)->first();
           $group_id = $group->id;

           $supplier_name = $row[3];
           $supplier = DB::table('product_suppliers')
           ->select('id')->where('name','=',$supplier_name)->first();
           $supplier_id = $supplier->id;

           
           if($row[4] == 'Khả dụng'){
               $group_status = 1;
           }else{
               $group_status = 0;
           }

             Product::create([
                'name' => $row[0],
                'sku' => $row[1],
                'group_product_id' => $group_id,
                'supplier_product_id' => $supplier_id,
                'status' =>  $group_status,
                'buy_price' => $row[5],
                'sell_price' => $row[6],
                'guarantee_time' => $row[7]
             ]);
        }
        
    }
}