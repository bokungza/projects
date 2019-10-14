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
        //
        $pay = new App\pay;
        $pay->orderid = 1;
        $pay->bank = 'ธนาคาร1';
        $pay->day = 1;
        $pay->month = 10;
        $pay->year = 2019;
        $pay->hour = 10;
        $pay->minute = 10;
        $pay->firstname = 'อิศเรศน์';
        $pay->lastname = 'สิงห์ทวีศักดิ์';
        $pay->cost = 2000;
        $pay->save();

        $pay = new App\pay;
        $pay->orderid = 2;
        $pay->bank = 'ธนาคาร2';
        $pay->day = 2;
        $pay->month = 10;
        $pay->year = 2019;
        $pay->hour = 12;
        $pay->minute = 12;
        $pay->firstname = 'ภัทรพล';
        $pay->lastname = 'พลตะคุ';
        $pay->cost = 3000;
        $pay->save();
        
        $pay = new App\pay;
        $pay->orderid = 3;
        $pay->bank = 'ธนาคาร3';
        $pay->day = 3;
        $pay->month = 10;
        $pay->year = 2019;
        $pay->hour = 14;
        $pay->minute = 14;
        $pay->firstname = 'ศิขริน';
        $pay->lastname = 'กาดีโรจน์';
        $pay->cost = 5000;
        $pay->save();
    }
}
