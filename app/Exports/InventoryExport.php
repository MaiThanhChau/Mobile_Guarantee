<?php
namespace App\Exports;

use Modules\ImportWarehouses\Entities\ProductInventories;
use Maatwebsite\Excel\Concerns\FromCollection;

class InventoryExport implements FromCollection
{
    public function collection()
    {
$datas = ProductInventories::join('warehouse','product_inventories.warehouse_id','=','warehouse.id')
        ->join('products','product_inventories.product_id','=','products.id')
        ->get(['products.name as name','warehouse.name as w_name','product_inventories.available_quantity as p_quantity','products.buy_price as p_buy']);
         //dd($datas);
         
        $infor = ['Tên sản phẩm','Chi nhánh','Tồn kho','Giá nhập','Tổng'];
        $export = $datas->toArray();
        $exports = array_values($export);
        
        array_unshift($exports,$infor);
        return collect($exports);
    }

}
