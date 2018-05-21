<?php

$files = glob(__DIR__ . "/src/Helpers/*.php");

foreach ($files as $file) {
	require($file);   
}