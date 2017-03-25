<?php
use Illuminate\Database\Seeder;
use App\Staff1;
use App\Staff2;
use App\Staff3;
use App\Staff4;
use App\Staff5;
use App\Staff6;
use App\Staff7;
use App\Staff8;
class Staff1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table("staff1")->delete();
        Staff1::create([
        'id'=>'1',
        'picture'=>'圖片',
        'summary'=>'介紹在此改',
      ]);
      DB::table("staff2")->delete();
        Staff2::create([
          'id'=>'1',
        'picture'=>'圖片',
        'summary'=>'介紹在此改',
      ]);
      DB::table("staff3")->delete();
        Staff3::create([
          'id'=>'1',
        'picture'=>'圖片',
        'summary'=>'介紹在此改',
      ]);
      DB::table("staff4")->delete();
        Staff4::create([
          'id'=>'1',
        'picture'=>'圖片',
        'summary'=>'介紹在此改',
      ]);
      DB::table("staff5")->delete();
        Staff5::create([
          'id'=>'1',
        'picture'=>'圖片',
        'summary'=>'介紹在此改',
      ]);
      DB::table("staff6")->delete();
        Staff6::create([
          'id'=>'1',
        'picture'=>'圖片',
        'summary'=>'介紹在此改',
      ]);
      DB::table("staff7")->delete();
        Staff7::create([
          'id'=>'1',
        'picture'=>'圖片',
        'summary'=>'介紹在此改',
      ]);
      DB::table("staff8")->delete();
        Staff8::create([
          'id'=>'1',
        'picture'=>'圖片',
        'summary'=>'介紹在此改',
      ]);
    }
}
