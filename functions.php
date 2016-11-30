<?php 
	/**
	 * All functions goes here.
	 * @package   : Jiggasa
	 * @author    : AL-AMIN
	 * @version   : 1.0
	 * @author URL: http://parbona.net
	 * @access public
	 */
	defined( '_VALID' ) or die( 'Restricted Access!' );
	require_once ( dirname( __FILE__ ) .'/include/config.db.php');


	/**
	 * Subscribers / Members Registration Form
	 * @author : AL-AMIN
	 * @access public
	 */
	function register()
	{
		global $cont;

		$errors = array();

		if( isset( $_POST['submit_reg'] ) )
		{
			$fname 		 = htmlentities( htmlspecialchars( trim( $_POST['f_name'] ) ) );
			$uname 		 = htmlentities( htmlspecialchars( trim( $_POST['username'] ) ) );
			$email 		 = htmlentities( htmlspecialchars( trim( $_POST['email'] ) ) );
			$pw 		 = htmlentities( htmlspecialchars( trim( $_POST['password'] ) ) );
			$c_pw 		 = htmlentities( htmlspecialchars( trim( $_POST['c_pw'] ) ) );
			$select_name = htmlentities( htmlspecialchars( trim( $_POST['select-name'] ) ) );
			$option_name = htmlentities( htmlspecialchars( trim( $_POST['option-name'] ) ) );
			$captcha     = htmlentities( htmlspecialchars( trim( $_POST['captcha'] ) ) );

			/** photo upload... */
			$img_name   = $_FILES["profile_image"]["name"];
			// $upload_dir = 'assets/img/members/';
			$tmp_name   = $_FILES["profile_image"]["tmp_name"];
			// $dest_file  = $upload_dir . $img_name;
			$extension  = strtolower( substr( $img_name, strpos( $img_name, '.' ) + 1 ) );

			/** call $_SESSION['secure'] variable From captcha.php file */
			$captcha_img = $_SESSION['secure'];
			

			if( !empty( $fname ) || !empty( $uname ) || !empty( $email ) || !empty( $pw ) || !empty( $c_pw ) || !empty( $captcha ) || !empty( $img_name ) || $select_name == 'Select Country' || $option_name == 'Please Select Country' )
			{
				if( strlen( $uname ) < 3 || strlen( $uname ) > 20 )
				{
					$errors[] = '<div class="alert alert-error">
								<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Username length between 3 to 20 characters.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( strlen( $pw ) < 4 )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Password length minimum 4 characters.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( !filter_var( $email, FILTER_VALIDATE_EMAIL ) )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Your email is\'t valid. Please select a valid email address.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $pw <> $c_pw )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Oops! Don\'t match your password.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $captcha <> $captcha_img )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Oops! Don\'t match your captcha.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $select_name == 'Select Country' || $select_name == 'select-item' )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Please select location field.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $select_name == 'Bangladesh' || $option_name == 'home district' || $option_name == 'Select your Home district' )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Please select your home district name.</p>
						</div><!--  .alert .alert-error -->';
				}
				elseif( $select_name == 'Others' || $option_name == 'country' || $option_name == 'Select Country Name' )
				{
					$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Please select your country name.</p>
						</div><!--  .alert .alert-error -->';
				}
				else
				{

					/** Don't allow same email, before you are registred. */
					$stmt = $cont->prepare( "SELECT * FROM subscribers" );
					$stmt->execute();

					if( $stmt )
					{
						while( $row = $stmt->fetch() )
						{
							$db_uname = $row['userName'];
							$db_email = $row['email'];
				
							/** store value when database username is same */
							if( $db_uname == $uname )
							{
								$db_uname = 1;
							}

							/* store value when database email is same */
							if( $db_email == $email )
							{
								$db_email = 2;
							}
						}

						/** check when database username are same  */
						if( $db_uname == 1 )
						{
							$errors[] = '<div class="alert alert-error">
									<a href="" class="close" data-dismiss="alert">&times;</a>
				        			<p>Username already exits. Please try another username.</p>
								</div><!--  .alert .alert-error -->';
						}

						/** check when database email are same */
						elseif( $db_email == 2 )
						{
							$errors[] = '<div class="alert alert-error">
									<a href="" class="close" data-dismiss="alert">&times;</a>
				        			<p>E-mail already exits. Please try another E-mail.</p>
								</div><!--  .alert .alert-error -->';
						}
						else
						{
							$pw = md5( $pw );
							$time = time();

							$image = addslashes(file_get_contents($_FILES['profile_image']['tmp_name']));
							
							$image_name = addslashes($_FILES['profile_image']['name']);
							
							// move_uploaded_file( $tmp_name, $dest_file. );

							if( $extension == 'jpg' || $extension == 'jpeg' || $extension == 'gif' || $extension == 'png' || $extension == 'bmp' )
							{	
								/** Check it when photo size must be 1048576Kb or 1MB. */
								if( $_FILES['profile_image']['size'] < 1048576 ) 
								{
									$stmt = $cont->prepare( "INSERT INTO subscribers VALUES( '', '$fname', '$uname', '$pw', '$email', '$option_name/$select_name', '$image_name', '$time' )" );
									
									$stmt->execute();
									mkdir('subscribers/'. $cont->lastInsertId(), 0744 );
									
									$test = move_uploaded_file( $tmp_name, 'subscribers/'. $cont->lastInsertId(). '/'. $image_name );
									if( $test )
									{
										$errors[] = '<div class="alert alert-success">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p>Thank you for registering. Now you can login for ask question or comments any article.</p>
										</div><!--  .alert .alert-success -->';
									}
								}
								else
								{
									$errors[] = '<div class="alert alert-error">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p>Picture size must be 1MB.</p>
										</div><!--  .alert .alert-error -->';
								}
							}
							else
							{
								$errors[] = '<div class="alert alert-error">
										<a href="" class="close" data-dismiss="alert">&times;</a>
					        			<p>Picture must be a jpg/jpeg/gif/png</p>
									</div><!--  .alert .alert-error -->';
							}
						}
					}
				}
			}
			else
			{
				$errors[] = '<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
	        			<p>Some fields are required. Please try again.</p>
					</div><!--  .alert .alert-error -->';
			}	
		}

		return $errors;
	}


	/**
	 * Pw reovery / lost pw
	 * @author : AL-AMIN
	 */
	function password_lost()
    {
    	$errors = array();
    	
    	global $cont;

    	if( isset( $_POST['submit_lost'] ) )
    	{

    		$email = $_POST['email'];
    	
	    	if( !empty( $email ) )
	    	{
	    		if( filter_var( $email, FILTER_VALIDATE_EMAIL ) == FALSE )
	    		{
	    			$errors[] = '<div class="alert alert-error">
									<a href="" class="close" data-dismiss="alert">&times;</a>
				        			<p>Oops! Your E-mail is\'t valid.</p>
								</div><!--  .alert .alert-error -->';		
	    		}
	    		else
	    		{
					$stmt = $cont->prepare( "SELECT * FROM subscribers WHERE email = :email" );
					$stmt->bindParam( 'email', $email, PDO::PARAM_STR );
					$stmt->execute();
					if( $stmt )
					{
						// var_dump($stmt->fetch())
						$db_email = false;

						while( $row = $stmt->fetch() )
						{
							$db_email = $row['email'];
							$db_fname = $row['Full_name'];

							/* store value when database email are same */
							if( $db_email == $email )
							{
								$db_email = true;
							}
						}

						/** check email, when database email is't same for you want.  */
						if( $db_email == false )
						{
							$errors[] = '<div class="alert alert-error">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p>Oops! That\'s email is\'t correct for account in this website.</p>
										</div><!--  .alert .alert-error -->';							

						}
	    				elseif( $db_email == true )
	    				{
	    					$password = md5( _random_pw_generate(8) );
	    					$stmt = $cont->prepare( "UPDATE subscribers SET password = :password WHERE email = :email" );
	    					$stmt->bindParam( 'password', $password, PDO::PARAM_STR );
	    					$stmt->bindParam( 'email', $email, PDO::PARAM_STR );
	    					
	    					if( $stmt->execute() )
	    					{
	    						/** Sent request pw by your mail account */
								// $errors[] = 'You have successfully change your password.';
								// $from 	 = 'cseal.amin.09@gmail.com';
								$sitename = strtolower( $_SERVER['SERVER_NAME'] );
								$to 	  = $email;
								$subject  = 'Subject: Password Request For Login.<br>';
								$message  = "Dear ". $db_fname .", <br/>".
								"Your requesting password is = " . $password . "<br/>Now you can go below this link for login.<br/>".
								"<a href='http://localhost/myphpsite/cms_project' target='_blank'>".'http://localhost/myphpsite/cms/'.md5($password)."</a><br><br>".
								"Best Regards,<br/>Rakib<br>Web Application Developer";
 
								// if ( substr( $sitename, 0, 9 ) == 'localhost' ) 
								// {
									// $sitename = substr( $sitename, 9 );
								// }
								$from = 'noreplay@' . $sitename;

								$headers  = 'From: '. $from . "\r\n<br>" .
					            'Reply-To: '. $from . "\r\n<br>" .
					            'MIME-Version: 1.0' . "\r\n<br>" .
					            'Content-type: text/html; charset=utf-8' . "\r\n<br/><br/>" ;
					            
					        	if( mail( $to, $subject, $message, $headers ) )
					        	{
					        		$errors[] = '<div class="alert alert-success">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p><strong>Well done!</strong> I sent a password in your mail account. Now check your email for new password.</p>
										</div><!--  .alert .alert-error -->';
									// header('location:lost.php?p=forgot20%passwotd&token='.time().'&success=true');					        		
					        	}
					        	else
					        	{
					        		$errors[] = '<div class="alert alert-error">
											<a href="" class="close" data-dismiss="alert">&times;</a>
						        			<p>Sorry, the mail server is not active. Please try after sometime.</p>
										</div><!--  .alert .alert-error -->';
					        	}

	    					}
	    				}
	    			}
	    		}
	    	}
	    	else
	    	{
	    		$errors[] = '<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
		        			<p>Please select your email address.</p>
						</div><!--  .alert .alert-error -->';
	    	}
	    }
    	
    	return $errors;
	}


	/**
	 * Randomly pw generate
	 * @access private
	 */
	function _random_pw_generate( $length = 10, $type = 'password' )
	{
		$random = NULl;

		$chars  = 'abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		
		if( $type == 'password' )
		{
			$chars .= '`~!@#$%^&*()_-+={}[]|\;":,<>/?';
		}

		$index = 1;
		
		while( $index <= $length )
		{
			$max = strlen( $chars )-1;
		
			$num = rand( 0, $max );
		
			$tmp = substr( $chars, $num, 1 );
		
			$random .= $tmp;
		
			$index++;
		}

		return $random;
	}



	/**
	 * token count
	 */
	function token( $length, $type )
	{
		return _random_pw_generate( $length, $type );
	}

	/**
	 * Add all css file
	 * @author : AL-AMIN
	 */
	function add_css()
	{
		global $config;
		$css = array();
		
		$css[] = $config['BASE_URL']. '/assets/css/bootstrap.min.css';
		$css[] = $config['BASE_URL']. '/assets/css/bootstrap-responsive.min.css';
		$css[] = $config['BASE_URL']. '/assets/css/default.css';
		$css[] = $config['BASE_URL']. '/assets/font-awesome/css/font-awesome.min.css';
		return $css;
	}


	/**
	 * Add all js file
	 * @author : AL-AMIN
	 */
	function add_js()
	{
		global $config;
		$js = array();

		$js[] = '<script src="' .$config['BASE_URL'] .'/assets/js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>';
		$js[] = '<script src="' .$config['BASE_URL'] .'/assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>';
		$js[] = '<script src="' .$config['BASE_URL'] .'/assets/js/comment_insert.js" type="text/javascript" charset="utf-8"></script>';

		return $js;
	}
	
?>