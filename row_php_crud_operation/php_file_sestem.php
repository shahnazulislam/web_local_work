<?php 
    $file = "readfile.txt";

    if (file_exists($file)) {
        // echo readfile("readfile.txt");

        // copy($file, "sutony.txt");
        // rename("sutony.txt","textins.txt")
    }else{
        echo "file doesn't exist";
    }

    // mkdir("Mysqli_operation");
    // rmdir("Mysqli_operation");

    // echo filetype("../mysql");

    // echo realpath("loop.php");
    // $path = realpath($file);

    // echo basename($path);
    // echo dirname($path,1);

    // echo "<pre>";
    // print_r (pathinfo($path, PATHINFO_FILENAME));
    // echo "</pre>";


/* 
    fopan(),
    fread(),
    fgets(),
    ftell(),
    fseek(),
    fpassthru(),
    rewind(),
    feof(),
    file(),
    fgetc(),
    fwrite(),
    fputs(),
    fclose(),
    ftruncate(), 
    
 */

//  echo substr(decoct(fileperms("readfile.txt")),2);
 chmod("readfile.txt", 0644);
    
?>