<?php 
/**
 * Captcha generate 
 * for registration form
 * @package   : Jiggasa
 * @author    : AL-AMIN
 * @version   : 1.0
 * @author URL: http://parbona.net
 * @access public
 */
	session_start();
	header( "Content-type:image/png" );
	
	/** set characters, length 7 and must be stay 'a' */
	$str = 'A';  
	for( $i = 0; $i < 2; $i++ ) 
	{  
	    /** this numbers refer to numbers of the ascii table */
	    $str .= chr( rand ( 48, 57 ) );  // Digit count(0-9), here store 2 digit. 
	    $str .= chr( rand ( 65, 90 ) );  // lower case characters(a-z), here store 2 letters.
	    $str .= chr( rand ( 97, 122 ) ); // upper case characters(A-Z), here store 2 letters. 
	}  

	$text = $str;
	$img_width = 220;
	$img_height = 100;

	/** store $text value for check register function */
	$_SESSION['secure'] = $text;

	/** Fonts call */
	$fonts = 'assets/data/fonts/arial.ttf';
	$font_size = 26;

	/** create image area */
	$img = imagecreate( $img_width, $img_height );

	/** set img color */
	// imagecolorallocate( $img, 255, 255, 255 ); // white color
	// $text_color = imagecolorallocate( $img, 0, 0, 0 ); // black color

	/** create img background */
	$color = imagecolorallocate($img, 255, 255, 255);
	$text_color = imagefilltoborder($img, 0, 0, $color, $color);

	/** draw 60 line for img */
	for( $i = 1; $i <= 60; $i++ )
	{
		$x1 = rand( 1, 300 );
		$y1 = rand( 1, 100 );
		$x2 = rand( 1, 90 );
		$y2 = rand( 1, 100 );

		imageline( $img, $x1, $y1, $x2, $y2, $text_color );
	}

	/* here 20 is angle, 60 is x-axis, 80 is y-axis */
	imagettftext( $img, $font_size, 20, 60, 80, $text_color, $fonts, $text ); 
	imagepng( $img );
?>