<?php
if(isset($_POST["Submit"])) {  
$Username=$_POST["Username"];
$Password=$_POST["Password"];

if($Username=="Dusan" && $Password=="car")
 {
    echo "<h2>Welcome : {$_POST["Username"]}</h2> " ;
 }
    else 
{
    echo "<h2>Acount is not created | try again</h2> ";
}
}
 else 
 {
    echo "<h2>Login is required</h2>";
 }   


?>


<!DOCTYPE>
<html>
    <head>
         <meta charset="UTF-8">
         <title>PHP form</title>
     </head>
 <body>
  
      <php> </php>
      
      
    <fieldset>
        <legend> HTML5 FORM </legend>
            <form action="Form.php" method="post">
                 <label for="Username">Username:</label>
                 <input id="Username" type="text" name="Username"><br><br>               
                 <label for="Password">Password:</label>
           &nbsp;<input id="Password" type="Password" name="Password"><br><br>
                <input type="Submit" name="Submit" value="Submit">     
            </form>
    </fieldset>  
      
  </body>
</html>