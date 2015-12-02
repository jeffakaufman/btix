<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NFLTeam extends Model
{
    //fix table name
    protected $table = 'nfl_team';
    protected $fillable = ['body', 'user_id'];
    
    public function nflTeamVenue(){
        return $this->belongsTo('App\NFLTeamVenue','venue_id');
    }

}
    
