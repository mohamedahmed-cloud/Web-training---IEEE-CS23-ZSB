<?php 

/*
    Author : Mohamed Yousef 
    Date   : 2023-03-13
*/
$genre = "Hack And Slash";

if ($genre === "RPG") {

  echo "I Recommend Ys Games";

} elseif ($genre === "Hack And Slash") {

  echo "I Recommend Castlevania Games";

} elseif ($genre === "FPS") {

  echo "I Recommend Uncharted Games";

} elseif ($genre === "Platform") {

  echo "I Recommend Megaman Games";

} elseif ($genre === "Puzzle") {

  echo "I Recommend Megaman Games";

} else {

  echo "I Recommend Shadow Of Mordor And Shadow Of War";

}
echo "<br>";

switch($genre ){
    case $genre === "RPG":
        echo "I Recommend Ys Games";
        break;
    case $genre === "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
    case $genre === "FPS":
        echo "I Recommend Uncharted Games";
        break;
    case $genre === "Platform":
        echo "I Recommend Megaman Games";
        break;
    case $genre === "Puzzle":
        echo "I Recommend Megaman Games";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";

}
// Needed Output
// "I Recommend Castlevania Games"