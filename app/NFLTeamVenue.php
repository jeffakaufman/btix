<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NFLTeamVenue extends Model
{
    //fix table name
    protected $table = 'nfl_team_venue';

	public function nflTeams(){
        return $this->hasMany('App\NFLTeam','venue_id','id');
    }
}
