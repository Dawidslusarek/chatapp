<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_rooms')->insert([
            'name' => 'Główny'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Pytania do nauczycieli'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Programista'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Informatyk'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Mechatronik'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Pojazdów Samochodowych'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Logistyk'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'OZE -Technik Urządzeń i Systemów Energetyki Odnawialnej'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Architektury Krajobrazu'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Żywienia i Usług Gastronomicznych'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Rolnik'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Elektryk'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'LO profil Humanistyczno - społeczny'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'LO profil Turystyczno - przyrodniczy'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Szkoła Branżowa - Elektryk'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Szkoła Branżowa - Magazynier - logistyk'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Szkoła Branżowa - Mechanik Pojazdów Samochodowych'
        ]);
        DB::table('chat_rooms')->insert([
            'name' => 'Szkoła Branżowa - Klasa wielozawodowa'
        ]);





    }
}
