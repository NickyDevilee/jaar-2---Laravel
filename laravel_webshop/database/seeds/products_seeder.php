<?php

use Illuminate\Database\Seeder;

class products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\products([
            'image_path' => 'https://media.s-bol.com/YEpmLqgp8ELM/550x774.jpg',
            'title' => 'Dead island',
            'description' => 'BOE! Je schrok he? net zoveel als als je dit spel gaat spelen',
            'price' => 10,
            'category_id' => 1,
        ]);
        $product->save();
        $product = new \App\products([
            'image_path' => 'https://www.toychamp.be/media/catalog/product/0/0/00880794_001.jpg',
            'title' => 'Pim van de petteflat',
            'description' => 'Een boek over het ernstige leven van Rupsje nooitgenoeg',
            'price' => 13,
            'category_id' => 2,
        ]);
        $product->save();
        $product = new \App\products([
            'image_path' => 'https://images.philips.com/is/image/PhilipsConsumer/HR3741_00-IMS-nl_NL?$jpglarge$&wid=1250',
            'title' => 'Philips De mooie mixer',
            'description' => 'Een mixer voor alleen kwarktaart. als je hem gebruikt voor wat anders, omploft ie',
            'price' => 101,
            'category_id' => 3,
        ]);
        $product->save();
        $product = new \App\products([
            'image_path' => 'https://lirp-cdn.multiscreensite.com/e2688e37/dms3rep/multi/opt/blije-kat-640w.jpg',
            'title' => 'Hond',
            'description' => 'Deze hond is heel trouw. hij kan een stok halen enzo. hij kan misschien zelfs je krant halen voor je, jij luie zak',
            'price' => 101,
            'category_id' => 4,
        ]);
        $product->save();
    }
}
