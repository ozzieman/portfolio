
function menuButtonOnMouseOver() {
	 var highlight = document.getElementById("menuButtonHighlight");
	highlight.style.display = "inline"; //Menu Button Highlight
	document.getElementById("dropdownMenu").style.display = "inline"; //Dropdown Menu Highlight
	document.getElementById("dropdownLinks").style.display = "inline";
	
}


function menuButtonOnMouseOut(image) { 
	var highlight = document.getElementById("menuButtonHighlight");
	highlight.style.display = "none";
	document.getElementById("dropdownMenu").style.display = "none";
	document.getElementById("dropdownLinks").style.display = "none";	
}


function dropdownOut() {
	document.getElementById("dropdownMenu").style.display = "none";
	document.getElementById("dropdownLinks").style.display = "none";
}

function dropdownStart() {
	document.getElementById("dropdownMenu").style.display = "inline";
	document.getElementById("dropdownLinks").style.display = "inline";
}

function highlightLink(link) {
	link.style.backgroundColor = "grey";
	link.style.cursor = "pointer";	
}

function stopHighlightLink(link) {
	link.style.backgroundColor = "initial";	
}


function goHome() {
	window.location.href = 'http://localhost/PeterHamilton/index.php';
}

