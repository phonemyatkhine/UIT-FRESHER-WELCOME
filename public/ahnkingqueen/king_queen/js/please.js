var current = 1;
		//setInterval(next, 2000);

		function prev(){
			document.getElementById("slider"+current).style.display = "none";
			current -= 1;
			if (current < 1) {current=2;}
			document.getElementById("slider"+current).style.display = "block";
		}

		function next(){
			document.getElementById("slider"+current).style.display = "none";
			current += 1;
			if (current > 2) {current=1;}
			document.getElementById("slider"+current).style.display = "block";
		}
