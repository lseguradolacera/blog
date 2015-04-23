<?php  
require_once 'dbConnect.php';  
session_start();  
    class dbFunction {  
			
			
            
        function __construct() {  
              
            // connecting to database  
            $db = new dbConnect();;  
               
        }  
        // destructor  
        function __destruct() {  
              
        }  
 
        public function Login($username, $password){ 
            $res = mysql_query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'");  
            $user_data = mysql_fetch_array($res);  
            //print_r($user_data);  
            $no_rows = mysql_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
           
                $_SESSION['login'] = true;
                $_SESSION['userid'] = $user_data['userid']; 
                $_SESSION['username'] = $user_data['username'];
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
               
                   
        }  
    }  
?>  
