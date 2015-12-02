<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TalexOptaPlayer extends Model
{
    protected $table = 'talex_opta_player';
    
    public function optaSocplayerStats(){
        return $this->hasMany('App\OptaSocplayerStats','opta_id','opta_id');
    }
}
