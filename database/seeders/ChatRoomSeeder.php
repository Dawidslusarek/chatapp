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
            'name' => 'Technik informatyk'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Mechatronik'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Pojazdów samochodowych'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Logistyk'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Urządzeń i systemów energetyki odnawialnej'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Architektury krajobrazu'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Żywienia i usług gastronomicznych'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Technik Turystyki wiejskiej'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'LO profil informatyczno-językowy'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'LO profil biologiczno-chemiczny z kosmetologią i promocją zdrowia'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'LO profil profil turystyczno-europejski'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'ZSZ Mechanik pojazdów samochodowych'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'ZSZ Wielozawodowa'
        ]);





    }
}
