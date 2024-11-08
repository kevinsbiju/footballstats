<?php include 'footballdb.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$match = "SELECT * FROM matches";
$mtres = $conn->query($match);

if ($mtres->num_rows > 0) {
    while($row = $mtres->fetch_assoc()) {
        echo "<tr>
                <td>{$row['matchid']}</td>
                <td>{$row['team_home']}</td>
                <td>{$row['team_away']}</td>
                <td>{$row['h_goals']}</td>
                <td>{$row['a_goals']}</td>
                <td>{$row['man_of_the_match']}</td>
                <td>{$row['match_date']}</td>
                <td>{$row['league_id']}</td>
                <td>{$row['venue']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No matches found</td></tr>";
}

