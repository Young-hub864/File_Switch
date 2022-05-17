<?php 
$filename= $_FILES['upload']['name'];
function check_file($arg) {
    $image = array('gif', 'png', 'jpeg', 'jpg');
    $video = array('mp4', 'mkv', 'webm');
    $audio = array('mp3', 'wav', 'flak');
    $document = array('pdf','txt','srt');
    $filename = $arg;
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (in_array($ext, $image)){
        echo 'This is an image';
    }elseif(in_array($ext,$video)){
        echo 'This is a video';
    }elseif(in_array($ext,$audio)){
        echo 'This is an audio';
    }elseif(in_array($ext,$document)){
            echo 'This is a document';
    }else{
        echo 'Invalid File Format';
    }
}
check_file($filename);
?>