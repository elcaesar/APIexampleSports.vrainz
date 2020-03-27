<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'ani' => '1165467654', 
            'status' => '1' , 
            'creation_date' => '2020-01-01 13:42:50' ,
            'end_date' => '' , 
            'service_id' => '12' , 
            'last_billings' => json_encode('{"date":"2020-01-01 13:43:54","date":"2020-01-11 11:23:12","date":"2020-01-18 08:53:32"}') , 
            'category_id' => '1'
        ]);

        DB::table('users')->insert([
            'ani' => '1198761234', 
            'status' => '1' , 
            'creation_date' => '2020-01-02 13:49:00' ,
            'end_date' => '' , 
            'service_id' => '11' , 
            'last_billings' => json_encode('{ "date":"2020-01-02 13:55:54","date":"2020-01-14 11:23:12","date":"2020-01-15 08:53:32"}') , 
            'category_id' => '1'
        ]);
        DB::table('users')->insert([
            'ani' => '1165493216', 
            'status' => '2' , 
            'creation_date' => '2019-12-30 13:30:00' ,
            'end_date' => '' , 
            'service_id' => '13' , 
            'last_billings' => json_encode('{"date":"2019-12-31 13:43:54","date":"2019-12-31 20:23:12","date":"2020-01-03 08:53:32"}'),
            'category_id' => '2'
        ]);
        DB::table('users')->insert([
            'ani' => '+543764654321', 
            'status' => '2' , 
            'creation_date' => '2020-01-05 14:30:00' ,
            'end_date' => '' , 
            'service_id' => '11' , 
            'last_billings' => json_encode('{"date":"2020-01-07 13:43:54","date":"2020-01-08 20:23:12","date":"2020-01-16 08:53:32"}'),
            'category_id' => '1'
        ]);
        DB::table('users')->insert([
            'ani' => '+5587563216954', 
            'status' => '1' , 
            'creation_date' => '2020-01-10 14:30:00' ,
            'end_date' => '' , 
            'service_id' => '12' , 
            'last_billings' => json_encode('{"date":"2020-01-10 14:43:54","date":"2020-01-10 16:23:12","date":"2020-01-11 09:53:32"}') , 
            'category_id' => '2'
        ]);
        DB::table('users')->insert([
            'ani' => '+26549873213', 
            'status' => '1' , 
            'creation_date' => '2020-01-12 14:30:00' ,
            'end_date' => '' , 
            'service_id' => '11' , 
            'last_billings' => json_encode('{"date":"2020-01-13 14:43:54","date":"2020-01-15 16:23:12","date":"2020-01-22 09:53:32"}') , 
            'category_id' => '2'
        ]);
        
    }
}
