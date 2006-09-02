<?php

    function tagger() {
        if (func_num_args()) {
            $arg_list = func_get_args();
            $string = $arg_list[0];
        } else {
            return false;
        }
        if (file_exists("medpost")) {
            $commandstring = "./medpost -token";
        } elseif (defined(MEDPOST_DIR)) {
            if (file_exists(MEDPOST_DIR."medpost")) {
                $commandstring = MEDPOST_DIR."medpost -token";
            } else {
                print "Medpost could not be found. Please check MEDPOST_DIR value.";
                return false;
            }
        } else {
            print "Medpost could not be found.";
            return false;
        }
        $handle = popen("echo \"$string\" | $commandstring ", "r");
        $read = fread($handle, 2096);
        echo $read;
        pclose($handle);
        $split = preg_split("/\s/", $read);
        print_r($split);
    }

    tagger("Called today July 24 01 as he still had a high fever again during last night.");
?>