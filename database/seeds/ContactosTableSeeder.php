<?php
 
use Illuminate\Database\Seeder;
 
class ContactosTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('contactos')->delete();
 
        $contactos = array(
            ['id' => 1, 'nombre' => 'Iván', 'apellidos' => 'Díaz Salgado', 'telefono1'=> '985082605', 'telefono2'=> '680385164' , 'fechaNacimiento' => '1980-07-13', 'direccion' => 'Avd del Mar 74, 1ºE CP 33011 Oviedo Asturias' , 'email' => 'ivancletos@gmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nombre' => 'Julian', 'apellidos' => 'Sanchez Garcia', 'telefono1'=> '985231955', 'telefono2'=> '678457398' , 'fechaNacimiento' => '1982-02-23', 'direccion' => 'General Elorza 22, 4ºB CP 33012 Oviedo Asturias' , 'email' => 'julian@gmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime],
           
        );
 
        // Uncomment the below to run the seeder
        DB::table('contactos')->insert($contactos);
    }
 
}
