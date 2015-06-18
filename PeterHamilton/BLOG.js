function highlight(myObject) {
	myObject.style.backgroundColor = "grey";
}

function stopHighlight(myObject) {
	myObject.style.backgroundColor = "initial";
}

function _2011Display(link, year) {
		var display = document.getElementById("blog_content");
		if(link = document.getElementById("2011Sep3")) {
			display.innerHTML = "It’s been a while. For all parents ‘Summer Holiday’ explains the gap perfectly. Two months spent on a big family and friends holiday in Cornwall, there was also Centre Parcs, glamping, holiday club, long weekends with friends, cinema trips, playdates, sleepovers, new DS games. Anything and everything to keep Sophie and Felix occupied. Fortunately, Mrs H took them on the glamping trip without me. I haven’t got that much work done in one week since the good old bachelor days. Now I remember how I used to write the really big novels like ..<br/>";
			display.appendChild(readMoreBuilder("http://www.peterfhamilton.co.uk/index.php?mact=CGBlog,cntnt01,detail,0&cntnt01articleid=1&cntnt01returnid=107"));
			display.appendChild(goBackBuilder(year));
		} else if (link = document.getElementById("2011May5")) {
			display.innerHTML = "I am becoming a curmudgeon. According to Mrs H, that is. To see her point of view you have to look back on the start of April when the kids began their Easter holiday. We went down to Cornwall again (of which more later) for a week with friends. All very nice. Then the holiday went on and on before arriving at a very late Easter. I don’t know what it’s like for everyone else, but I tend to do less work when Sophie and Felix are on holiday. I know I shouldn’t ...<br />";
			display.appendChild(readMoreBuilder("http://www.peterfhamilton.co.uk/index.php?mact=CGBlog,cntnt01,detail,0&cntnt01articleid=2&cntnt01returnid=107"));
			display.appendChild(goBackBuilder(year));
		} else {
			display.innerHTML = "“It creates a rationale for the extremist reality we create.” Peter F. Hamilton, during the Science in Science Fiction panel. Er.... really? Are you sure? I don’t actually remember saying that. I’m not complaining, you understand. After all, it sounds quite smart and coherent. Then again I was on the panel with Kevin Anderson, China Mieville, Gary Gibson, and Steve Baxter; all of whom are very smart, articulate people. You have to ...<br />";
			display.appendChild(readMoreBuilder("http://www.peterfhamilton.co.uk/index.php?mact=CGBlog,cntnt01,detail,0&cntnt01articleid=3&cntnt01returnid=107"));
			display.appendChild(goBackBuilder(year));
		}
		
	}

	function goBackBuilder(mYear) {
		var goBack = document.createElement("a");
		goBack.appendChild(document.createTextNode("Go Back"));
		goBack.title = "Go Back";
		goBack.href = "http://localhost/PeterHamilton/index.php?index=5&blog=" + mYear;
		goBack.style.padding = "20px";
		goBack.style.cursor = "pointer";

		return goBack;
	}

	function readMoreBuilder(link) {
		var readMore = document.createElement("a");
			var readMoreText = document.createTextNode("Read More");
			readMore.appendChild(readMoreText);
			readMore.title = "Read More";
			readMore.href = link;
			readMore.style.cursor = "pointer";
			return readMore;
	}