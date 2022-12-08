<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ad;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = User::factory()->create([
            'name' => 'Vio Popescu'
        ]);

        Ad::factory(5)->create([
            'user_id' => $user->id
        ]);

        $apartments = Category::create([
            'name' => 'Apartments',
            'slug' => 'apartments'
        ]);

        $houses = Category::create([
            'name' => 'Houses',
            'slug' => 'houses'
        ]);

        $land = Category::create([
            'name' => 'Land',
            'slug' => 'land'
        ]);

        User::create([
            'user_id' => $user->id,
            'name' => 'Alex',
            'username' => 'Alexinho',
            'telephone' => '0723360305',
            'email' => 'alex@mainesia.com',
            'password' => '1234',
        ]);

        Ad::create([
            'user_id' => $user->id,
            'category_id' => $apartments->id,
            'title' => 'Apartment for sale with a view',
            'slug' => 'apartment-for-sale',
            'summary' => 'Beautiful apartment for sale in Larra Ville',
            'body' => 'Beautiful apartment for sale in Larra Ville with an incredible view to the forrest',
        ]);

        Ad::create([
            'user_id' => 1,
            'category_id' => $houses->id,
            'title' => 'Big House for Sale',
            'slug' => 'house-for-sale',
            'summary' => 'Beautiful House in Larra Ville',
            'body' => 'Big house for sale in Larra Ville with an incredible view to the forrest',
        ]);

        Ad::create([
            'user_id' => 1,
            'category_id' => $land->id,
            'title' => 'Land for Sale',
            'slug' => 'land-for-sale',
            'summary' => 'Plot of Land in Larra Ville',
            'body' => 'Suitable for duplex in Larra Ville with an incredible view to the forrest',
        ]);

    }
}
