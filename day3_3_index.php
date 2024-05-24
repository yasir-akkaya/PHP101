<?php

declare(strict_types=1);
declare(ticks=1);

register_tick_function("tick_calistirici");
function tick_calistirici(){
    echo "Tick calisti";
}

function sum(int $a, int $b){
    return $a + $b;
}
