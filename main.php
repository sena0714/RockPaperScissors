<?php
require_once('UseCases/RockPaperScissors/MatchAction.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $matchAction = new MatchAction((int) $_POST['hand_code']);

    $matchAction->execute();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RockPaperScissors</title>
</head>
<body>
    <form method="post">
        <div>
            <label for="rock">グー<input type="radio" name="hand_code" value="1" id="rock" required></label>
            <label for="scissors">チョキ<input type="radio" name="hand_code" value="2" id="scissors" required></label>
            <label for="paper">パー<input type="radio" name="hand_code" value="3" id="paper" required></label>
        </div>

        <button type="submit" name="decision">決定</button>
    </form>
</body>
</html>