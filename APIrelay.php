﻿<?php 
$link="https://www.instructables.com/json-api/showAuthorStats?screenName=Maker+Saga"; 
$json = file_get_contents($link); 
$obj = json_decode($json); 
 $viewscount = $obj->views;

// Do translating here:_____
echo $translatedviewcount
