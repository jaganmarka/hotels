<?php 
require_once('vendor/autoload.php');
require_once('admin/db/connect.php');
use \Firebase\JWT\JWT; 

define('SECRET_KEY',"password123");  /// secret key can be a random string and keep in secret from anyone
define('ALGORITHM','HS256');  // Algorithm used to sign the token                              
 $action = $_REQUEST['action'];
if ($action== 'login' ) {
  
 
                // if there is no error below code run
    $password=$_POST['password'];
    $salt=$password."1s2dskdh@w67w68ANHG";
    $hashPassword=hash("sha256", $salt);
   
$qury=mysql_query("select * from users where userName='".$_POST['userName']."' AND password='".$hashPassword."'");  
if(mysql_num_rows($qury)==1){
$row=mysql_fetch_array($qury);
                    
                    $tokenId    = base64_encode(mcrypt_create_iv(32));
                    $issuedAt   = time();
                    // $notBefore  = $issuedAt + 10;  //Adding 10 seconds
                    // $expire     = $notBefore + 60; // Adding 60 seconds
                    $serverName = 'http://localhost/hotels/hotels/'; /// set your domain name 
 
  					
                    /*
                     * Create the token as an array
                     */
                    $data = [
                        'iat'  => $issuedAt,         // Issued at: time when the token was generated
                        'jti'  => $tokenId,          // Json Token Id: an unique identifier for the token
                        'iss'  => $serverName,       // Issuer
                        // 'nbf'  => $notBefore,        // Not before
                        // 'exp'  => $expire,           // Expire
                        'data' => [                  // Data related to the logged user you can set your required data
				    'id'   => $row['id'], // id from the users table
				     'name' => $row['userName'], //  name
                                  ]
                    ];
                  $secretKey = base64_decode(SECRET_KEY);
                  //echo $secretKey;
                  /// Here we will transform this array into JWT:
                  $jwt = JWT::encode(
                            $data, //Data to be encoded in the JWT
                            $secretKey, // The signing key
                             ALGORITHM 
                           ); 
                 $unencodedArray = ['jwt' => $jwt];
                  echo  json_encode($unencodedArray);
           } else {
 
                  echo  "{'status' : 'error','msg':'Invalid email or passowrd'}";
 
                  }
     
     }     

if ( $action == 'authenticate' ){
  // echo $_REQUEST['tokVal'];
  $epld=explode("tokanVal=", $_REQUEST['tokVal']);
  // echo $epld[1];
               try {
               $secretKey = base64_decode(SECRET_KEY); 
               $DecodedDataArray = JWT::decode($epld[1], $secretKey, array(ALGORITHM));
 
               echo  "{'status' : 'success' ,'data':".json_encode($DecodedDataArray)." }";die();
 
               } catch (Exception $e) {
                echo "{'status' : 'fail' ,'msg':'Unauthorized'}";die();
               }
   }
   ?>








