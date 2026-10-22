<?php

return [
    'title' => env('WEDDING_TITLE', 'Olivia & Alexander — 02.11.2026'),
    'description' => env('WEDDING_DESCRIPTION', 'მზად ხარ თავგადასავლისთვის? გახსენი მოსაწვევი.'),
    // ISO 8601 with timezone offset — drives the countdown at the end of the animation.
    'starts_at' => env('WEDDING_STARTS_AT', '2026-11-02T16:00:00+04:00'),
];
