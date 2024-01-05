<?php 
    if(isset($_POST["submit"])) {

        $tentQuan = $_POST["tentquan"];
        $tableQuan = $_POST["tablequan"];
        $chairQuan = $_POST["chairquan"];
        $projectorQuan = $_POST["projectorquan"];
          
        $fullname = $_POST["fullname"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        

        $tent = $_POST["tent"];
        $table = $_POST["table"];
        $chair = $_POST["chair"];
        $projector = $_POST["projector"];


        $tentRequest;
        $tableRequest;
        $chairRequest;
        $projectorRequest;
        $purpose = $_POST["purpose"];


        if(empty($tent) && empty($table)  && empty($chair)  && empty($projector)){
            header("location: ../user-home.php?error=emptyinput");
         
        }
        else {

            if(isset($_POST["tent"])) {
                $tentRequest = "Tent ".$tentQuan."x";
            }
    
            if(isset($_POST["table"])) {
                $tableRequest = "table ". $tableQuan."x";
            }
    
            if(isset($_POST["chair"])) {
                $chairRequest = "chair ". $chairQuan."x";
            }
    
            if(isset($_POST["projector"])) {
                $projectorRequest = "projector ". $projectorQuan."x";
            }

            
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';


        request($conn, $fullname, $address, $email, $tentRequest, $tableRequest, $chairRequest,  $projectorRequest, $purpose);
        }
    }

    else {
        header("location: ../user-home.php");
    }