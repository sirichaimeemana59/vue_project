<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Items;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Items::create([
            'name' =>'sirichai',
            'lastname' =>'Meemana',
            'tell'=>'0978453645',
            'email'=>'ss@gmail.com'
        ]);
    }
}
