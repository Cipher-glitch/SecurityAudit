<?php
//Load Files
if (file_exists ("/tmp/messages")){
    $messages = unserialize(file_get_contents("/tmp/messages"));
}
else{   
    //Load Old Messages
    $messages = array(
        array("bishop@weyland.net", "Bishop.png", "How can I help?"),
    );
}
?>

<?php
//And Codez to Handle Posting of Messages
if (isset($_POST["message"])){
    if (isset($_SESSION["userid"])){
        $theMessage = $_POST["message"];
        //Input Sanitisation goes Here
        // $cleanMessage = str_replace("alert","",$theMessage);
        $cleanMessage = stripScriptOnce($theMessage);
        //$cleanMessage = $theMessage;
        array_push($messages, array($_SESSION["userid"], $_SESSION["avatar"], $cleanMessage));
        if (count($messages) > 100){
		    //pop
		    array_shift($messages);			 
			
        }	
                //Then Store
		file_put_contents("/tmp/messages", serialize($messages));
    }
}
?>

<?php
// And Display the Feckers
for($x=0;$x<count($messages);$x++)
{
    if (($messages[$x][0] == $_SESSION["userid"]) or ($messages[$x][0] == "bishop@weyland.net")){
    echo '<div class="card bg-dark">';
    echo '<div class="card-header">';
    echo '<img  width=64px src="avatars/'.$messages[$x][1].'">';
    echo  '<span class="text-right">'.$messages[$x][0].'</span>';
    echo '</div>';
    echo '<div class="card-body">'. $messages[$x][2]. '</div>';
    echo "</div>\n";
    }
}
?>

