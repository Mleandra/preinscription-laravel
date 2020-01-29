<?php

use Illuminate\Database\Seeder;
use App\Pays;
use App\Region;
use App\Faculte;
use App\Filiere;
use App\Diplome;
use App\Payement;
use App\Niveau;
use App\User;
class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cmr = Pays::create([
            'nom' => 'Cameroun',

        ]);

        $tch = Pays::create([
            'nom' => 'Tchad',

        ]);
        $sen =Pays::create([
            'nom' => 'Senegal',

        ]);
        $mal =Pays::create([
            'nom' => 'Mali',

        ]);
        $con =Pays::create([
            'nom' => 'Congo',

        ]);

        Region::create([
            'nom' => 'Centre',
            'pays_id' => $cmr->id
        ]);

        Region::create([
            'nom' => 'Littoral',
            'pays_id' => $cmr->id
        ]);

        Region::create([
            'nom' => 'Ouest',
            'pays_id' => $cmr->id
        ]);

        Region::create([
            'nom' => 'Nord',
            'pays_id' => $cmr->id
        ]);

        Region::create([
            'nom' => 'Sud',
            'pays_id' => $cmr->id
        ]);

        Region::create([
            'nom' => 'Adamawa',
            'pays_id' => $cmr->id
        ]);

        Region::create([
            'nom' => 'Extreme Nord',
            'pays_id' => $cmr->id
        ]);

        Region::create([
            'nom' => 'Est',
            'pays_id' => $cmr->id
        ]);

        $fs = Faculte::create([
            'nom' => 'Faculte des Sciences'
        ]);

        $falsh = Faculte::create([
            'nom' => 'Faculte des Lettres'
        ]);

        $fse = Faculte::create([
            'nom' => 'Faculte des Science et Education'
        ]);

        Filiere::create([
            'nom' => 'Informatique',
            'faculte_id' => $fs->id
        ]);
        Filiere::create([
            'nom' => 'Mathematique',
            'faculte_id' => $fs->id
        ]);
        Filiere::create([
            'nom' => 'Physique',
            'faculte_id' => $fs->id
        ]);
        Filiere::create([
            'nom' => 'Chimie',
            'faculte_id' => $fs->id
        ]);
        Filiere::create([
            'nom' => 'Art',
            'faculte_id' => $falsh->id
        ]);


        Payement::create([
            'operateurs' => 'UBA',
        ]);

        Payement::create([
            'operateurs' => 'Express Union',
        ]);

        Payement::create([
            'operateurs' => 'MTN Mobile Money',
        ]);

        Diplome::create([
            'type' => 'BACC C',
        ]);
        Diplome::create([
            'type' => 'BACC D',
        ]);
        Diplome::create([
            'type' => 'BACC TI',
        ]);
        Diplome::create([
            'type' => 'BACC A',
        ]);
        Niveau::create([
            'intitule' => 'Baccaleaureat',
        ]);
        Niveau::create([
            'intitule' => 'Licence',
        ]);
        Niveau::create([
            'intitule' => 'Master',
        ]);
        User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.cm',
            'password'=>Hash::make('123456'),
        ]);
    }
}
