<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexOptaSeasonStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_opta_season_stats', function(Blueprint $table)
		{
			$table->string('opta_id', 10)->default('')->primary();
			$table->integer('total_Shots')->nullable();
			$table->integer('Possession_Percentage')->nullable();
			$table->integer('Total_Fouls_Won')->nullable();
			$table->integer('Unsuccessful_Dribbles')->nullable();
			$table->integer('Put_Through_Blocked_Distribution')->nullable();
			$table->integer('Goals')->nullable();
			$table->integer('Headed_Goals')->nullable();
			$table->integer('Unsuccessful_layoffs')->nullable();
			$table->integer('Total_Passes')->nullable();
			$table->float('Crossing_Accuracy', 10, 0)->nullable();
			$table->integer('Throw_Ins_to_Opposition_Player')->nullable();
			$table->integer('Total_Unsuccessful_Passes')->nullable();
			$table->integer('Shots_On_Conceded_Inside_Box')->nullable();
			$table->integer('Throw_Ins_to_Own_Player')->nullable();
			$table->integer('Shots_On_Target')->nullable();
			$table->integer('Clean_Sheets')->nullable();
			$table->float('Passing_Perc_Opp_Half', 10, 0)->nullable();
			$table->integer('Successful_Short_Passes')->nullable();
			$table->integer('Tackles_Lost')->nullable();
			$table->integer('Duels_won')->nullable();
			$table->integer('Blocks')->nullable();
			$table->integer('Goals_Conceded_Outside_Box')->nullable();
			$table->integer('Total_Clearances')->nullable();
			$table->integer('Aerial_Duels_won')->nullable();
			$table->integer('Shots_On_Conceded_Outside_Box')->nullable();
			$table->integer('Games_Played')->nullable();
			$table->integer('Yellow_Cards')->nullable();
			$table->float('Passing_Accuracy', 10, 0)->nullable();
			$table->integer('Goals_Conceded_Inside_Box')->nullable();
			$table->integer('Successful_Open_Play_Passes')->nullable();
			$table->integer('Ground_Duels_won')->nullable();
			$table->integer('Ground_Duels')->nullable();
			$table->integer('Corners_Won')->nullable();
			$table->integer('Goal_Assists')->nullable();
			$table->integer('Unsuccessful_Launches')->nullable();
			$table->integer('Successful_Layoffs')->nullable();
			$table->integer('Total_Fouls_Conceded')->nullable();
			$table->integer('Unsuccessful_Corners_into_Box')->nullable();
			$table->integer('Last_Man_Tackle')->nullable();
			$table->integer('GK_Successful_Distribution')->nullable();
			$table->integer('Successful_Passes_Opposition_Half')->nullable();
			$table->integer('Unsuccessful_Short_Passes')->nullable();
			$table->integer('Interceptions')->nullable();
			$table->integer('Goals_from_Inside_Box')->nullable();
			$table->float('Goal_Conversion', 10, 0)->nullable();
			$table->float('Tackle_Success', 10, 0)->nullable();
			$table->integer('Duels')->nullable();
			$table->integer('Unsuccessful_Passes_Own_Half')->nullable();
			$table->integer('Offsides')->nullable();
			$table->integer('Aerial_Duels')->nullable();
			$table->integer('Left_Foot_Goals')->nullable();
			$table->integer('Successful_Crosses_open_play')->nullable();
			$table->integer('Open_Play_Passes')->nullable();
			$table->integer('Right_Foot_Goals')->nullable();
			$table->integer('Unsuccessful_Passes_Opposition_Half')->nullable();
			$table->integer('Foul_Attempted_Tackle')->nullable();
			$table->integer('Successful_Long_Passes')->nullable();
			$table->integer('Successful_Crosses_Corners')->nullable();
			$table->integer('Catches')->nullable();
			$table->integer('Key_Passes_Attempt_Assists')->nullable();
			$table->integer('Goals_Conceded')->nullable();
			$table->float('Shooting_Accuracy', 10, 0)->nullable();
			$table->integer('Corners_Taken')->nullable();
			$table->integer('Unsuccessful_Crosses_open_play')->nullable();
			$table->integer('Clearances_Off_the_Line')->nullable();
			$table->integer('Duels_lost')->nullable();
			$table->integer('Total_Successful_Passes')->nullable();
			$table->integer('Put_Through_Blocked_Distribution_Won')->nullable();
			$table->integer('Attempts_from_Set_Pieces')->nullable();
			$table->integer('Unsuccessful_Long_Passes')->nullable();
			$table->integer('Recoveries')->nullable();
			$table->integer('Successful_Launches')->nullable();
			$table->integer('Aerial_Duels_lost')->nullable();
			$table->integer('Blocked_Shots')->nullable();
			$table->integer('GK_Unsuccessful_Distribution')->nullable();
			$table->integer('Successful_Corners_into_Box')->nullable();
			$table->integer('Tackles_Won')->nullable();
			$table->integer('Successful_Passes_Own_Half')->nullable();
			$table->integer('Total_Losses_Of_Possession')->nullable();
			$table->integer('Successful_Dribbles')->nullable();
			$table->integer('Shots_Off_Target')->nullable();
			$table->integer('Ground_Duels_lost')->nullable();
			$table->integer('Unsuccessful_Crosses_Corners')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_opta_season_stats');
	}

}
