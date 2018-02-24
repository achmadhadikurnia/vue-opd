<?php

namespace Bantenprov\VueOpd\Models\Bantenprov\VueOpd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Emadadly\LaravelUuid\Uuids;

class VueOpd extends Model
{
    use SoftDeletes;
    use NodeTrait;
    use Uuids;

    public $incrementing = false;
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
