<?

$EXTLIST = array("image/jpeg","image/jpg","image/png","image/svg");

/* I like the Idea of breaking the sanitisation out */
function sanit_checkExists($destname){
    if (file_exists($destname)){
        return true;
      }
    return false;
}

function sanit_fileSize($filesize){
    /* Return True if file to large */
    if ($filesize > 1000000){ //Limit to 1 Meg
        return True;
    }
    return False;
}

function sanit_fileTypeWhite($file_type){
    /* Sanitise filetypes against a whitelist */
    $EXTLIST = array("image/jpeg","image/jpg","image/png","image/svg");
    echo ($file_type);
    if(in_array($file_type, $EXTLIST)){
            return true;
        }
    return false;
    
}

function sanit_fileTypeBlack($file_type){
    /* Sanitise filetypes against a blacklist (Negate Extentions) */
    if(in_array($file_type, $EXTLIST)){
            return false;
        }
    return true;

}

// ----- AND Line up the sanity checks Which is pretty cool
//$chk_FileExist = sanit_returnFalse; //sanit_checkExists;
//$chk_FileSize = sanit_fileSize;
//$chk_FileExt = sanit_fileTypeWhite;


function uploadFile(){
    #Image
    $DESTDIR = "avatars/";
    
    $fd = $_FILES['fileupload'];
      
    $file_name = $fd['name']; //Name
    $file_size = $fd['size']; //Size
    $file_type = $fd['type']; //Extension
    
    $file_tmp = $fd['tmp_name']; //Where the thing is stored afterwards
    $destname = $DESTDIR.$file_name; //Wehere we will upload to
    
    
    //CHECK: Does the file exist (True on Errot)
    /*
    if (sanit_CheckExists($destname)){
        echo("File Exists");
        return false;
        #array_push($errors,"File Exists");
    }
    */
    if ($file_name == false){
        return false;
    }
    
    //Is Filesize too big (True on Error)
    if (sanit_FileSize($file_size)){
        echo '<div class="alert alert-warning">';
        echo("File Too Large");
        echo ("</div>");
        return false;
        #array_push($errors, "File too Large");
    }

    //Is it allowed through the White / Black list (false on error)
    if (sanit_FileTypeWhite($file_type, $EXTLIST) == false){
        echo '<div class="alert alert-warning">';
        echo("File Type Not Allowed");
        echo ("</div>");
        return false;
        #array_push($errors, "File Type of ".$file_type." Not Allowed");
    }

    //DO the Work of Moing the File
    if (empty($errors) == true){
        move_uploaded_file($file_tmp,$destname);
        return $file_name;
        echo '<div class="alert alert-info">Image Preview: ';
        echo '<img src="'.$destname.'" height="88" width="88">';
        echo '</div>';
    }
    else{
        return false;
        echo '<div class="alert alert-warning">';
        echo '<pre>' . print_r($errors, TRUE) . '</pre>';
        echo '</div>';
    }
}


if (isset($_POST["fm-username"])){
    $username = $_POST["fm-username"];
     //Input Sanitisation
    $mailOk = validEmail($username);
    if (!$mailOk){
        echo ("<div class='alert alert-warning'> Not a Valid Email Address</div>");
    }
    else{
        if ($username == "bishop@weyland.net" and isset($_POST["secret"])){
            $_SESSION["userid"] = "bishop@weyland.net";
            $_SESSION["avatar"] = "Bishop.png";

        }
        else if ($username == "bishop@weyland.net" and !isset($_POST["secret"])){
            echo("<div class='alert alert-warning'> User logged in</div>");
        }
        else{
            $fname = uploadFile();
            if ($fname == false){
                $fname = "noavatar.png";
            }
            //echo "Set Cookies";
            //unset($_SESSION["userid"]);
            $cleanname = $username;    
            $_SESSION["userid"] = $cleanname;
            $_SESSION["avatar"] = $fname;
            }
    }
    
}

//Delete the session
if (isset($_POST["logoutbtn"])){
    session_unset();
    session_destroy();
}

?>
