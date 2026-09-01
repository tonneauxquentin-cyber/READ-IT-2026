<?php

namespace Core\Helpers;

function truncate($text, $limit = 100)
{
    if (strlen($text) <= $limit) return $text;

    // Coupe à la limite
    $text = substr($text, 0, $limit);
    // Recherche la position du dernier espace dans la chaîne tronquée
    $last_space = strrpos($text, ' ');
    // Recoupe la chaîne à cet espace
    return substr($text, 0, $last_space) . '...';
}

function formatMonth($month)
{
    $months = [
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July',
        8 => 'August',
        9 => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December'
    ];

    return $months[$month];
}
