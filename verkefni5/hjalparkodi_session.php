<?php
/* 
 * Sessions are one way of maintaining conversational state across multiple requests (e.g. multiple stateless HTTP requests.)
 * Notað til að auðkenna notendur, login, shopping cart (vista milli vefsíðna), access status.
 * You could create a variable called $_SESSION['status'] and give visitors access to different parts of the site depending on its
 * value, or no access at all if it hasn’t been set.
*/

// Sessions: 	$_SESSION[''] 

// 				Session er skrá sem er vistuð á miðlara, 
//				Í session skrá er hægt að vista hvaða upplýsingar sem er af hvaða stærð sem er.
//				Skraín er ekki sýnilegt neinum öðrum.
// 				The details of the session are stored on the server in plain text. t.d.  name | s:5:”David”;

// 				Til að vita hvaða skrá á miðlara tilheyri hvaða notanda (vafra), þá notum við cookie (session-cookie) í vafra
// 				sem inniheldur session ID sem er búið til (númer sem er með reference á viðeigandi skrá á miðlara) which is meaningless by //			   itself. 
//				clients just need to send an ID and the data is loaded .
//				Notendur sjá ekki og geta ekki breytt skrám (session) á miðlara. Þeir geta bara breytt ID number í vafra.
				
//				Session er notað t.d. fyrir user authentication, multipage form, shopping cart.
//				sessions won’t work if cookies are disabled in the user’s browser
//				you should never use session variables to store sensitive information, such as passwords or credit card details	

//				The problem with sessions is that when you close your browser you also loose the session. 
//				So, if you had a site requiring a login, this couldn't be saved as a session like it could as a cookie, 
//				and the user would be forced to re-login every time they visit (unlike cookies).



// Session Kóðasýnidæmi 

/* session_start():   Start new or resume existing session
   Þarf að vera í vefsíðu sem vill nota session, must be called before the PHP script generates any output, á undan <!Doctype html>. 
   PHP skipun: Sækja í vafra ID (session-cookie),finna session skrá á miðlara og opna hana til notkunar. 
   Ef ID eða session skrá finnst ekki (t.d. hefur ekki verið búin til enn) þá búa þá til nýtt ID (í vafra) til að tengjast þá session skrá á miðlara.
*/
session_start();  // skipun um að vinna með session
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
</head>
<body>
<?php
	// setjum í session skrá á miðlara, strenginn Kevin Yank
	$_SESSION['first_name'] = "Kevin";
	$_SESSION['last_name'] = " Yank";

 	$name = $_SESSION['first_name'] . "" . $_SESSION['last_name']; // load data from session file on server
	echo $name; 
?>
</body>
</html>
<?php
// Glósur
	// Að búa til session breytu og lesa úr t.d. formi:
	   $_SESSION['name'] = $_POST['name'];


	// Að unset (“eyða innihaldi”) í session breytu:
	   unset($_SESSION['name']);


	// Að unset (“eyða innihaldi” ) öllum session breytum:
	   $_SESSION = [];


	// Destroy a session:
	    $_SESSION = [];		// empty the $_SESSION array
		// invalidate the session cookie
			// Skýring: notar fallið session_name() til að núllstilla session cookie 
			// expire -24 klst, /  gildir fyrir allt domain.
	    if (isset($_COOKIE[session_name()])) {
	      setcookie(session_name(), '', time()-864000, '/');   
	    }
	    session_destroy();  // end session
?>