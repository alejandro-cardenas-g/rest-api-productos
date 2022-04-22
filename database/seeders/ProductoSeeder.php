<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'parrilla',
            'descripcion' => 'La super parrilla de Noe',
            'precio' => 150000.300,
            'imagen' => 'https://m.media-amazon.com/images/I/71cnzaaW1+L._AC_SX679_.jpg'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos don serio',
            'descripcion' => 'Los zapatos para lucir elegante todos los días',
            'precio' => 220000,
            'imagen' => 'https://media.revistagq.com/photos/5fd1e868dfba54732a24bbf0/master/w_2560,h_1800,c_limit/Blucher.jpg'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Funko: Charmander',
            'descripcion' => 'Tu amigo charmander siempre contigo',
            'precio' => 120000.700,
            'imagen' => 'https://asgardstores.com/797-large_default/funko-pop-charmander.jpg'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Camisa: Avenger',
            'descripcion' => 'Camisa de avengers',
            'precio' => 82000,
            'imagen' => 'https://wikirock.net/tienda/wp-content/uploads/2020/07/81Z8g77pyML._AC_UX522_.jpg'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Camisa: Superman',
            'descripcion' => 'Camisa: Superman',
            'precio' => 82000,
            'imagen' => 'https://m.media-amazon.com/images/I/714kuCbyWmL._AC_UY445_.jpg'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Camisa: Batman',
            'descripcion' => 'Camisa: Batman',
            'precio' => 82000,
            'imagen' => 'https://m.media-amazon.com/images/I/716h6ixrKnL._AC_UL1500_.jpg'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Camisa: Thor',
            'descripcion' => 'Camisa: Thor',
            'precio' => 82000,
            'imagen' => 'https://http2.mlstatic.com/D_NQ_NP_979710-MCO47091233890_082021-W.jpg'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Camisa: Spiderman',
            'descripcion' => 'Camisa: Spiderman',
            'precio' => 82000,
            'imagen' => 'https://comicstotal.com/wp-content/uploads/2017/09/spiderman-roja1.jpg'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Camisa: Hulk',
            'descripcion' => 'Camisa: Hulk',
            'precio' => 82000,
            'imagen' => ''
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Camisa: Ark',
            'descripcion' => 'Camisa: Ark',
            'precio' => 82000,
            'imagen' => ''
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Saco: Nike',
            'descripcion' => 'Saco: Nike',
            'precio' => 129000,
            'imagen' => 'https://falabella.scene7.com/is/image/FalabellaCO/8265206_1?wid=800&hei=800&qlt=70'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Saco: Adidas',
            'descripcion' => 'Saco: Adidas',
            'precio' => 129000,
            'imagen' => 'https://falabella.scene7.com/is/image/FalabellaCO/3739358_1?wid=800&hei=800&qlt=70'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos puma',
            'descripcion' => 'Zapatos puma',
            'precio' => 122000,
            'imagen' => ''
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos nike',
            'descripcion' => 'Zapatos nike',
            'precio' => 122000,
            'imagen' => ''
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Camisa: Clash Royale',
            'descripcion' => 'Camisa: Clash Royale',
            'precio' => 82000,
            'imagen' => 'https://i.pinimg.com/originals/bb/db/63/bbdb630078581394f0a0ecc5d6fb4955.jpg'
        ]);
    }
}
