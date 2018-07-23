<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
        $this->call(InstructorTableSeeder::class);
        $this->call(MaterialTableSeeder::class);
        $this->call(MessageTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(SliderTableSeeder::class);
    }
}
