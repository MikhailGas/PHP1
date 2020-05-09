<?php
    function imageresize($outfile,$infile,$neww,$newh,$quality) {

        $im=imagecreatefromjpeg($infile);
        $im1=imagecreatetruecolor($neww,$newh);
        imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));
    
        imagejpeg($im1,$outfile,$quality);
        imagedestroy($im);
        imagedestroy($im1);
    }
    
?>