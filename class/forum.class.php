<?php 
/**
 * Class Name: Forum
 * @package   : Jiggasa
 * @author    : AL-AMIN
 * @access     public
 * @version   : 1.0
 * @author URL: http://parbona.net
 */
	require_once( dirname(dirname( __FILE__ ) ). '/include/config.php' );

	class Forum
	{
		private static $_connection;

		/**
		 * check DB connection
		 * @return string with DB
		 */
		public static function conn()
		{
			global $cont;

			if( isset($cont) )
			{
				return self::$_connection = $cont;
			}
			
			trigger_error( 'Failed to database connection'. mysql_error(), E_USER_ERROR );
			
			return self::$_connection;
		}	


		/**
		 * Subscribers/ Members Login by Forum.php page [Not single.php page login]
		 * @author : AL-AMIN
		 * @access public
		 */
		public static function member_login()
		{
			$errors = array();

			if( isset( $_POST['submit'] ) )
			{
				$userName = htmlentities( htmlspecialchars( trim( $_POST['uname'] ) ) );
				$password = htmlentities( htmlspecialchars( trim( $_POST['pw'] ) ) );
				

				if( $userName && $password )
				{
					$stmt = self::conn()->prepare( "SELECT * FROM subscribers WHERE userName= :userName" );
					
					$stmt->bindParam('userName', $userName, PDO::PARAM_STR);
					
					$stmt->execute();
					
					if( $stmt )
					{
						$db_uname = false;
						
						$db_pw = true; // By default it is true, If you don't set it.
						
						while( $row = $stmt->fetch() )
						{
							$db_uname = $row['userName'];
							
							$db_pw = $row['password'];
							
							$db_id = $row['userId'];
							$db_img = $row['profile_img'];

							/** when username don't match */
							if( $db_uname <> $userName )
							{
								$db_uname = false;
							}
							elseif( $db_pw <> md5($password) )
							{
								$db_pw = false;
							}
						}

						/** Don't match username or password. */
						if( $db_uname == false )
						{
							$errors[] = 'Oops! username don\'t match.';
						}
						elseif( $db_pw == false )
						{
							$errors[] = 'Oops! Don\'t match your password.';
						}
						elseif( $db_uname == true && $db_pw == true )
						{
							/** Check Remember me button  */
							// if( !empty($_POST['remember']) )
							// {
							// 	setcookie( 'uname', $userName, time() + 43200 );
							// 	setcookie( 'u_id', $db_id, time() + 43200 );
							// }
							// elseif( $_POST['remember'] == '' )
							// {
								$_SESSION['uname'] = $userName;
								$_SESSION['u_id']  = $db_id;
							// }
							
							header( 'location:./' );
						}
					}
				}
				else
				{
					$errors[] = 'Please enter username and password.';
				}
			}

			return $errors;
		}	


		/**
		 * Store user all information 
		 */
		public static function user_info( $u_name )
		{
			$stmt = self::conn()->prepare( "SELECT * FROM subscribers WHERE userName = :u_name" );
			$stmt->bindParam('u_name', $u_name, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetchAll();
		}


		/**
		 * Time calculate
		 * @param string
		 * @return time()
		 */
		public static function join_date( $u_name )
		{
			$current_time = time();

			$stmt = self::conn()->prepare( "SELECT * FROM subscribers WHERE userName = :u_name" );
			
			$stmt->bindParam( 'u_name', $u_name, PDO::PARAM_INT );
			
			if( $stmt->execute() )
			{
				while( $row = $stmt->fetch() )
				{
					$join_time = $row['date'];

					$diff = $current_time - $join_time;

					return self::_time_generate( $diff );
				}
			}	
		}


		/**
		 * Time generate
		 * @author : AL-AMIN
		 */
		private static function _time_generate( $diff )
		{
			switch( true )
			{
				/** Second calculate */
				case ( $diff < 60) :
				$count = $diff;
				if( $count == 0 )
					$count = 'a moment';
				elseif( $count == 1 )
					$suffix = 'second';
				else 
					$suffix = 'seconds';
				break;

				/** minute calculate */
				case ( $diff > 60 && $diff < 3600 ) :
				$count = floor( $diff/60 );
				
				if( $count == 1 )
					$suffix = 'minute';
				else 
					$suffix = 'minutes';
				break;

				/** hours calculate */
				case ( $diff > 3600 && $diff < 86400 ) :
				$count = floor( $diff/3600 );
				
				if( $count == 1 )
					$suffix = 'hour';
				else 
					$suffix = 'hours';
				break;


				/** day calculate */
				case ( $diff > 86400 && $diff < 2629743 ) :
				$count = floor( $diff/86400 );
				
				if( $count == 1 )
					$suffix = 'day';
				else 
					$suffix = 'days';
				break;


				/** month calculate */
				case ( $diff > 2629743 && $diff < 31556926 ) :
				$count = floor( $diff/2629743 );
				
				if( $count == 1 )
					$suffix = 'month';
				else 
					$suffix = 'months';
				break;


				/** year calculate */
				case ( $diff > 31556926 ) :
				$count = floor( $diff/31556926 );
				
				if( $count == 1 )
					$suffix = 'year';
				else 
					$suffix = 'years';
				break;

			}
			
			return $count .' ' .$suffix .' ago.';
		}


		/**
		 * people search
		 * @return people info
		 * @param string <array>
		 */
		public static function find_people( $value = '' )
		{
			$upper_value = ucwords( $value );
			
			if( !empty($value) )
			{
				$stmt = self::conn()->prepare("SELECT * FROM subscribers WHERE userName LIKE '%$value%' OR userName LIKE '%$upper_value%' OR Full_name LIKE '%$value%' OR Full_name LIKE '%$upper_value%' OR email LIKE '%$value%' OR email LIKE '%$upper_value%' OR location LIKE '%$value%' OR location LIKE '%$upper_value%' ");
				$stmt->execute();
				return $stmt->fetchAll();	
			}
		}


		/**
		 * Ask question
		 * @return string
		 * @param true
		 */
		public static function ask_question( $u_id )
		{
			if( isset($_POST['ask']) )
			{
				$qes = $_POST['text-post'];

				if( !empty($qes) )
				{
					$stmt = self::conn()->prepare( "INSERT INTO question VALUES( '', '$u_id', '$qes', NOW() )" );
					$stmt->bindParam('u_id', $u_id, PDO::PARAM_INT);
					$stmt->bindParam('qes', $qes, PDO::PARAM_STR);
					$stmt->bindParam('current_time', $current_time, PDO::PARAM_INT);
					$stmt->execute();
				}
			}
		}


		/**
		 * @return qes_id 
		 * @param int()
		 */
		private static function _find_qes_id()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM question, subscribers WHERE qes_id = userId ORDER BY q_id DESC" );
			
			$stmt->execute();

			return $stmt->fetchAll();
		}
		

		/**
		 * show question
		 * @return string < array() >
		 */
		public static function show_questions()
		{
			$qes_id = self::_find_qes_id();
			return $qes_id;
		}


		/**
		 * show all time for ask question
		 * @return time
		 */
		public static function show_time( $u_id )
		{
			$current_time = time();

			$stmt = self::conn()->prepare( "SELECT * FROM question WHERE qes_id = :u_id" );
			
			$stmt->bindParam( 'u_id', $u_id, PDO::PARAM_INT );

			if( $stmt->execute() )
			{
				while( $row = $stmt->fetch() )
				{
					$join_time = $row['time'];

					$diff = $current_time - $join_time;

					return self::_time_generate( $diff );
				}
			}
		}


		/**
		 * Insert user ans
		 * @param string<array>
		 */
		public static function given_ans( $q_id, $u_id, $ans )
		{
			if( !empty($q_id) || !empty($ans) || !empty($u_id) )
			{
				$q_id = $_POST['q_id'];
				$u_id = $_POST['userId'];
				$ans  = $_POST['give-ans'];

				$stmt = self::conn()->prepare( "INSERT INTO user_ans VALUES( '', '$q_id', '$u_id', '$ans', NOW() )" );
				$stmt->bindParam('q_id', $q_id, PDO::PARAM_INT);
				$stmt->bindParam('u_id', $u_id, PDO::PARAM_INT);
				$stmt->bindParam('ans', $ans, PDO::PARAM_STR);
				$stmt->execute();
			}
		}


		/**
		 * show user ans below the question
		 * @return string <array()>
		 * @author : AL-AMIN
		 */
		public static function show_ans()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM user_ans, subscribers WHERE user_ans.userId = subscribers.userId ORDER BY ans_id ASC" );
			$stmt->execute();
			return $stmt->fetchAll();
		}


		/**
		 * show right sidebar recent ans
		 * @access public 
		 */
		public static function sidebar_ans_show()
		{
			$stmt = self::conn()->prepare( "SELECT * FROM user_ans, subscribers WHERE user_ans.userId = subscribers.userId ORDER BY ans_id DESC LIMIT 6" );
			$stmt->execute();
			return $stmt->fetchAll();
		}


		/**
		 * Delete user question
		 * @return boolen true
		 */
		public static function detele_question( $q_id )
		{
			$stmt = self::conn()->prepare( "DELETE FROM question WHERE q_id = :q_id" );
			$stmt->bindParam('q_id', $q_id, PDO::PARAM_INT);
			$stmt->execute();
			header( 'location:./' );
		}


		/**
		 * Delete answer by user
		 * @return boolen true
		 */
		public static function delete_answer( $ans_id )
		{
			$stmt = self::conn()->prepare( "DELETE FROM user_ans WHERE ans_id = :ans_id" );
			$stmt->bindParam('ans_id', $ans_id, PDO::PARAM_INT);
			$stmt->execute();
			header( 'location:./' );
		}

		/**
		 * Show other profile info
		 * @return string < array() >
		 */
		public static function show_other_user( $uname )
		{
			$stmt = self::conn()->prepare( "SELECT * FROM subscribers WHERE userName = :uname" );
			$stmt->bindParam('uname', $uname, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}
?>