<?php

namespace Modules\Order\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Order\Entities\order;

class OrderSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $order = new order();
        $order->customer_name = 'aaa';
        $order->customer_phone = '123';
        $order->customer_email = 'bbb';
        $order->customer_address = 'ccc';
        $order->order_status = 1;
        $order->product_quantity = 2;
        $order->total_quantity = 3;
        $order->product_total = 4;
        $order->transport = 1;
        $order->sale_off = 0;
        $order->sub_total = 111;
        $order->paid = 111;
        $order->owed = 111;
        $order->save();

        $order = new order();
        $order->customer_name = 'aaa1';
        $order->customer_phone = '123';
        $order->customer_email = 'bbb';
        $order->customer_address = 'ccc';
        $order->order_status = 1;
        $order->product_quantity = 2;
        $order->total_quantity = 3;
        $order->product_total = 4;
        $order->transport = 1;
        $order->sale_off = 0;
        $order->sub_total = 111;
        $order->paid = 111;
        $order->owed = 111;
        $order->save();
        
        $order = new order();
        $order->customer_name = 'aaa2';
        $order->customer_phone = '123';
        $order->customer_email = 'bbb';
        $order->customer_address = 'ccc';
        $order->order_status = 1;
        $order->product_quantity = 2;
        $order->total_quantity = 3;
        $order->product_total = 4;
        $order->transport = 1;
        $order->sale_off = 0;
        $order->sub_total = 111;
        $order->paid = 111;
        $order->owed = 111;
        $order->save();
        
        $order = new order();
        $order->customer_name = 'aaa3';
        $order->customer_phone = '123';
        $order->customer_email = 'bbb';
        $order->customer_address = 'ccc';
        $order->order_status = 1;
        $order->product_quantity = 2;
        $order->total_quantity = 3;
        $order->product_total = 4;
        $order->transport = 1;
        $order->sale_off = 0;
        $order->sub_total = 111;
        $order->paid = 111;
        $order->owed = 111;
        $order->save();
        
        $order = new order();
        $order->customer_name = 'aaa4';
        $order->customer_phone = '123';
        $order->customer_email = 'bbb';
        $order->customer_address = 'ccc';
        $order->order_status = 1;
        $order->product_quantity = 2;
        $order->total_quantity = 3;
        $order->product_total = 4;
        $order->transport = 1;
        $order->sale_off = 0;
        $order->sub_total = 111;
        $order->paid = 111;
        $order->owed = 111;
        $order->save();
    }
}
