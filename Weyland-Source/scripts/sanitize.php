<?php
//Libary to provide input sanitsation function
// "require_once" in the file
// Call Fnctions


function validEmail($email){
    /* Check if Email is Valid */
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        return true;
    }
    else {
        return false;
    }
}

function cleanEmail($email){
    /*Attempt to remove HTML from Email*/
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $email;
}

function stripAllTags($input){
    /*Strip All tags (acordng to docs) from input */
    return strip_tags($input);
}

function stripScriptOnce($input){
    /* Crappy Script stripping just one round */
    $out = $input;
    $out = str_replace("<script>","",$out);
    $out = str_replace("</script>","",$out);
    return $out;
}

function stripScriptOnceLower($input){
    /* Crappy Script stripping just one round */
    $out = strtolower($input);
    $out = str_replace("<script>","",$out);
    $out = str_replace("</script>","",$out);
    return $out;
}

?>
