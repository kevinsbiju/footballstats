<?php

include 'footballdb.php'; 

if (isset($_POST['league_id'])) {
    // Sanitize and store the league ID input
    $league_id = intval($_POST['league_id']);

    $topAssisterQuery = "
            SELECT fname, lname, assists
            FROM player
            WHERE playerid IN (SELECT top_assister_id FROM league WHERE leagueid=$league_id)
            ORDER BY assists DESC
            LIMIT 1
        ";
    $topAssisterResult = $conn->query($topAssisterQuery); 
    
    if ($topAssisterResult && $topAssisterResult->num_rows > 0) {
        $topAssister = $topAssisterResult->fetch_assoc();
        echo "<h2>Top Assister</h2>";
        echo "<p>Name: " . $topAssister['fname'] . " " . $topAssister['lname'] . "</p>";
        echo "<p>Assists: " . $topAssister['assists'] . "</p>";
    } else {
        echo "<p>No top assister found for this league.</p>";
    }
}
else {
        echo "<p>Please provide a league ID.</p>";
}