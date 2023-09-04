<?php

// function file_check($file){
//     $new_array = explode(".",$file);
//     $file_types = ["csv", "zip"];
//     $ext = end($new_array);

//     if($ext != "zip"){
//         echo "You can't upload your file(zip and csv accepted)<br>";
//     } else {
//         echo "Your file uploaded<br>";
//     }

// }
// file_check("nitu.csv");

// explode
echo "<h2>Validate user file using explode methods</h2>";
$fileType = ["csv" , "zip"];
$file = "index.zip";
$newArray = explode ('.', $file);
$ext = end($newArray);

if ($ext != "zip"){
    echo " you isn't upload( zip and csv accepted file)<br>";
} else{
    echo "Uploaded<br><br>";
}

// Thumbnail genarate
echo "<h2>Create a youtube Thumbnail generator </h2>";
$youtubeAPI = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
$youtubeURL = "https://youtu.be/LM7xdMp7_x0?si=R6ZU0Gmk7bk_Tilu";
$codeURL = explode("?si",$youtubeURL)[0];
$finalURL = explode('/',$codeURL);
$videoID = end($finalURL);
$imgThumbnail = str_replace("<insert-youtube-video-id-here>",$videoID,$youtubeAPI);
echo '<img src=" '.$imgThumbnail .' " width = "300px"<br>>';

// Using Function
function imgFind($youtubeURL){
    $youtubeAPI = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/0.jpg";
    $codeURL = explode("?si",$youtubeURL)[0];
    $finalURL = explode('/',$codeURL);
    $videoID = end($finalURL);
    $imgThumbnail = str_replace("<insert-youtube-video-id-here>",$videoID,$youtubeAPI);
    echo '<img src=" '.$imgThumbnail .' " width = "300px">';
}
imgFind("https://youtu.be/tihmQmPqSdM?si=WUcqmL_TpU9BM8Pp");
