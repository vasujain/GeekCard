<?php
    include 'header.php';
?>
<?php

error_reporting(E_ALL);
ini_set('display_errors', True);

session_start();

// change the following paths if necessary
$config = 'libraries/hybridauth/hybridauth/config.php';
require_once( "libraries/hybridauth/hybridauth/Hybrid/Auth.php" );

// check for erros and whatnot
$error = "";

if( isset( $_GET["error"] ) ){
    $error = '<b style="color:red">' . trim( strip_tags(  $_GET["error"] ) ) . '</b><br /><br />';
}

// if user select a provider to login with
// then inlcude hybridauth config and main class
// then try to authenticate te current user
// finally redirect him to his profile page
if( isset( $_GET["provider"] ) && $_GET["provider"] ):
    try{
        // create an instance for Hybridauth with the configuration file path as parameter
        $hybridauth = new Hybrid_Auth( $config );

        // set selected provider name
        $provider = @ trim( strip_tags( $_GET["provider"] ) );

        // try to authenticate the selected $provider
        $adapter = $hybridauth->authenticate( $provider );

        // if okey, we will redirect to user profile page
        $hybridauth->redirect( "profile.php?provider=$provider" );
    }
    catch( Exception $e ){
        // In case we have errors 6 or 7, then we have to use Hybrid_Provider_Adapter::logout() to
        // let hybridauth forget all about the user so we can try to authenticate again.

        // Display the recived error,
        // to know more please refer to Exceptions handling section on the userguide
        switch( $e->getCode() ){
            case 0 : $error = "Unspecified error."; break;
            case 1 : $error = "Hybriauth configuration error."; break;
            case 2 : $error = "Provider not properly configured."; break;
            case 3 : $error = "Unknown or disabled provider."; break;
            case 4 : $error = "Missing provider application credentials."; break;
            case 5 : $error = "Authentication failed. The user has canceled the authentication or the provider refused the connection."; break;
            case 6 : $error = "User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.";
                $adapter->logout();
                break;
            case 7 : $error = "User not connected to the provider.";
                $adapter->logout();
                break;
        }

        // well, basically your should not display this to the end user, just give him a hint and move on..
        $error .= "<br /><br /><b>Original error message:</b> " . $e->getMessage();
        $error .= "<hr /><pre>Trace:<br />" . $e->getTraceAsString() . "</pre>";
    }
endif;
?>

<div id="hello" style="background-image: url('assets/img/59.jpg');">
    <div class="container">
        <!-- Normal Signup Form -->

        <div class="row centered">
            <h3> Login/Signup with </h3>
        </div>

        <!-- Social  Logins -->

        <div class="row centered" style="padding-bottom:20px;">
            <div id="hsocial" class="col-lg-8 col-lg-offset-2">
                <div class="col-md-2">
                    <a href="login.php?provider=Facebook"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="col-md-2">
                    <a href="login.php?provider=LinkedIn"><i class="fa fa-linkedin"></i></a>
                </div>
                <div class="col-md-2">
                    <a href="login.php?provider=Twitter"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="col-md-2">
                    <a href="login.php?provider=Github"><i class="fa fa-github"></i></a>
                </div>
                <div class="col-md-2">
                    <a href="login.php?provider=Google"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="col-md-2">
                    <a href="login.php?provider=Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div><!-- /social -->
        </div>

        <!-- OR? -->
        <div class="row centered">
            <h2> OR </h2>
        </div>


        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 id="login_header"> Login <span class="label label-info" style="font-family:Lato">Signup</span></h2>
                <form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                    <button type="button" class="btn btn-info btn-lg btn-block">Submit</button>
                </form>
            </div><!-- /col-lg-8 -->
        </div>

        <div class="row centered">
            <h2>  </h2>
        </div>

    </div><!-- /row -->
</div> <!-- /container -->
</div><!-- /hello -->

<!-- -->
<?php
include 'header.php';
?>
