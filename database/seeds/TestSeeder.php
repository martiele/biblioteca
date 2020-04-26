<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('my_table')->insert([
        'name' => Str::random(40)
    	]);
        factory(App\MyTable::class, 50)->create();

    }
}
