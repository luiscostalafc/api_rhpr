<?php

function getUserByToken ($token)
{
    try {
        $obj = \JWTAuth::toUser($token);
        $response = $obj ?? [];
    } catch (\Throwable $th) {
        $contentError = $th->getMessage();
        $response = [];
    } 

    return $response;
}


function getMaxPositonShows ($position)
{
    if (!$position) return [];
    $positionShows = [];
    foreach (config('cops.position_order') as $positionOrder) {
        if ($positionOrder == strtoupper($position)) break;
        else array_push($positionShows, $positionOrder);
    }

    return $positionShows;
}
