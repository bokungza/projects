# ขั้นตอนการติดตั้ง
1.clone project จาก git hub ลง folder www ของ laragon ด้วยคำสั่ง 
2.เปิด laragon แล้วใช้คำสั่ง cd ไปที่ folder project ที่ clone มา
3.ใช้คำสั่ง composer install  
4.ใช้คำสั่ง composer dump-autoload 
5.ใช้คำสั่ง cp .env.example .env
6.ใช้คำสั่ง php artisan key:generate
7.เปิด Mysql จาก laragon ขึ้นมา
8.สร้าง Database ชื่อ project ขึ้นมาโดยใช้ user เป็น root ชั่วคราว (ไม่มีรหัส)
9.ใช้คำสั่ง php artisan serve
10.ใช้คำสั่ง php artisan migrate:install
11.ใช้คำสั่ง php artisan db:seed
12.พร้อมใช้งาน
