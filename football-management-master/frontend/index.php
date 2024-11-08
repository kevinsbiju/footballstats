<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football League Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Football League Management System</h1>

    <div>
        <h2>Players</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Player ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Secondary Position</th>
                    <th>Tertiary Position</th>
                    <th>Appearances</th>
                    <th>Goals</th>
                    <th>Assists</th>
                    <th>Tackles</th>
                    <th>Interceptions</th>
                    <th>Clean Sheets</th>
                    <th>Saves</th>
                    <th>Squad Number</th>
                    <th>Fouls</th>
                    <th>Team ID</th>
                    <th>Yellow cards</th>
                    <th>Red cards</th>
                    <th>Nationality</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'view_players.php'; ?>
            </tbody>
        </table>
    </div>

    <div>
        <h2>Leagues</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>League ID</th>
                    <th>League Name</th>
                    <th>Number of Clubs</th>
                    <th>Top Scorer ID</th>
                    <th>Top Assister ID</th>
                    <th>Most Red Card ID</th>
                    <th>League Leader ID</th>
                    <th>Best Goalkeeper ID</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'view_leagues.php'; ?>
            </tbody>
        </table>
    </div>

    <div>
        <h2>Clubs</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Club ID</th>
                    <th>Club Name</th>
                    <th>Number of Players</th>
                    <th>Goals Scored</th>
                    <th>Clean Sheets</th>
                    <th>Fouls</th>
                    <th>Captain ID</th>
                    <th>Matches Played</th>
                    <th>Wins</th>
                    <th>Losses</th>
                    <th>Draws</th>
                    <th>Red Cards</th>
                    <th>Yellow Cards</th>
                    <th>Goals Conceded</th>
                    <th>League ID</th>
                    <th>Stadium</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'view_clubs.php'; ?>
            </tbody>
        </table>
    </div>

    <div>
        <h2>Matches</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Match ID</th>
                    <th>Home Team</th>
                    <th>Away Team</th>
                    <th>Home Goals</th>
                    <th>Away Goals</th>
                    <th>Man of the Match</th>
                    <th>Match Date</th>
                    <th>League ID</th>
                    <th>Venue</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'view_matches.php'; ?>
            </tbody>
        </table>
    </div>

    <a href="add.html">Add New Records</a><br>
    <a href="topscorerform.html">Find Top Scorer and Top Assister</a><br>
    <a href="updateplayerform.html">Update Existing Player Records</a><br>
</body>

</html>