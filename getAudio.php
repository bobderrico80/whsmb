<?php
//get values from GET
$part = $_GET['part'];
$opts = $_GET['opts'];
$click = $_GET['click'];

//create string with correct audio file name based on values from GET
if ($opts == 'full') {
    $filename = 'full' . $click;
} else {
    $filename = $opts . $part . $click;
}

//display html
echo '<audio controls>';
echo '<source src="audio/' . $filename . '.mp3" type="audio/mpeg">';
echo '<source src="audio/' . $filename . '.ogg" type="audio/ogg">';
echo '<a href="audio/' . $filename . '.mp3" target="_blank">Click here to listen</a>';
echo '</audio>';
echo '<p><a href="pdf/' . $part . '.pdf" target="_blank">Click here to view/print your part</a></p>';
