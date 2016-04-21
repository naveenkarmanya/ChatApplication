<?php 
if(isset($_GET["user"])){
    session_start();
    $_SESSION["user"]=$_GET["user"];
  
}
?>
<!doctype html>
<html>
    <head>
        <title>Ajax Chat Application</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
         <script type="text/JavaScript" src="js/jquery.min.js"></script>
        
         <script src="js/chat.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="chat">
            <div class="messages">
                <div class="message">
                    
                </div>
                
            </div>
            <textarea id="text" name="text" value="insert" placeholder="Text Here.."></textarea>
        </div>
    </body>
</html>