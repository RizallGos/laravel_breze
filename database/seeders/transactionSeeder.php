<?php
 
 namespace Database\Seeders;
 
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Str;
 use Faker\Factory as Faker;
 
 class transactionSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      */
     public function run(): void
     {
         $faker = Faker::create('id_ID');
         for($i=1; $i <=10; $i++ ){
            DB::table('transactions')->insert([
                'user_id' => 1,
                'item_id' => 1, // ✅ tambahkan ini
                'date' => '2024-04-22',
                'total' => 10000,
                'pay_total' => 12000,
            ]);
            
         }
     }
 }