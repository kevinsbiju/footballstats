<?php include 'footballdb.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$club = "SELECT * FROM club ORDER BY club_id";
$clbres = $conn->query($club);

if ($clbres->num_rows > 0) {
    while($row = $clbres->fetch_assoc()) {
        echo "<tr>
                <td>{$row['club_id']}</td>
                <td>{$row['club_name']}</td>
                <td>{$row['number_of_players']}</td>
                <td>{$row['goals_scored']}</td>
                <td>{$row['clean_sheets']}</td>
                <td>{$row['fouls']}</td>
                <td>{$row['captain_id']}</td>
                <td>{$row['matches_played']}</td>
                <td>{$row['wins']}</td>
                <td>{$row['losses']}</td>
                <td>{$row['draws']}</td>
                <td>{$row['yellow_card']}</td>
                <td>{$row['red_card']}</td>
                <td>{$row['goals_conceded']}</td>
                <td>{$row['league_id']}</td>
                <td>{$row['stadium']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='16'>No clubs found</td></tr>";
}
