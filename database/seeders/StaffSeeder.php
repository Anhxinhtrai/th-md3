<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new Staff();
        $staff->group = "Quản lí hệ thống";
        $staff->phone='039848828';
        $staff->name = "Nguyễn Vũ Tiến";
        $staff->dob = "2000-11-11";
        $staff->gender = "Nam";
        $staff->ID_number = "063563889";
        $staff->email = "tien@gmail.com";
        $staff->address = "Viet Nam";
        $staff->save();

        $staff = new Staff();
        $staff->group = "Quản lí nhan su";
        $staff->phone='039848828';
        $staff->name = "Nguyễn Vũ Trung";
        $staff->dob = "2000-11-11";
        $staff->gender = "Nam";
        $staff->ID_number = "063563889";
        $staff->email = "trung@gmail.com";
        $staff->address = "Viet Nam";
        $staff->save();

        $staff = new Staff();
        $staff->group = "Le Tan";
        $staff->phone='039848828';
        $staff->name = "Nguyễn Thu Trang";
        $staff->dob = "2000-11-11";
        $staff->gender = "Nữ";
        $staff->ID_number = "063563889";
        $staff->email = "trang@gmail.com";
        $staff->address = "Viet Nam";
        $staff->save();

        $staff = new Staff();
        $staff->phone='039848828';
        $staff->group = "Quản lí phong";
        $staff->name = "Nguyễn Minh Hung";
        $staff->dob = "2000-11-11";
        $staff->gender = "Nam";
        $staff->ID_number = "063563889";
        $staff->email = "hung@gmail.com";
        $staff->address = "Viet Nam";
        $staff->save();

    }
}
