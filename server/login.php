<?php
$base_url = 'localhost/first_repository/public/';
session_start();
$con = mysqli_connect("localhost","root","") ;
mysqli_select_db($con,"logindb") ;


//Check if form posted 
$form = isset($_POST["form_name"]) && $_POST["form_name"] ? $_POST["form_name"]: false;
switch($form){
    case "login": 
        //login user here 
        login($con);
    case "register":
        // register user here
        register();
    case "forget_password":
        //reset password here 
        reset_password();
    case "logout":
        //logout user 
        logout();
}


//lOGIN FUNCTIONS 

function login($con){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $query = "select * from users WHERE username = '$username' AND password = '$password'";
    $query_run = mysqli_query($con, $query);
    if (mysqli_num_rows($query_run) > 0) {
        $user = mysqli_fetch_object($query_run);
        set_user_session($user);
        echo json_encode([
            "status"=> 1,
            "message"=> "success",
            "user_detail" => $user
        ]);
    } else {
        echo json_encode([
            "status" => 0,
            "message" => "Username password does not matched"
        ]);
    }
}


//REGISTER FUNCITON
function register(){

}

function reset_password(){

}

function logout(){
    
}


function set_user_session($user){
    $_SESSION['user_details'] = $user;
}
?>