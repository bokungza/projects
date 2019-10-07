<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\product;
        $product->name = 'Round Beef (เนื้อส่วนสะโพก)';
        $product->detail = 'เนื้อส่วนนี้เป็นเนื้อไขมันน้อย เหมาะกับการประกอบอาหารที่ใช้ความชื้นและเวลายาวนาน';
        $product->unit_price = 30.00;
        $product->save();

        $product = new App\product;
        $product->name = 'Chuck Beef (เนื้อสันคอ)';
        $product->detail = 'เนื้อส่วนนี้มักจะมาทำเป็นแฮมเบอร์เกอร์';
        $product->unit_price = 30.00;
        $product->save();

        $product = new App\product;
        $product->name = 'Rib Beef (เนื้อซี่โครง)';
        $product->detail = 'ส่วนมากนำไปย่างหรือทอดโดยไม่ต้องเลาะกระดูกออก';
        $product->unit_price = 30.00;
        $product->save();


        $product = new App\product;
        $product->name = 'Sirloin Beef (เนื้อเซอร์ลอยด์)';
        $product->detail = 'เป็นเนื้อสันที่นุ่มมากที่สุดใน บรรดาเนื้อส่วนต่างๆ ส่วนที่ติดกับกระดูกรูปตัว T เรามักจะเรียกว่า "ทีโบน';
        $product->unit_price = 30.00;
        $product->save();

        $product = new App\product;
        $product->name = 'Tenderloin Beef (เนื้อสันใน)';
        $product->detail = 'เป็นเนื้อที่นุ่มและแพงที่สุด นิยมทำสเต็ก เช่น ฟิเลต์มิยอง';
        $product->unit_price = 30.00;
        $product->save();

        $product = new App\product;
        $product->name = 'Shank Beef (เนื้อน่อง)';
        $product->detail = 'เป็นเนื้อที่เหนียวที่สุด มักนิยมทำสตูว์หรือตุ๋น';
        $product->unit_price = 30.00;
        $product->save();

        factory(\App\Product::class, 10)->create();
    }
}
