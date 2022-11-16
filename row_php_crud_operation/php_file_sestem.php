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
    $path = realpath($file);

    echo "<pre>";
    print_r (pathinfo($path, PATHINFO_FILENAME));
    echo "</pre>";
    ?>