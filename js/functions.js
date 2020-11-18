// Switches color mode on website (light or dark mode)
function switchMode(mode) {
	// Change current mode
	if (mode == 'dark') {
		currentMode == 'dark';

		// Set styling
		fontColor = '#FFFFFF';
		primaryColor = '#323546';
		secondaryColor = '#242633';
		thirdColor = '#2c2f3e';
		smallHeadingWeight = 100;

		// Set button
		buttonImg = "<img src='" + darkModeImg[0] + "' alt='" + darkModeImg[1] + "'/>";
		document.getElementById('change_mode_btn').onclick = function() {
			switchMode('light');
		};
	}
	else {
		currentMode == 'light';

		// Set styling
		fontColor = '#000000';
		primaryColor = '#b6b6b6 ';
		secondaryColor = '#a9a9a9 ';
		thirdColor = '#c3c3c3 ';
		smallHeadingWeight = 300;

		// Set button
		buttonImg = "<img src='" + lightModeImg[0] + "' alt='" + lightModeImg[1] + "'/>";
		document.getElementById('change_mode_btn').onclick = function() {
			switchMode('dark');
		};
	}

	// Change font color
	document.getElementsByTagName('BODY')[0].style.color = fontColor;
	document.getElementById('nav').style.color = fontColor;

	// Change font color of all a
	for (let i = 0; i < document.getElementsByTagName('a').length; i++) {
		document.getElementsByTagName('a')[i].style.color = fontColor;
	}

	// Change font color of p all p
	for (let i = 0; i < document.getElementsByTagName('P').length; i++) {
		let p = document.getElementsByTagName('P')[i];

		if (p.className != 'post_content') {
			document.getElementsByTagName('P')[i].style.color = fontColor;
		}
	}

	// Change background color of all tr in table
	for (let i = 0; i < document.getElementsByTagName('tr').length; i++) {
		// Check if index is even
		if (i % 2 == 0) {
			document.getElementsByTagName('tr')[i].style.background = thirdColor;
		}
		else {
			document.getElementsByTagName('tr')[i].style.background = secondaryColor;
		}
	}

	// Change font weight for all h2 and h3
	for (let i = 0; i < document.getElementsByTagName('h2').length; i++) {
		document.getElementsByTagName('h2')[i].style.fontWeight = smallHeadingWeight;
	}
	for (let i = 0; i < document.getElementsByTagName('h3').length; i++) {
		let h3 = document.getElementsByTagName('h3')[i];

		if (h3.className != 'post_header') {
			h3.style.fontWeight = smallHeadingWeight;
		}
	}

	// Change background color
	document.getElementsByTagName('BODY')[0].style.background = primaryColor;
	document.getElementsByTagName('HTML')[0].style.background = primaryColor;
	document.getElementById('nav').style.background = secondaryColor;

	// Change button
	document.getElementById('change_mode_btn').innerHTML = buttonImg;
}

// Start clock
function startClock() {
	today = new Date();
	h = today.getHours();
	min = today.getMinutes();
	sec = today.getSeconds();

	displayClock();
}

// Display clock on page
function displayClock() {
	// Set 0 in front of minute or seconds if it's less than 10
	min = checkMS(min);
	sec = checkMS(sec);

	// Display time
	hourP.innerHTML = h;
	minP.innerHTML = min;
	secP.innerHTML = sec;

	var t = setTimeout(startClock, 500);
}

// Add 0 to min or sek if it's less than 10
function checkMS(n) {
	if (n < 10) {
		n = '0' + n;
	}
	return n;
}
