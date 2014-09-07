<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bolt - Free Bootstrap 3 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/chart.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-bolt"></i></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<div id="hello">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 col-lg-offset-2 centered">
	    			<h1>Bolt Theme</h1>
	    			<h2>FREE BOOTSTRAP THEMES</h2>
	    		</div><!-- /col-lg-8 -->
	    	</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /hello -->
	
	<div id="green">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 centered">
					<img src="assets/img/iphone.png" alt="">
				</div>
				
				<div class="col-lg-7 centered">
					<h3>WHAT WE CAN DO?</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
		</div>
	</div>
	
<!--HAuth -->



    <?php
    session_start();

    // change the following paths if necessary
    $config = dirname(__FILE__) . '/../../hybridauth/config.php';
    require_once( "../../hybridauth/Hybrid/Auth.php" );

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



    <table width="500" border="0" cellpadding="2" cellspacing="2">
        <tr>
            <td align="left" valign="top">
                <fieldset>
                    <legend>Sign-in with one of these providers</legend>
                    &nbsp;&nbsp;<a href="?provider=Google">Sign-in with Google</a><br />
                    &nbsp;&nbsp;<a href="?provider=Yahoo">Sign-in with Yahoo</a><br />
                    &nbsp;&nbsp;<a href="?provider=Facebook">Sign-in with Facebook</a><br />
                    &nbsp;&nbsp;<a href="?provider=Twitter">Sign-in with Twitter</a><br />
                    &nbsp;&nbsp;<a href="?provider=MySpace">Sign-in with MySpace</a><br />
                    &nbsp;&nbsp;<a href="?provider=Live">Sign-in with Windows Live</a><br />
                    &nbsp;&nbsp;<a href="?provider=LinkedIn">Sign-in with LinkedIn</a><br />
                    &nbsp;&nbsp;<a href="?provider=Foursquare">Sign-in with Foursquare</a><br />
                    &nbsp;&nbsp;<a href="?provider=AOL">Sign-in with AOL</a><br />
                </fieldset>
            </td>
            <?php
            // try to get already authenticated provider list
            try{
                $hybridauth = new Hybrid_Auth( $config );

                $connected_adapters_list = $hybridauth->getConnectedProviders();

                if( count( $connected_adapters_list ) ){
                    ?>
                    <td align="left" valign="top">
                        <fieldset>
                            <legend>Providers you are logged with</legend>
                            <?php
                            foreach( $connected_adapters_list as $adapter_id ){
                                echo '&nbsp;&nbsp;<a href="profile.php?provider=' . $adapter_id . '">Switch to <b>' . $adapter_id . '</b>  account</a><br />';
                            }
                            ?>
                        </fieldset>
                    </td>
                <?php
                }
            }
            catch( Exception $e ){
                echo "Ooophs, we got an error: " . $e->getMessage();

                echo " Error code: " . $e->getCode();

                echo "<br /><br />Please try again.";

                echo "<hr /><h3>Trace</h3> <pre>" . $e->getTraceAsString() . "</pre>";
            }
            ?>
        </tr>
    </table>





<!-- -->



	<div id="f">
		<div class="container">
			<div class="row">
				<p>Crafted with <i class="fa fa-heart"></i> by BlackTie.co.</p>
			</div>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
