<?php  
 require '../model/connection.php';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "Name field cannot be empty";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "E-mail field cannot be empty";  
      }    
      else if(empty($_POST["dateOfBirth"]))  
      {  
           $error = "date of birth cannot be empty";  
      }
      else if(empty($_POST["phoneNo"]))  
      {  
           $error = "phoneNo cannot be empty";  
      } 
      
      else if(empty($_POST["gender"]))
      {
          $error = "gender field cannot be empty";
      }
     else  
     {

    
        {
          $add_query = "INSERT INTO user (id, name, email, phoneNo, gender, dob)
          VALUES ('NULL', '$_POST[name]', '$_POST[email]', '$_POST[phoneNo]', '$_POST[gender]', '$_POST[dateOfBirth]')"; 
          mysqli_query($link, $add_query);
          echo "data inserted succefully";
        }
        
     }
            
          
     }  
 
     if(isset($message))  
     {  
     echo $message;  
     }
     if(isset($error))  
     {  
          echo $error;  
     } 
     if(isset($message_1))
     {
          echo $message_1;
     }       
 ?> 