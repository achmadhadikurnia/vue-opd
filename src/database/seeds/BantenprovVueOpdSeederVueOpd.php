<?php

/* Require */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

/* Models */
use Bantenprov\VueOpd\Models\Bantenprov\VueOpd\VueOpd;

class BantenprovVueOpdSeederVueOpd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $model      = new VueOpd;
        $file       = file_get_contents(public_path('json/bantenprov/vue-opd/vue-opd-data.json'));
        $json       = json_decode($file, true);
        $vue_opds   = array_get($json, '2.data');

        $model::truncate();

        DB::table($model->getTable())->insert(
            $vue_opds
        );
    }
}
