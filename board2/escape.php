<?php
function e($stt,$charset='UTF-8'){
    return htmlspecialchars($stt,ENT_QUOTES,$charset);
}