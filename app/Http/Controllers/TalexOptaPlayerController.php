<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TalexOptaPlayer;
use App\OptaSocplayerStats;

class TalexOptaPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$jokes = TalexOptaPlayer::all(); //Not a good idea
    //return $jokes;
    
		$search_term = $request->input('search');
		$limit = $request->input('limit')?$request->input('limit'):500;
 
        if ($search_term)
        {
            $talexOptaPlayer = TalexOptaPlayer::orderBy('name')->where('name', 'LIKE', "%$search_term%")->with(
            array('OptaSocplayerStats'=>function($query){
                $query->select('opta_id','season','goals','team_name')->orderBy('season', 'desc');
            })
            )->select('opta_id', 'name') ->paginate($limit); 
 
            $talexOptaPlayer->appends(array(
                'search' => $search_term,
                'limit' => $limit
            ));
        }
    	else
        {
    		
    		$talexOptaPlayer = TalexOptaPlayer::orderBy('name')->with(
        	array('OptaSocplayerStats'=>function($query){
        		$query->select('opta_id','season','goals','team_name')->orderBy('season', 'desc');
        	})
        	)->select('opta_id', 'name')->paginate($limit); 

			$talexOptaPlayer->appends(array(            
        		'limit' => $limit
        	));
        }
        
        //return $talexOptaPlayer;
        
        return \Response::json($this->transformCollection($talexOptaPlayer), 200);
    
    
    
    
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
    
	private function transformCollection($talexOptaPlayers){
    	$talexOptaPlayersArray = $talexOptaPlayers->toArray();
        return [
            'total' => $talexOptaPlayersArray['total'],
            'per_page' => intval($talexOptaPlayersArray['per_page']),
            'current_page' => $talexOptaPlayersArray['current_page'],
            'last_page' => $talexOptaPlayersArray['last_page'],
            'next_page_url' => $talexOptaPlayersArray['next_page_url'],
            'prev_page_url' => $talexOptaPlayersArray['prev_page_url'],
            'from' => $talexOptaPlayersArray['from'],
            'to' =>$talexOptaPlayersArray['to'],
            'data' => array_map([$this, 'transformCollectionItem'], $talexOptaPlayersArray['data'])
        ];
    }
    
    
    private function transformCollectionItem($talexOptaPlayer){
    	return [
    		'opta_id' => $talexOptaPlayer['opta_id'],
           	'optaPlayerName' => $talexOptaPlayer['name'],
           	'optaPlayerStats' => $talexOptaPlayer['opta_socplayer_stats']
        ];
	}
    
    private function transform($talexOptaPlayer){
    	return [
    		'opta_id' => $talexOptaPlayer['opta_id'],
           	'optaPlayerName' => $talexOptaPlayer['name'],
           	'optaPlayerStats' => $talexOptaPlayer['opta_socplayer_stats']
        ];
    }
}
