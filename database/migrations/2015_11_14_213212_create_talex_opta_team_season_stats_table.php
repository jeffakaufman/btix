<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTalexOptaTeamSeasonStatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('talex_opta_team_season_stats', function(Blueprint $table)
		{
			$table->dateTime('event_time');
			$table->string('opta_team_id', 10);
			$table->integer('opta_season_id');
			$table->integer('opta_competition_id');
			$table->integer('opta_aerial_duels')->nullable();
			$table->integer('opta_aerial_duels_lost')->nullable();
			$table->integer('opta_aerial_duels_won')->nullable();
			$table->integer('opta_appearances')->nullable();
			$table->integer('opta_assists_intentional')->nullable();
			$table->integer('opta_attempts_from_set_pieces')->nullable();
			$table->integer('opta_backward_passes')->nullable();
			$table->integer('opta_blocked_shots')->nullable();
			$table->integer('opta_blocks')->nullable();
			$table->integer('opta_catches')->nullable();
			$table->integer('opta_clean_sheets')->nullable();
			$table->integer('opta_clearances_off_the_line')->nullable();
			$table->integer('opta_corners_taken_incl_short_corners')->nullable();
			$table->integer('opta_corners_won')->nullable();
			$table->integer('opta_crosses_not_claimed')->nullable();
			$table->float('opta_crossing_accuracy', 10, 0)->nullable();
			$table->integer('opta_drops')->nullable();
			$table->integer('opta_duels')->nullable();
			$table->integer('opta_duels_lost')->nullable();
			$table->integer('opta_duels_won')->nullable();
			$table->integer('opta_forward_passes')->nullable();
			$table->integer('opta_foul_attempted_tackle')->nullable();
			$table->integer('opta_foul_won_penalty')->nullable();
			$table->integer('opta_gk_successful_distribution')->nullable();
			$table->integer('opta_gk_unsuccessful_distribution')->nullable();
			$table->integer('opta_games_played')->nullable();
			$table->integer('opta_goal_assists')->nullable();
			$table->float('opta_goal_conversion', 10, 0)->nullable();
			$table->integer('opta_goalkeeper_smother')->nullable();
			$table->integer('opta_goals')->nullable();
			$table->integer('opta_goals_conceded')->nullable();
			$table->integer('opta_goals_conceded_inside_box')->nullable();
			$table->integer('opta_goals_conceded_outside_box')->nullable();
			$table->integer('opta_goals_from_inside_box')->nullable();
			$table->integer('opta_goals_from_outside_box')->nullable();
			$table->integer('opta_ground_duels')->nullable();
			$table->integer('opta_ground_duels_lost')->nullable();
			$table->integer('opta_ground_duels_won')->nullable();
			$table->integer('opta_handballs_conceded')->nullable();
			$table->integer('opta_headed_goals')->nullable();
			$table->integer('opta_hit_woodwork')->nullable();
			$table->integer('opta_index')->nullable();
			$table->integer('opta_interceptions')->nullable();
			$table->integer('opta_key_passes_attempt_assists')->nullable();
			$table->integer('opta_last_man_tackle')->nullable();
			$table->integer('opta_left_foot_goals')->nullable();
			$table->integer('opta_leftside_passes')->nullable();
			$table->integer('opta_offsides')->nullable();
			$table->integer('opta_open_play_passes')->nullable();
			$table->integer('opta_other_goals')->nullable();
			$table->integer('opta_own_goal_scored')->nullable();
			$table->integer('opta_own_goals_accrued')->nullable();
			$table->integer('opta_own_goals_conceded')->nullable();
			$table->float('opta_passing_perc_opp_half', 10, 0)->nullable();
			$table->float('opta_passing_accuracy', 10, 0)->nullable();
			$table->integer('opta_penalties_conceded')->nullable();
			$table->integer('opta_penalties_off_target')->nullable();
			$table->integer('opta_penalties_saved')->nullable();
			$table->integer('opta_penalties_taken')->nullable();
			$table->integer('opta_penalty_goals')->nullable();
			$table->float('opta_possession_percentage', 10, 0)->nullable();
			$table->integer('opta_punches')->nullable();
			$table->integer('opta_putthrough_blocked_distribution')->nullable();
			$table->integer('opta_putthrough_blocked_distribution_won')->nullable();
			$table->integer('opta_recoveries')->nullable();
			$table->integer('opta_red_card_2nd_yellow')->nullable();
			$table->integer('opta_red_cards_2nd_yellow')->nullable();
			$table->integer('opta_right_foot_goals')->nullable();
			$table->integer('opta_rightside_passes')->nullable();
			$table->integer('opta_saves_made')->nullable();
			$table->integer('opta_saves_made_from_inside_box')->nullable();
			$table->integer('opta_saves_made_from_outside_box')->nullable();
			$table->integer('opta_saves_from_penalty')->nullable();
			$table->integer('opta_saves_made_caught')->nullable();
			$table->integer('opta_saves_made_parried')->nullable();
			$table->integer('opta_set_pieces_goals')->nullable();
			$table->float('opta_shooting_accuracy', 10, 0)->nullable();
			$table->integer('opta_shots_off_target_inc_woodwork')->nullable();
			$table->integer('opta_shots_on_conceded_inside_box')->nullable();
			$table->integer('opta_shots_on_conceded_outside_box')->nullable();
			$table->integer('opta_shots_on_target_inc_goals')->nullable();
			$table->integer('opta_starts')->nullable();
			$table->integer('opta_straight_red_cards')->nullable();
			$table->integer('opta_substitute_off')->nullable();
			$table->integer('opta_substitute_on')->nullable();
			$table->integer('opta_successful_corners_into_box')->nullable();
			$table->integer('opta_successful_crosses_and_corners')->nullable();
			$table->integer('opta_successful_crosses_open_play')->nullable();
			$table->integer('opta_successful_dribbles')->nullable();
			$table->integer('opta_successful_launches')->nullable();
			$table->integer('opta_successful_lay_offs')->nullable();
			$table->integer('opta_successful_long_passes')->nullable();
			$table->integer('opta_successful_open_play_passes')->nullable();
			$table->integer('opta_successful_passes_opposition_half')->nullable();
			$table->integer('opta_successful_passes_own_half')->nullable();
			$table->integer('opta_successful_short_passes')->nullable();
			$table->float('opta_tackle_success', 10, 0)->nullable();
			$table->integer('opta_tackles_lost')->nullable();
			$table->integer('opta_tackles_won')->nullable();
			$table->integer('opta_through_balls')->nullable();
			$table->integer('opta_throw_ins_to_opposition_player')->nullable();
			$table->integer('opta_throw_ins_to_own_player')->nullable();
			$table->integer('opta_time_played')->nullable();
			$table->integer('opta_total_clearances')->nullable();
			$table->integer('opta_total_fouls_conceded')->nullable();
			$table->integer('opta_total_fouls_won')->nullable();
			$table->integer('opta_total_losses_of_possession')->nullable();
			$table->integer('opta_total_passes')->nullable();
			$table->integer('opta_total_red_cards')->nullable();
			$table->integer('opta_total_shots')->nullable();
			$table->integer('opta_total_successful_passes_excl_crosses_and_corners')->nullable();
			$table->integer('opta_total_tackles')->nullable();
			$table->integer('opta_total_unsuccessful_passes_excl_crosses_and_corners')->nullable();
			$table->integer('opta_touches')->nullable();
			$table->integer('opta_unsuccessful_corners_into_box')->nullable();
			$table->integer('opta_unsuccessful_crosses_and_corners')->nullable();
			$table->integer('opta_unsuccessful_crosses_open_play')->nullable();
			$table->integer('opta_unsuccessful_dribbles')->nullable();
			$table->integer('opta_unsuccessful_launches')->nullable();
			$table->integer('opta_unsuccessful_long_passes')->nullable();
			$table->integer('opta_unsuccessful_passes_opposition_half')->nullable();
			$table->integer('opta_unsuccessful_passes_own_half')->nullable();
			$table->integer('opta_unsuccessful_short_passes')->nullable();
			$table->integer('opta_unsuccessful_lay_offs')->nullable();
			$table->integer('opta_yellow_cards')->nullable();
			$table->primary(['event_time','opta_team_id','opta_season_id','opta_competition_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('talex_opta_team_season_stats');
	}

}
