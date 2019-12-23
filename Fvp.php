<?php
$NameError="";
$EmailError="";
$GenderError="";
$WebsiteError="";


if(isset($_POST['Submit'])) {
    
    if(empty($_POST['Name'])) {
        $NameError="Name is Required";        
    }
    else{
        $Name=Test_User_Input($_POST["Name"]);
        if(!preg_match("/^[A-Za-z. ]*$/",$Name)) {
         $NameError="Only Letters And White Spaces Allowed"; 
        }
    }
if(empty($_POST['Email'])) {
        $EmailError="Email is Required";        
    }
    else{
        $Email=Test_User_Input($_POST["Email"]);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)) 
        {
         $EmailError="Invalid Email Format"; 
        }
    }
if(empty($_POST['Gender'])) {
        $GenderError="Gender is Required";        
    }
    else{
        $Gender=Test_User_Input($_POST["Gender"]);
    }
if(empty($_POST['Website'])) {
        $WebsiteError="Website is Required";        
    }
    else{
        $Website=Test_User_Input($_POST["Website"]);
        if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)) 
        {
        $WebsiteError="Invalid Website Adress";
        }
        }
    
    
if(!empty($_POST["Name"])&&!empty($_POST["Email"])&&!empty($_POST["Gender"])&&!empty($_POST["Website"])){
if((preg_match("/^[A-Za-z. ]*$/",$Name)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)==true)&&(preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/",$Website)==true))
{
echo "<h2>Your Submit Information</h2> <br>";    
echo "Name: {$_POST["Name"]}<br>";   
echo "Email: {$_POST["Email"]}<br>";  
echo "Gender: {$_POST["Gender"]}<br>";  
echo "Website: {$_POST["Website"]}<br>";  
echo "Comments: {$_POST["Comment"]}<br>";  
}else { 
    echo '<span class="error">Please fill in your form again!</span>';
}
}
}
function Test_User_Input($Data){
    return $Data;
}
    
?>


<!DOCTYPE>


<html>
      <head>
             <meta charset="utf-8">
             <link href="form.css" type="text/css">
             <link rel="stylesheet" href="style.css" type="text/css">
             <title> Form Validation Project</title>
      </head>
  <body>
  
    <?php  ?>  
  
      <h2>Form Validation with PHP</h2>
      
       <form action="Fvp.php" method="post">
            <legend>*Please fill in the fields.  </legend>
               <fieldset>
                   Name:<br>   
                   <input class="input" type="text" Name="Name" value="">
                   <span class="error">*<?php echo $NameError; ?></span><br>
                   E-mail:<br>   
                   <input class="input" type="text" Name="Email" value="">   
                   <span class="error">*<?php echo $EmailError; ?></span><br>  
                   Gender:<br>  
                   <input class="input" type="radio" Name="Gender" value="Male">Male
                   <input class="input" type="radio" Name="Gender" value="Female">Female
                   <span class="error">*<?php echo $GenderError; ?></span><br>
                   Website:<br>
                   <input class="input" type="text" Name="Website" value="">
                       <span class="error">*<?php echo $WebsiteError; ?></span><br>
                   Comment:<br>
                    <textarea Name="Comment" rows="5" cols="25"></textarea>
                    <br>
                    <br>          
                    <input type="Submit" Name="Submit" value="Submit"> 
                </fieldset>      
         </form>
     
      
      
  </body>
</html>