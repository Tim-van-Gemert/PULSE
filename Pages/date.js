const a = new Date();
const days = ["Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag"];
let dayName = days[a.getDay()];


document.getElementById("date").innerHTML = `${dayName} ${a.getDay()} ${a.toLocaleString('default', { month: 'short' })} ${a.getFullYear()}`;

let dayOfWeek = date.getDay();
let dayOfMonth = date.getDate();
switch (dayOfWeek) {
	case 0:
		document.getElementById("dateyesterday").innerHTML = "Saturday";
		document.getElementById("datetoday").innerHTML = "Sunday";
		document.getElementById("datetomorrow").innerHTML = "Monday";
	case 1:
		document.getElementById("dateyesterday").innerHTML = "Sunday";
		document.getElementById("datetoday").innerHTML = "Monday";
		document.getElementById("datetomorrow").innerHTML = "Tuesday";
	case 2:
		document.getElementById("dateyesterday").innerHTML = "Monday";
		document.getElementById("datetoday").innerHTML = "Tuesday";
		document.getElementById("datetomorrow").innerHTML = "Wednesday";
	case 3:
		document.getElementById("dateyesterday").innerHTML = "Tuesday";
		document.getElementById("datetoday").innerHTML = "Wednesday";
		document.getElementById("datetomorrow").innerHTML = "Thursday";
	case 4:
		document.getElementById("dateyesterday").innerHTML = "Wednesday";
		document.getElementById("datetoday").innerHTML = "Thursday";
		document.getElementById("datetomorrow").innerHTML = "Friday";
	case 5:
		document.getElementById("dateyesterday").innerHTML = "Thursday";
		document.getElementById("datetoday").innerHTML = "Friday";
		document.getElementById("datetomorrow").innerHTML = "Saturday";
	case 6:
		document.getElementById("dateyesterday").innerHTML = "Friday";
		document.getElementById("datetoday").innerHTML = "Saturday";
		document.getElementById("datetomorrow").innerHTML = "Sunday";
		break;
}

document.getElementById("dateyesterdaynum").innerHTML = dayOfMonth - 1;
document.getElementById("datetodaynum").innerHTML = dayOfMonth;
document.getElementById("datetomorrownum").innerHTML = dayOfMonth + 1;