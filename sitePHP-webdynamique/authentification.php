
<?php
function is_valid_email($mail)
{
     if (empty($mail)) {
         echo "<label class=\"text-danger\">veuillez saisir votre email !!</label>";
         return false;
     } else {
         $email = $mail;
         
         if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
             echo "<label class=\"text-danger\">Valid email</label>";
             return true;}
         else   { 
           echo "<label class=\"text-danger\">Invalid email format !!</label>"; 
           return false;
     } 
    }}
    function validpassword($ch) 
    {  
        $uppercase = preg_match('@[A-Z]@', $ch);
        $lowercase = preg_match('@[a-z]@', $ch);
        $number    = preg_match('@[0-9]@', $ch);
        $specialChars = preg_match('@[^\w]@', $ch);
    
        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($ch) < 8) 
        {
        echo "<label class=\"text-danger\">Invalid password</label>";
	    }
	
    else {
        echo "<label class=\"text-danger\">Valid password</label>";
	    }	

            
    }
 



?>

