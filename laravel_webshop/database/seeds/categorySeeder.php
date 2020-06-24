<?php

use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\categories([
            'category_name' => 'dieren',
        ]);
        $category->save();
        $category = new \App\categories([
            'category_name' => 'boeken',
        ]);
        $category->save();
        $category = new \App\categories([
            'category_name' => 'autos',
        ]);
        $category->save();
        $category = new \App\categories([
            'category_name' => 'computers',
        ]);
        $category->save();
        $category = new \App\categories([
            'category_name' => 'keuken',
        ]);
        $category->save();
    }
}
