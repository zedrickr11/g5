<?php

use Illuminate\Database\Seeder;
use App\NaturalezaPeligro;

class NaturalezaPeligroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Corrosivo"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Tóxico"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Inflamable"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Combustible"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Asfixiante"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Irritante"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Fisicos"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Radiación"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Piso resbaladizo"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Choque eléctrico"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Alta presión"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Alta temperatura"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Ruido excesivo"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Quemaduras"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Caída del ejecutante"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Caída de objetos"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Proyección de fragmentos o partículas"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Exceso de peso"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Caídas de diferentes alturas"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Presencia de polvo"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Presencia de vapores"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Presencia de gases y líquidos contaminantes"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Desechos bioinfecciosos"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Enfermedades infectocongiosas"
      ]);
      NaturalezaPeligro::create([
        'naturaleza_peligro' => "Riesgos ambientales"
      ]);
    }
}
