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
            'start' => '07.00',
            'finish' => '07.00',
            'location' => 'Gedung Putih Amerika',
            'quota' => '111',
            'photo' => 'arya.jpg' 
        ]);
    }
}
