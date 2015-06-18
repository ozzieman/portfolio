
<script type = "text/javascript" src = "BLOG.js">
</script>
<!--Year Chooser-->
<div style = "position:absolute; top:20%; left:10%; height:20%; width:5%; line-spacing:30px; font-size:20px; background-color:black; opacity:0.7;"></div>
<div style = "position:absolute; top:20%;left:10%; padding-left:10px; padding-top:5px;height:20%;">
	<a onmouseover = "highlight(this)" onmouseout = "stopHighlight(this)" href = "http://localhost/PeterHamilton/index.php?index=5&blog=2012">2012</a><br/>
	<a onmouseover = "highlight(this)" onmouseout = "stopHighlight(this)" href = "http://localhost/PeterHamilton/index.php?index=5&blog=2011">2011</a><br/>
	<a onmouseover = "highlight(this)" onmouseout = "stopHighlight(this)" href = "http://localhost/PeterHamilton/index.php?index=5&blog=2010">2010</a><br/>
	<a onmouseover = "highlight(this)" onmouseout = "stopHighlight(this)" href = "http://localhost/PeterHamilton/index.php?index=5&blog=2009">2009</a><br/>
	<a onmouseover = "highlight(this)" onmouseout = "stopHighlight(this)" href = "http://localhost/PeterHamilton/index.php?index=5&blog=2008">2008</a><br/>
	<a onmouseover = "highlight(this)" onmouseout = "stopHighlight(this)" href = "http://localhost/PeterHamilton/index.php?index=5&blog=2007">2007</a><br/>
	<a onmouseover = "highlight(this)" onmouseout = "stopHighlight(this)" href = "http://localhost/PeterHamilton/index.php?index=5&blog=2006">2006</a><br/>
</div>

<!-- Background-->
<div style = "position:absolute; left:50%; top:25%; width:35%; height:40%; background-color:black; opacity:0.7; color:white;"></div>

<!-- Content-->
<div id = "blog_content" style = "position:absolute; left:50%; top:25%; width:25%; height:25%; font-family:verdana; font-size:14px;color:white; padding:10px;">
<!-- Year Display-->

<?php
	$year = getYear();
	updateBlog($year);

	function getYear() {
		if(isset($_GET["blog"])) {
			return $_GET["blog"];
		} else {
			return 2012;
		}
	}
	/*
		<!-- 
		id = "2011May5" onclick = "_2011Display(this)"
		id = "2011Sep3" onclick = "_2011Display(this)
	*/


	function updateBlog($y) {
	switch($y) {
			case 2012:
				echo "All right then. This is my third attempt to get this blog piece written this month. 
				As you may have noticed it's been a while since the last one was posted around here. To be honest , 
				I'm only managing this because I'm sitting at home waiting for the postman to deliver the proof manuscript for 
				Great North Road -and it's raining so I can't get out into the garden, which needs mowing, weeding, the fruit cage 
				sorting out...  ...";
				echo "<br/><br/>";
				echo "<a href = 'http://www.peterfhamilton.co.uk/index.php?mact=CGBlog,cntnt01,detail,0&cntnt01articleid=40&cntnt01returnid=107'>Read More</a>";
			break;
			case 2011:
				echo "<p  style = 'cursor:pointer;' id = '2011Sep3' onclick = '_2011Display(this, 2011)' onmouseover = 'highlight(this)' onmouseout = 'stopHighlight(this)'>September 3rd</p>";
				echo "<p style = 'cursor:pointer;' id = '2011May5' onclick = '_2011Display(this, 2011)' onmouseover = 'highlight(this)' onmouseout = 'stopHighlight(this)' >May 5th</p>";
				echo "<p style = 'cursor:pointer;' id = '2011Feb14' onclick = '_2011Display(this, 2011)' onmouseover = 'highlight(this)' onmouseout = 'stopHighlight(this)'>Febuary 14th</p>";
				break;
			case 2010:
				echo "Nothing available Here";
				break;
			case 2009:
					echo "Nothing available Here";
				break;
			case 2008:
					echo "Nothing available Here";
				break;
			case 2007:
				echo "Nothing available Here";
				break;
			case 2006:
				echo "Nothing available Here";
				break;
			default:
				echo "Nothing available Here";
				break;
		}
	}

?>

</div>



