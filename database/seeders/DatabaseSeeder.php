<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Giveaway;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('admins')->insert([
            'email' => 'support@trickitworld@gmail.com',
            'phone_en' => '+8801835061968',
            'phone_ban' => '+৮৮০১৮৩৫০৬১৯৬৮',

        ]);

        DB::table('custrom_ads')->insert([
            'header_ads' => 'test',
        ]);

        DB::table('custrom_pages')->insert([
            'tiw_about' => 'test',
        ]);
        Category::create([
            'name_en' => 'Tech News',
            'name_ban' => 'টেক নিউজ',
            'slug_en' => 'tech-news',
            'slug_ban' => 'টেক-নিউজ',
            'status' => 1,

        ]);

        // Giveaway::create([
        //     'name_en' => 'Giveaway',
        //     'name_ban' => 'উপহার',
        //     'slug_en' => 'giveaway',
        //     'slug_ban' => 'উপহার',
        //     'status' => 1,
        // ]);
    }
}
