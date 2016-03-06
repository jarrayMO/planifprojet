<?php

use Illuminate\Database\Seeder;

class TachesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('taches')->delete();

        $taches = array(
            ['id' => 1, 'nom' => 'Peinture Mur', 'dateFinTache' => '2016-08-24', 'projet_id' => 1, 'termine' => false, 'description' => 'Peindre en blanc les murs', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nom' => 'Peinture Plafond', 'dateFinTache' => '2015-12-28', 'projet_id' => 1, 'termine' => false, 'description' => 'Peindre le plafond', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nom' => 'Jardin', 'dateFinTache' => '2014-06-10', 'projet_id' => 1, 'termine' => false, 'description' => 'Aménager le jardin', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'nom' => 'Chambres', 'dateFinTache' => '2013-01-03', 'projet_id' => 1, 'termine' => true, 'description' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'nom' => 'Salon', 'dateFinTache' => '2016-03-05', 'projet_id' => 1, 'termine' => true, 'description' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'nom' => 'Analyse commerciale', 'dateFinTache' => '2015-05-08', 'projet_id' => 2, 'termine' => true, 'description' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'nom' => 'Conception développement', 'dateFinTache' => '2016-10-15', 'projet_id' => 2, 'termine' => false, 'description' => 'Conception du logiciel', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('taches')->insert($taches);
    }

}
