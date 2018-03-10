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

        $file       = file_get_contents(public_path('json/bantenprov/vue-opd/vue-opd-data.json'));
        $json       = json_decode($file, true);
        $vue_opds   = array_get($json, '2.data');

        foreach ($vue_opds as $vue_opd) {
            $model = VueOpd::updateOrCreate(
                [
                    'id' => $vue_opd['id'],
                ],
                [
                    'id' => $vue_opd['id'],
                    'kunker' => $vue_opd['kunker'],
                    'name' => $vue_opd['name'],
                    'kunker_sinjab' => $vue_opd['kunker_sinjab'],
                    'kunker_simral' => $vue_opd['kunker_simral'],
                    'levelunker' => $vue_opd['levelunker'],
                    'njab' => $vue_opd['njab'],
                    'npej' => $vue_opd['npej'],
                    '_lft' => $vue_opd['_lft'],
                    '_rgt' => $vue_opd['_rgt'],
                    'parent_id' => $vue_opd['parent_id'],
                ]
            );
            $model->save();
        }
	}
}
