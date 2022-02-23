<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DragonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $nombre=['Dragon Ball','Dragon Ball Z','Dragon Ball GT','Dragon Ball Super'];
        $descripcion=['Dragon Ball es la adaptación a anime producida por Toei Animation del manga homónimo del autor Akira Toriyama.',
        'Dragon Ball Z es la secuela de la serie de anime Dragon Ball. La serie es una adaptación de los sucesos posteriores al Arco de la 23.ª Edición del Torneo Mundial de las Artes Marciales del manga de Dragon Ball escrito e ilustrado por Akira Toriyama.',
        'Es un anime creado por el estudio de animación japonesa Toei Animation Company. Es una secuela derivada de Dragon Ball Z cuyo material es producido solamente por Toei Animation. La serie Dragon Ball GT es la más corta de todas, con tan solo 64 episodios.',
        'Dragon Ball SuperTiene lugar después de la batalla contra Pequeño Boo en medio del período de 10 años hacia el Torneo Mundial de las Artes Marciales 28. La historia comienza en el año 778, después de la derrota de Majin-Boo. El actual Arco de los Prisioneros de la Patrulla Galáctica ocurre en el año 780.'];
        $imagen = ['https://i.pinimg.com/originals/77/82/f0/7782f08f34d373c4caf42aee9160a32d.jpg','http://ptanime.com/wp-content/uploads/2015/05/Dragon_Ball_Z_Analise_Imagem_Saga_Majin_Buu.jpg','https://vignette2.wikia.nocookie.net/dbz-dokkanbattle/images/9/95/Black_Star_DB_Saga.png/revision/latest?cb=20160910202651','https://i.pinimg.com/originals/81/57/19/81571933f0d137e2d6c98304e0376311.png'];
        for ($i=0; $i < 4; $i++) { 
            DB::table('sagas')->insert([
                'name' => $nombre[$i],
                'description' => $descripcion[$i],
                'image' => $imagen[$i],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
