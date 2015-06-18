<div style = "position:absolute; top:20%; left:15%; height:70%; width:75%; line-spacing:30px; font-size:20px; background-color:black; opacity:0.7;"></div>
<div id = "formDisplay"style = "position:absolute;top:20%; left:10%; height:70%; width:75%; line-spacing:30px; font-size:20px;"> 
	<form id = "forms"style = "position:absolute; left:40%;" action = "contact.php" method = "post">
		<label style = "color:white;">Name:</label><br/>
		<input type = "text" name = "name"/><br/><br/>
		<label style = "color:white;">Message:</label><br/>
		<input style = "height:200px; width:400px;"type = "text" name = "message"/>
		<input style = "position:absolute; top:100%;"type="submit" value="Submit">
	</form>
</div>


<script type = text/javascript> 
	
	function message(messageParam) {
		mDisplay = document.getElementById("formDisplay");
		forms = document.getElementById("forms");
		mDisplay.removeChild(forms);
		var message = document.createElement("h1");
		message.appendChild(document.createTextNode(messageParam));
		message.title = messageParam;
		message.style.color = "white";
		message.style.position = "absolute";
		message.style.left = "10%";
		mDisplay.appendChild(message);	
	}

	
</script>

<?php
	if(isset($_POST["name"]) && isset($_POST["message"])) {
		//do stuff
		$name = $_POST["name"];
		$message = $_POST["message"];
		file_put_contents("message.txt", $name."\n".$message);
		include 'base.html';
		echo "<script type = 'text/javascript'>message('Thank you for contacting us, we will get back to you soon!')</script>";
	} 
?>

