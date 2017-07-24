<?php
/**
 * Created by PhpStorm.
 * User: Jagan Mohan
 * Date: 7/22/2017
 * Time: 3:11 PM
 */
include "vendor/firebase/php/src/JWT.php";
// use vendor\firebase\php\src\JWT\JWT;
include_once "admin/db/connect.php";
$password=sha1($_POST['password']);
$qury=mysql_query("select * from admin where userName='".$_POST['userName']."' AND password='".$password."'");	
if(mysql_num_rows($qury)==1){
$row=mysql_fetch_array($qury);
$objJwt=new JWT();

$key = "example_key";
$token = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
     'data' => [                  // Data related to the logged user you can set your required data
				    'userName'   => $row['userName'], // id from the users table
				     'id' => $row['id'], //  name
                                  ],
    "iat" => 1356999524,
    "nbf" => 1357000000
);

/**
 * IMPORTANT:
 * You must specify supported algorithms for your application. See
 * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
 * for a list of spec-compliant algorithms.
 */
$jwt = $objJwt->encode($token, $key);
$decoded = $objJwt->decode($jwt, $key, array('HS256'));

print_r($decoded);

/*
 NOTE: This will now be an object instead of an associative array. To get
 an associative array, you will need to cast it as such:
*/

$decoded_array = (array) $decoded;

/**
 * You can add a leeway to account for when there is a clock skew times between
 * the signing and verifying servers. It is recommended that this leeway should
 * not be bigger than a few minutes.
 *
 * Source: http://self-issued.info/docs/draft-ietf-oauth-json-web-token.html#nbfDef
 */
JWT::$leeway = 60; // $leeway in seconds
$decoded = JWT::decode($jwt, $key, array('HS256'));
}
?>