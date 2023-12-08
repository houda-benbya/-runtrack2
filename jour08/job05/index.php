<?php
session_start();

// Vérifier si la partie est déjà initialisée
if (!isset($_SESSION['grid'])) {
    // Initialiser la grille
    $_SESSION['grid'] = [
        ['', '', ''],
        ['', '', ''],
        ['', '', '']
    ];
    $_SESSION['player'] = 'X'; // Joueur X commence
}

// Vérifier si un bouton a été cliqué
if (isset($_POST['row']) && isset($_POST['col'])) {
    $row = $_POST['row'];
    $col = $_POST['col'];

    // Vérifier si la case est vide
    if ($_SESSION['grid'][$row][$col] == '') {
        // Mettre le symbole du joueur actuel dans la case
        $_SESSION['grid'][$row][$col] = $_SESSION['player'];

        // Vérifier si le joueur actuel a gagné
        if (checkWin($_SESSION['player'])) {
            echo $_SESSION['player'] . ' a gagné';
            resetGame();
        } else {
            // Changer de joueur
            $_SESSION['player'] = ($_SESSION['player'] == 'X') ? 'O' : 'X';
        }
    }
}

// Vérifier si toutes les cases ont été cliquées
if (isGridFull()) {
    echo 'Match nul';
    resetGame();
}

// Réinitialiser la partie
if (isset($_POST['reset'])) {
    resetGame();
}

// Fonction pour vérifier si un joueur a gagné
function checkWin($player)
{
    $grid = $_SESSION['grid'];

    // Vérifier les lignes
    for ($i = 0; $i < 3; $i++) {
        if ($grid[$i][0] == $player && $grid[$i][1] == $player && $grid[$i][2] == $player) {
            return true;
        }
    }

    // Vérifier les colonnes
    for ($j = 0; $j < 3; $j++) {
        if ($grid[0][$j] == $player && $grid[1][$j] == $player && $grid[2][$j] == $player) {
            return true;
        }
    }

    // Vérifier les diagonales
    if ($grid[0][0] == $player && $grid[1][1] == $player && $grid[2][2] == $player) {
        return true;
    }
    if ($grid[0][2] == $player && $grid[1][1] == $player && $grid[2][0] == $player) {
        return true;
    }

    return false;
}

// Fonction pour vérifier si toutes les cases ont été cliquées
function isGridFull()
{
    $grid = $_SESSION['grid'];

    foreach ($grid as $row) {
        foreach ($row as $cell) {
            if ($cell == '') {
                return false;
            }
        }
    }

    return true;
}

// Fonction pour réinitialiser la partie
function resetGame()
{
    unset($_SESSION['grid']);
    unset($_SESSION['player']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeu du morpion</title>
</head>
<body>
    <h1>Jeu du morpion</h1>

    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++) { ?>
                        <td>
                            <?php if ($_SESSION['grid'][$i][$j] == '') { ?>
                                <button type="submit" name="row" value="<?php echo $i; ?>" <?php echo ($_SESSION['player'] == 'X') ? 'disabled' : ''; ?>>-</button>
                            <?php } else { ?>
                                <?php echo $_SESSION['grid'][$i][$j]; ?>
                            <?php } ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>

        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
</body>
</html>
