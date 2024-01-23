<?php
//for each page
//check privilege

//! $privilege must be set every page

if($privilege == 'applicant'){

    if($_SESSION['privilege'] != 'applicant'){
        //if not applicant
        echo "Access denied";
        session_destroy();
        header('Location: ../index.php?error=access_denied');
    
    }

}else if($privilege == 'admin'){

    if($_SESSION['privilege'] != 'admin'){
        //if not applicant
        echo "Access denied";
        session_destroy();
        header('Location: ../index.php?error=access_denied');
    
    }else{
        if(strtolower($_SESSION['department']) != $department){
            echo "Access denied";
            session_destroy();
            header('Location: ../index.php?error=access_denied');
        }

    }

   

}

if($_SESSION['privilege'] == 'admin'){

}

//applicant

//admin
//department