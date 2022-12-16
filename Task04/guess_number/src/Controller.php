<?php

namespace ktkrst\guess_number\Controller;

use function ktkrst\guess_number\GameModel\setting;
use function ktkrst\guess_number\View\MenuGame;
use function ktkrst\guess_number\DataBase\openDatabase;

function startGame()
{
    setting();
    openDatabase();
    MenuGame();
}
