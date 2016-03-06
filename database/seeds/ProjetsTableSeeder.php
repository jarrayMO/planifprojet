<?php

use Illuminate\Database\Seeder;

class ProjetsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('projets')->delete();

        $projets = array(
            ['id' => 1, 'nom' => 'Maison', 'dateFinProj' => '2016-08-03', 'commentaireProjet' => 'On a le temps', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'nom' => 'Logiciel de gestion', 'dateFinProj' => '2015-02-17', 'commentaireProjet' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'nom' => 'Application web', 'dateFinProj' => '2014-05-28', 'commentaireProjet' => 'En retard', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('projets')->insert($projets);
    }

}
