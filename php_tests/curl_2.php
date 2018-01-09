<?php 
function get_file1($file, $local_path, $newfilename) { 
    $err_msg = ''; 
    echo "<br>Attempting message download for $file<br>"; 
    $out = fopen($newfilename, 'wb'); 
    if ($out == FALSE){ 
      print "File not opened<br>"; 
      exit; 
    } 

    $ch = curl_init(); 

    curl_setopt($ch, CURLOPT_FILE, $out); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_URL, $file); 

    curl_exec($ch); 
    echo "<br>Error is : ".curl_error ( $ch); 

    curl_close($ch); 
    //fclose($handle); 

}

get_file1("http://files.data.gouv.fr/sirene/sirene_2017352_E_Q.zip","","./download.zip");
?>