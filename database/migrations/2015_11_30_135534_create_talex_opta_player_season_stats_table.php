<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexOptaPlayerSeasonStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_opta_player_season_stats', function(Blueprint $table)
		{
			$table->dateTime('event_time');
			$table->string('opta_team_id', 10);
			$table->string('opta_player_id', 10);
			$table->integer('opta_season_id');
			$table->integer('opta_competition_id');
			$table->string('opta_position', 10)->nullable();
			$table->integer('opta_shirtNumber')->nullable();
			$table->integer('opta_aerial_duels')->default(0);
			$table->integer('opta_aerial_duels_lost')->default(0);
			$table->integer('opta_aerial_duels_won')->default(0);
			$table->integer('opta_appearances')->default(0);
			$table->integer('opta_assists_intentional')->default(0);
			$table->integer('opta_attempts_from_set_pieces')->default(0);
			$table->integer('opta_backward_passes')->default(0);
			$table->integer('opta_blocked_shots')->default(0);
			$table->integer('opta_blocks')->default(0);
			$table->integer('opta_catches')->default(0);
			$table->integer('opta_clean_sheets')->default(0);
			$table->integer('opta_clearances_off_the_line')->default(0);
			$table->integer('opta_corners_taken_incl_short_corners')->default(0);
			$table->integer('opta_corners_won')->default(0);
			$table->integer('opta_crosses_not_claimed')->default(0);
			$table->float('opta_crossing_accuracy', 10, 0)->default(0);
			$table->integer('opta_drops')->default(0);
			$table->integer('opta_duels')->default(0);
			$table->integer('opta_duels_lost')->default(0);
			$table->integer('opta_duels_won')->default(0);
			$table->integer('opta_forward_passes')->default(0);
			$table->integer('opta_foul_attempted_tackle')->default(0);
			$table->integer('opta_foul_won_penalty')->default(0);
			$table->integer('opta_gk_successful_distribution')->default(0);
			$table->integer('opta_gk_unsuccessful_distribution')->default(0);
			$table->integer('opta_games_played')->default(0);
			$table->integer('opta_goal_assists')->default(0);
			$table->float('opta_goal_conversion', 10, 0)->default(0);
			$table->integer('opta_goalkeeper_smother')->default(0);
			$table->integer('opta_goals')->default(0);
			$table->integer('opta_goals_conceded')->default(0);
			$table->integer('opta_goals_conceded_inside_box')->default(0);
			$table->integer('opta_goals_conceded_outside_box')->default(0);
			$table->integer('opta_goals_from_inside_box')->default(0);
			$table->integer('opta_goals_from_outside_box')->default(0);
			$table->integer('opta_ground_duels')->default(0);
			$table->integer('opta_ground_duels_lost')->default(0);
			$table->integer('opta_ground_duels_won')->default(0);
			$table->integer('opta_handballs_conceded')->default(0);
			$table->integer('opta_headed_goals')->default(0);
			$table->integer('opta_hit_woodwork')->default(0);
			$table->integer('opta_index')->default(0);
			$table->integer('opta_interceptions')->default(0);
			$table->integer('opta_key_passes_attempt_assists')->default(0);
			$table->integer('opta_last_man_tackle')->default(0);
			$table->integer('opta_left_foot_goals')->default(0);
			$table->integer('opta_leftside_passes')->default(0);
			$table->integer('opta_offsides')->default(0);
			$table->integer('opta_open_play_passes')->default(0);
			$table->integer('opta_other_goals')->default(0);
			$table->integer('opta_own_goal_scored')->default(0);
			$table->integer('opta_own_goals_accrued')->default(0);
			$table->integer('opta_own_goals_conceded')->default(0);
			$table->float('opta_passing_perc_opp_half', 10, 0)->default(0);
			$table->float('opta_passing_accuracy', 10, 0)->default(0);
			$table->integer('opta_penalties_conceded')->default(0);
			$table->integer('opta_penalties_off_target')->default(0);
			$table->integer('opta_penalties_saved')->default(0);
			$table->integer('opta_penalties_taken')->default(0);
			$table->integer('opta_penalty_goals')->default(0);
			$table->float('opta_possession_percentage', 10, 0)->default(0);
			$table->integer('opta_punches')->default(0);
			$table->integer('opta_putthrough_blocked_distribution')->default(0);
			$table->integer('opta_putthrough_blocked_distribution_won')->default(0);
			$table->integer('opta_recoveries')->default(0);
			$table->integer('opta_red_card_2nd_yellow')->default(0);
			$table->integer('opta_red_cards_2nd_yellow')->default(0);
			$table->integer('opta_right_foot_goals')->default(0);
			$table->integer('opta_rightside_passes')->default(0);
			$table->integer('opta_saves_made')->default(0);
			$table->integer('opta_saves_made_from_inside_box')->default(0);
			$table->integer('opta_saves_made_from_outside_box')->default(0);
			$table->integer('opta_saves_from_penalty')->default(0);
			$table->integer('opta_saves_made_caught')->default(0);
			$table->integer('opta_saves_made_parried')->default(0);
			$table->integer('opta_set_pieces_goals')->default(0);
			$table->float('opta_shooting_accuracy', 10, 0)->default(0);
			$table->integer('opta_shots_off_target_inc_woodwork')->default(0);
			$table->integer('opta_shots_on_conceded_inside_box')->default(0);
			$table->integer('opta_shots_on_conceded_outside_box')->default(0);
			$table->integer('opta_shots_on_target_inc_goals')->default(0);
			$table->integer('opta_starts')->default(0);
			$table->integer('opta_straight_red_cards')->default(0);
			$table->integer('opta_substitute_off')->default(0);
			$table->integer('opta_substitute_on')->default(0);
			$table->integer('opta_successful_corners_into_box')->default(0);
			$table->integer('opta_successful_crosses_and_corners')->default(0);
			$table->integer('opta_successful_crosses_open_play')->default(0);
			$table->integer('opta_successful_dribbles')->default(0);
			$table->integer('opta_successful_launches')->default(0);
			$table->integer('opta_successful_lay_offs')->default(0);
			$table->integer('opta_successful_long_passes')->default(0);
			$table->integer('opta_successful_open_play_passes')->default(0);
			$table->integer('opta_successful_passes_opposition_half')->default(0);
			$table->integer('opta_successful_passes_own_half')->default(0);
			$table->integer('opta_successful_short_passes')->default(0);
			$table->float('opta_tackle_success', 10, 0)->default(0);
			$table->integer('opta_tackles_lost')->default(0);
			$table->integer('opta_tackles_won')->default(0);
			$table->integer('opta_through_balls')->default(0);
			$table->integer('opta_throw_ins_to_opposition_player')->default(0);
			$table->integer('opta_throw_ins_to_own_player')->default(0);
			$table->integer('opta_time_played')->default(0);
			$table->integer('opta_total_clearances')->default(0);
			$table->integer('opta_total_fouls_conceded')->default(0);
			$table->integer('opta_total_fouls_won')->default(0);
			$table->integer('opta_total_losses_of_possession')->default(0);
			$table->integer('opta_total_passes')->default(0);
			$table->integer('opta_total_red_cards')->default(0);
			$table->integer('opta_total_shots')->default(0);
			$table->integer('opta_total_successful_passes_excl_crosses_and_corners')->default(0);
			$table->integer('opta_total_tackles')->default(0);
			$table->integer('opta_total_unsuccessful_passes_excl_crosses_and_corners')->default(0);
			$table->integer('opta_touches')->default(0);
			$table->integer('opta_unsuccessful_corners_into_box')->default(0);
			$table->integer('opta_unsuccessful_crosses_and_corners')->default(0);
			$table->integer('opta_unsuccessful_crosses_open_play')->default(0);
			$table->integer('opta_unsuccessful_dribbles')->default(0);
			$table->integer('opta_unsuccessful_launches')->default(0);
			$table->integer('opta_unsuccessful_long_passes')->default(0);
			$table->integer('opta_unsuccessful_passes_opposition_half')->default(0);
			$table->integer('opta_unsuccessful_passes_own_half')->default(0);
			$table->integer('opta_unsuccessful_short_passes')->default(0);
			$table->integer('opta_unsuccessful_lay_offs')->default(0);
			$table->integer('opta_yellow_cards')->default(0);
			$table->integer('opta_shirt_number')->nullable();
			$table->primary(['event_time','opta_player_id','opta_team_id','opta_season_id','opta_competition_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_opta_player_season_stats');
	}

}
