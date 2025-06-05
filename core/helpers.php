<?php
namespace core\helpers;

function truncate($resume, int $length = 100) {
    if (strlen($resume) > $length) {
        $cut = substr($resume, 0, $length);
        $cut = substr($cut, 0, strrpos($cut, ' '));
        return $cut . '...';
    } else {
        return $resume;
    }
}
?>