<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptaSocplayerStats extends Model
{
    //fix table name
    protected $table = 'opta_socplayer_stats';
   // protected $fillable = ['body', 'opta_id'];
    
    public function talexOptaPlayer(){
        return $this->belongsTo('App\TalexOptaPlayer','opta_id');
    }
    
    
}
