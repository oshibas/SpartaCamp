<?php

function check_temperature($body_temperature)
{
    if ($body_temperature < 37) {
        return true;
    } else {
        return false;
        }
}

function create_message($body_temperature)
{
    $body_condition = check_temperature($body_temperature);

    if ($body_condition) {
        return 'あなたは平熱なので、問題なく参加できます';
    } else {
        return 'あなたは発熱しているので、参加出来ません';
    }
}
?>
