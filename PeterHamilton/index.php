<html>
	<head>
<?php
	$index = getIndex();

	function getIndex() {
		if(isset($_GET["index"])) {
		return $_GET["index"];		
	} else {
		return 1;
	}
}
	function updateSite($i) {
		switch($i) {
			case 1: //Base
				include 'base.html';
				
				break;
			case 2: // About
				include 'about.php';
				include 'base.html';
				//include 'test1.html';
				break;
			case 3: // Artwork
				include 'base.html';
				include 'artwork.php';
				break;
			case 4: //Books
				include 'base.html';
				include 'books.php';
				break;
			case 5: //Blog
				include 'base.html';
				include 'BLOG.php';
				break;
			case 6: //Contacts
				include 'base.html';
				include 'contact.php';
				break;
			default:
				include 'base.html';
				//include 'title.html';				
				break;	
		}
	}
	updateSite($index);
?>
</head>
<body></body>
</html>
