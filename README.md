# ขั้นตอนการติดตั้ง
* clone project จาก git hub ลง folder www ของ laragon ด้วยคำสั่ง git clone https://github.com/bokungza/projects
* เปิด laragon แล้วใช้คำสั่ง cd ไปที่ folder project ที่ clone มา
* ใช้คำสั่ง composer install  
* ใช้คำสั่ง composer dump-autoload 
* ใช้คำสั่ง cp .env.example .env
* ใช้คำสั่ง php artisan key:generate
** แก้ไขไฟล์ .env
* เปิด Mysql จาก laragon ขึ้นมา
* สร้าง Database ชื่อ project ขึ้นมาโดยใช้ user เป็น root ชั่วคราว (ไม่มีรหัส)
* ใช้คำสั่ง php artisan migrate:refresh --seed
* ใช้คำสั่ง php artisan serve
* พร้อมใช้งาน

## User สำหรับการเข้าใช้
* EMAIL : zelos@hotmail.com  PASSWORD : 123456  ROLE : (ADMIN)
* EMAIL : folk@gmail.com     PASSWORD : 123456  ROLE : (CUSTOMER)
