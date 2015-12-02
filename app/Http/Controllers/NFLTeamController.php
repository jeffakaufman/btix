<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NFLTeamVenue;
use App\NFLTeam;

class NFLTeamController extends Controller
{
    
    public function index(Request $request)
    {    
        $search_term = $request->input('search');
        $limit = $request->input('limit')?$request->input('limit'):500;
 
        if ($search_term)
        {
            $nflTeams = NFLTeam::orderBy('id', 'DESC')->where('name', 'LIKE', "%$search_term%")->with(
            array('NFLTeamVenue'=>function($query){
                $query->select('id','name');
            })
            )->select('id', 'name', 'venue_id') ->paginate($limit); 
 
            $nflTeams->appends(array(
                'search' => $search_term,
                'limit' => $limit
            ));
        }
    	else
        {
            	$nflTeams = NFLTeam::orderBy('id', 'DESC')->with(
            	array('NFLTeamVenue'=>function($query){
            	    $query->select('id','name');
            	})
            	)->select('id', 'name', 'venue_id')->paginate($limit); 
 
            	$nflTeams->appends(array(            
            	    'limit' => $limit
            	));
        }
        
        return \Response::json($this->transformCollection($nflTeams), 200);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //       
        $nflTeam = NFLTeam::with(
            array('NFLTeamVenue'=>function($query){
                $query->select('id','name');
            })
            )->find($id);
 
        if(!$nflTeam){
            return \Response::json([
                'error' => [
                    'message' => 'Team does not exist'
                ]
            ], 404);
        }
 
         // get previous joke id
        $previous = NFLTeam::where('id', '<', $nflTeam->id)->max('id');
 
        // get next joke id
        $next = NFLTeam::where('id', '>', $nflTeam->id)->min('id');        
 
        return \Response::json([
            'previous_nflTeam_id'=> $previous,
            'next_nflTeam_id'=> $next,
            'data' => $this->transform($nflTeam)
        ], 200);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    private function transformCollection($nflTeams){
    	$nflTeamsArray = $nflTeams->toArray();
        return [
            'total' => $nflTeamsArray['total'],
            'per_page' => intval($nflTeamsArray['per_page']),
            'current_page' => $nflTeamsArray['current_page'],
            'last_page' => $nflTeamsArray['last_page'],
            'next_page_url' => $nflTeamsArray['next_page_url'],
            'prev_page_url' => $nflTeamsArray['prev_page_url'],
            'from' => $nflTeamsArray['from'],
            'to' =>$nflTeamsArray['to'],
            'data' => array_map([$this, 'transformCollectionItem'], $nflTeamsArray['data'])
        ];
    }
    
    
    private function transformCollectionItem($nflTeam){
    	return [
    		'nflTeam_id' => $nflTeam['id'],
           	'nflTeamName' => $nflTeam['name'],
           	'venue_id' => $nflTeam['venue_id'],
           	'venue_name' => $nflTeam['n_f_l_team_venue']['name']
        ];
	}
    
    private function transform($nflTeam){
    	return [
    		'nflTeam_id' => $nflTeam['id'],
           	'nflTeamName' => $nflTeam['name'],
           	'venue_id' => $nflTeam['venue_id'],
           	'venue_name' => $nflTeam['nflTeamVenue']['name']
        ];
}
    
}
