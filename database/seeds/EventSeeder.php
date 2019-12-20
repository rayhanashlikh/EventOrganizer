<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name_event' => 'Balap Kecoa',
            'detail'=> 'Ini detail',
            'description' => 'ini Deskripsi',
            'start' => '2019-10-10',
            'finish' => '2019-10-22',
            'location' => 'Gedung Putih Amerika',
            'quota' => '111',
            'photo' => 'arya.jpg' 
        ]);
    }
}
