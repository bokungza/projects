<?php

use Illuminate\Database\Seeder;

class PaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $pay = new App\pay;
        $pay->orderid = 1111111111;
        $pay->bank = 'ไทยพานิช';
        $pay->day = 13;
        $pay->month = 10;
        $pay->year = 2019;
        $pay->hour = 11;
        $pay->minute = 23;
        $pay->payerfirstname = 'อิศเรศน์';
        $pay->payerlastname = 'สิงห์ทวีศักดิ์';
        $pay->amount = 2000;
        $pay->save();

        
        $pay = new App\pay;
        $pay->orderid = 2222222222;
        $pay->bank = 'กรุงไทย';
        $pay->day = 10;
        $pay->month = 9;
        $pay->year = 2019;
        $pay->hour = 13;
        $pay->minute = 45;
        $pay->payerfirstname = 'ภัทรพล';
        $pay->payerlastname = 'พลตะคุ';
        $pay->amount = 1000;
        $pay->save();

        
        $pay = new App\pay;
        $pay->orderid = 3333333333;
        $pay->bank = 'กสิกรไทย';
        $pay->day = 12;
        $pay->month = 9;
        $pay->year = 2019;
        $pay->hour = 18;
        $pay->minute = 03;
        $pay->payerfirstname = 'ศิขริน';
        $pay->payerlastname = 'กาดีโรจน์';
        $pay->amount = 3000;
        $pay->save();

        factory(\App\Pay::class, 10)->create();
    }
}
