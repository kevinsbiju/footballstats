<?php include 'footballdb.php';

// Insert a new player
if (isset($_POST['addPlayer'])) {
    $playerid = $_POST['playerID'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $age = $_POST['age'];
    $position1 = $_POST['position1'];
    $position2 = $_POST['position2'];
    $position3 = $_POST['position3'];
    $apps = $_POST['apps'];
    $goals = $_POST['goals'];
    $assists = $_POST['assists'];
    $tackles = $_POST['tackles'];
    $interceptions = $_POST['interceptions'];
    $clean_sheets = $_POST['clean_sheets'];
    $saves = $_POST['saves'];
    $squad_number = $_POST['squad_number'];
    $fouls = $_POST['fouls'];
    $team_id = $_POST['team_id'];
    $yellow_card = $_POST['yellow_card'];
    $red_card = $_POST['red_card'];
    $nationality = $_POST['nationality'];

    $sql = "INSERT INTO player (playerID, fName, lName, age, position1, position2, position3, apps, goals, assists, tackles, interceptions, clean_sheets, saves, squad_number, fouls, team_id, yellow_card, red_card, nationality) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ississsiiiiiiiiiiiis", $playerid, $fName, $lName, $age, $position1, $position2, $position3, $apps, $goals, $assists, $tackles, $interceptions, $clean_sheets, $saves, $squad_number, $fouls, $team_id, $yellow_card, $red_card, $nationality);
    
    if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Player added successfully!"]);
} else {
    echo json_encode(["success" => false, "message" => "Error adding player: " . $stmt->error]);
}

}

// Insert new league
if (isset($_POST['addLeague'])) {
    $leagueid = $_POST['leagueID'];
    $league_name = $_POST['league_name'];
    $number_of_clubs = $_POST['number_of_clubs'];
    $top_scorer_id = $_POST['top_scorer_id'];
    $top_assister_id = $_POST['top_assister_id'];
    $most_red_card = $_POST['most_red_card'];
    $league_leader_id = $_POST['league_leader_id'];
    $best_goal_keeper_id = $_POST['best_goal_keeper_id'];
    $country = $_POST['country'];

    $sql = "INSERT INTO league (leagueID, league_name, number_of_clubs, top_scorer_id, top_assister_id, most_red_card, league_leader_id, best_goal_keeper_id, country) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isiiiiiis", $leagueid, $league_name, $number_of_clubs, $top_scorer_id, $top_assister_id, $most_red_card, $league_leader_id, $best_goal_keeper_id, $country);
    
    if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "League added successfully!"]);
} else {
    echo json_encode(["success" => false, "message" => "Error adding league: " . $stmt->error]);
}

}

// Insert a new club
if (isset($_POST['addClub'])) {
    $club_id = $_POST['club_id'];
    $club_name = $_POST['club_name'];
    $number_of_players = $_POST['number_of_players'];
    $goals_scored = $_POST['goals_scored'];
    $clean_sheets = $_POST['clean_sheets'];
    $fouls = $_POST['fouls'];
    $captain_id = $_POST['captain_id'];
    $matches_played = $_POST['matches_played'];
    $wins = $_POST['wins'];
    $losses = $_POST['losses'];
    $draws = $_POST['draws'];
    $yellow_card = $_POST['yellow_card'];
    $red_card = $_POST['red_card'];
    $goals_conceded = $_POST['goals_conceded'];
    $league_id = $_POST['league_id'];
    $stadium = $_POST['stadium'];

    $sql = "INSERT INTO club (club_id, club_name, number_of_players, goals_scored, clean_sheets, fouls, captain_id, matches_played, wins, losses, draws, yellow_card, red_card, goals_conceded, league_id, stadium) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isiiiiiiiisiiisi", $club_id, $club_name, $number_of_players, $goals_scored, $clean_sheets, $fouls, $captain_id, $matches_played, $wins, $losses, $draws, $yellow_card, $red_card, $goals_conceded, $league_id, $stadium);
    
    if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Club added successfully!"]);
} else {
    echo json_encode(["success" => false, "message" => "Error adding club: " . $stmt->error]);
}

}

// Insert a match result
if (isset($_POST['addMatch'])) {
    $matchid = $_POST['matchID'];
    $team_home = $_POST['team_home'];
    $team_away = $_POST['team_away'];
    $h_goals = $_POST['h_goals'];
    $a_goals = $_POST['a_goals'];
    $man_of_the_match = $_POST['man_of_the_match'];
    $match_date = $_POST['match_date'];
    $league_id = $_POST['league_id'];
    $venue = $_POST['venue'];

    $sql = "INSERT INTO matches (matchID, team_home, team_away, h_goals, a_goals, man_of_the_match, match_date, league_id, venue) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiiiiisis", $matchid, $team_home, $team_away, $h_goals, $a_goals, $man_of_the_match, $match_date, $league_id, $venue);
    
    if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Match added successfully!"]);
} else {
    echo json_encode(["success" => false, "message" => "Error adding match: " . $stmt->error]);
}

}

?>
