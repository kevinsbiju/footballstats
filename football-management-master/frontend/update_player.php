<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Player Statistics</title>
</head>
<body>
    <h1>Update Player Statistics</h1>

    <?php
    include 'footballdb.php';
    // Check if the player ID is set
    if (isset($_POST['playerID'])) {
        // Get the player ID and sanitize it
        $playerID = intval($_POST['playerID']);

        // Initialize an array to hold the fields to update
        $fields = [];

        // Check each possible field and add it to the $fields array if it's set
        if (!empty($_POST['fName'])) {
            $fName = $conn->real_escape_string($_POST['fName']);
            $fields[] = "fName = $fName";
        }
        if (!empty($_POST['lName'])) {
            $lName = $conn->real_escape_string($_POST['lName']);
            $fields[] = "lName = $lName";
        }
        if (isset($_POST['age']) && $_POST['age'] !== '') {
            $age = intval($_POST['age']);
            $fields[] = "age = $age";
        }
        if (!empty($_POST['position1'])) {
            $position1 = $conn->real_escape_string($_POST['position1']);
            $fields[] = "position1 = $position1";
        }
        if (!empty($_POST['position2'])) {
            $position2 = $conn->real_escape_string($_POST['position2']);
            $fields[] = "position2 = $position2";
        }
        if (!empty($_POST['position3'])) {
            $position3 = $conn->real_escape_string($_POST['position3']);
            $fields[] = "position3 = $position3";
        }
        if (isset($_POST['apps']) && $_POST['apps'] !== '') {
            $apps = intval($_POST['apps']);
            $fields[] = "apps = $apps";
        }
        if (isset($_POST['goals']) && $_POST['goals'] !== '') {
            $goals = intval($_POST['goals']);
            $fields[] = "goals = $goals";
        }
        if (isset($_POST['assists']) && $_POST['assists'] !== '') {
            $assists = intval($_POST['assists']);
            $fields[] = "assists = $assists";
        }
        if (isset($_POST['tackles']) && $_POST['tackles'] !== '') {
            $tackles = intval($_POST['tackles']);
            $fields[] = "tackles = $tackles";
        }
        if (isset($_POST['interceptions']) && $_POST['interceptions'] !== '') {
            $interceptions = intval($_POST['interceptions']);
            $fields[] = "interceptions = $interceptions";
        }
        if (isset($_POST['clean_sheets']) && $_POST['clean_sheets'] !== '') {
            $clean_sheets = intval($_POST['clean_sheets']);
            $fields[] = "clean_sheets = $clean_sheets";
        }
        if (isset($_POST['saves']) && $_POST['saves'] !== '') {
            $saves = intval($_POST['saves']);
            $fields[] = "saves = $saves";
        }
        if (isset($_POST['squad_number']) && $_POST['squad_number'] !== '') {
            $interceptions = intval($_POST['squad_number']);
            $fields[] = "squad_number = $squad_number";
        }
        if (isset($_POST['fouls']) && $_POST['fouls'] !== '') {
            $fouls = intval($_POST['fouls']);
            $fields[] = "fouls = $fouls";
        }
        if (isset($_POST['team_id']) && $_POST['team_id'] !== '') {
            $team_id = intval($_POST['team_id']);
            $fields[] = "team_id = $team_id";
        }
        if (isset($_POST['yellow_card']) && $_POST['yellow_card'] !== '') {
            $yellow_card = intval($_POST['yellow_card']);
            $fields[] = "yellow_card = $yellow_card";
        }
        if (isset($_POST['red_card']) && $_POST['red_card'] !== '') {
            $red_card = intval($_POST['red_card']);
            $fields[] = "red_card = $red_card";
        }

        // Check if there are fields to update
        if (count($fields) > 0) {
            // Join the fields into a single string separated by commas
            $setClause = implode(', ', $fields);


            // Build and execute the update query
            $updateQuery = "UPDATE player SET $setClause WHERE playerid = $playerID";
            if ($conn->query($updateQuery) === TRUE) {
                echo "<p>Player statistics updated successfully!</p>";
            } else {
                echo "<p>Error updating record: " . $conn->error . "</p>";
            }

            // Close the database connection
            $conn->close();
        } else {
            echo "<p>No statistics were provided for update.</p>";
        }
    } else {
        echo "<p>Player ID is required.</p>";
    }
    ?>
</body>
</html>
