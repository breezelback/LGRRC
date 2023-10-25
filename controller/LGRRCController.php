<?php
session_start();
date_default_timezone_set('Asia/Manila');

require 'manager/LGRRCManager.php';

$lg = new LGRRCManager();

$books = $lg->fetchListofBooks();
$linawin_season = $lg->fetchLinawinNatinSeason();
$sagisag_season = $lg->fetchSagisagSeason();
$linawin_video = $lg->fetchLinawinVideo();
$sagisag_video = $lg->fetchSagisagVideo();

?>