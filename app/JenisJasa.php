<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisJasa extends Model
{
    use HasFactory;
    use \App\Traits\TraitUuid;
    protected $table = 'jenis_jasas';

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
