<?php

include 'footballdb.php'; 

if (isset($_POST['league_id'])) {
    // Sanitize and store the league ID input
    $league_id = intval($_POST['league_id']);

    $topScorerQuery = "
            SELECT fname, lname, goals
            FROM player
            WHERE playerid IN (SELECT top_scorer_id FROM league WHERE leagueid=$league_id)
            ORDER BY goals DESC
            LIMIT 1
        ";
    $topScorerResult = $conn->query($topScorerQuery); 

    if ($topScorerResult && $topScorerResult->num_rows > 0) {
        $topScorer = $topScorerResult->fetch_assoc();
        echo "<h2>Top Scorer</h2>";
        echo "<p>Name: " . $topScorer['fname'] . " " . $topScorer['lname'] . "</p>";
        echo "<p>Goals: " . $topScorer['goals'] . "</p>";
    } else {
        echo "<p>No top scorer found for this league.</p>";
    }
    
}
else {
        echo "<p>Please provide a league ID.</p>";
}
