<?php
     	// create curl resource
        $ch = curl_init();
        $publicip = "http://169.254.169.254/latest/meta-data/public-ipv4";

        // set url
        curl_setopt($ch, CURLOPT_URL, "$publicip");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);
        
        // close curl resource to free up system resources
        curl_close($ch);

        //Get the public IP address
        echo "The public IP address for your EC2 instance is $output";
?>
