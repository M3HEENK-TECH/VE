<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comite_soutiens_rows = DB::table("comite_soutiens")->get();
        $data[0] = [
            'nom' => 'Nom 1',
            'prenom' => 'Prenom 1',
            'email' => $comite_soutiens_rows[0]->chef_groupe,
            'pays' => 'Cameroun',
            'ville' => 'Yaounde',
            'telephone' => '684554451',
            'profession' => 'profession',
            'categorie' => 'categorie',
            'idComite_soutien' => $comite_soutiens_rows[0]->idComite_soutien,
        ];
        $data[1] = [
            'nom' => 'Nom 2',
            'prenom' => 'Prenom 2',
            'email' => $comite_soutiens_rows[1]->chef_groupe,
            'pays' => 'Cameroun',
            'ville' => 'Yaounde',
            'telephone' => '648554452',
            'profession' => 'profession',
            'categorie' => 'categorie',
            'idComite_soutien' => $comite_soutiens_rows[1]->idComite_soutien,
        ];
        $data[2] = [
            'nom' => 'Nom 2',
            'prenom' => 'Prenom 2',
            'email' => $comite_soutiens_rows[2]->chef_groupe,
            'pays' => 'Cameroun',
            'ville' => 'Yaounde',
            'telephone' => '646554453',
            'profession' => 'profession',
            'categorie' => 'categorie',
            'idComite_soutien' => $comite_soutiens_rows[2]->idComite_soutien,
        ];
        $data[3] = [
            'nom' => 'Nom 4',
            'prenom' => 'Prenom 4',
            'email' => $comite_soutiens_rows[3]->chef_groupe,
            'pays' => 'Cameroun',
            'ville' => 'Yaounde',
            'telephone' => '644554454',
            'profession' => 'profession',
            'categorie' => 'categorie',
            'idComite_soutien' => $comite_soutiens_rows[3]->idComite_soutien,
        ];
        $data[4] = [
            'nom' => 'Nom 4',
            'prenom' => 'Prenom 4',
            'email' => $comite_soutiens_rows[4]->chef_groupe,
            'pays' => 'Cameroun',
            'ville' => 'Yaounde',
            'telephone' => '694554450',
            'profession' => 'profession',
            'categorie' => 'categorie',
            'idComite_soutien' => $comite_soutiens_rows[4]->idComite_soutien,
        ];
        $data[5] = [
            'nom' => 'Nom 5',
            'prenom' => 'Prenom 5',
            'email' => $comite_soutiens_rows[5]->chef_groupe,
            'pays' => 'Cameroun',
            'ville' => 'Yaounde',
            'telephone' => '674554451',
            'profession' => 'profession',
            'categorie' => 'categorie',
            'idComite_soutien' => $comite_soutiens_rows[5]->idComite_soutien,
        ];
     
        foreach ($data as $datum) {
            $existing_participant = DB::table('participants')
                ->where('email',$datum['email'])
                ->orWhere('idComite_soutien',$datum['idComite_soutien'])
                ->orWhere('telephone',$datum['telephone'])
                ->count();
            if ( empty($existing_participant) ){
                DB::table('participants')->insert($datum);
            }
        }
    }
}
