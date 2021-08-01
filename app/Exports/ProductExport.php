<?php
namespace App\Exports;

use Modules\Product\Entities\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class ProductExport implements FromCollection
{
    public function collection()
    {
$data = Product::join('product_groups','products.group_product_id','=','product_groups.id')
        ->join('product_suppliers','products.supplier_product_id','=','product_suppliers.id')
        ->select(['products.name','products.sku','product_groups.name as p_g_name', 'product_suppliers.name as p_s_name',
        'products.buy_price','products.sell_price','products.guarantee_time'])
        ->get();
                   
        $infor = ['Tên sản phẩm','Mã sản phẩm','Nhóm sản phẩm','Nhà cung cấp','Giá mua','Giá bán','Bảo hành'];
        $export = $data->toArray();
        $exports = array_values($export);
        array_unshift($exports,$infor);
        return collect($exports);
    }
}
