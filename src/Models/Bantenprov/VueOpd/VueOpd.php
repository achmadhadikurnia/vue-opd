<?php

namespace Bantenprov\VueOpd\Models\Bantenprov\VueOpd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VueOpd extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $table = 'vue_opds';
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'kunker',
        'name',
        'kunker_sinjab',
        'kunker_simral',
        'levelunker',
        'njab',
        'npej',
    ];
}
