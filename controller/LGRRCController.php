<?php
date_default_timezone_set('Asia/Manila');

require 'manager/LGRRCManager.php';

$lg = new LGRRCManager();

$books = $lg->fetchListofBooks();
$linawin_season = $lg->fetchLinawinNatinSeason();
$sagisag_season = $lg->fetchSagisagSeason();
$linawin_video = $lg->fetchLinawinVideo();
$sagisag_video = $lg->fetchSagisagVideo();
$executive_msg = $lg->fetchMessage(2);
$ard_msg = $lg->fetchMessage(3);
$about_carousel = $lg->fetchAboutCarousel();

// $experts_opts = $lg->fetchExperts();


?>