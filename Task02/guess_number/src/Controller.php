<?php

namespace ktkrst\guess_number\Controller;
use function ktkrst\guess_number\View\showGame;

function startGame()
{
   echo "Game started" .PHP_EOL;
   showGame();
}
