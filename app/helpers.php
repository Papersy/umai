<?php

!function_exists('prepStyle');
function prepStyle(string $stylePath): string
{
    return config('app.url') . $stylePath;
}
