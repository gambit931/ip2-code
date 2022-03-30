const countEl = document.getElementById('count');

function updateCount() {
fetch('https://api.countapi.xyz/get/nathan/twite/?amount=1')
.then(res => res.json())
.then(res => {
countEl.innerHTML = res.value;
});
}


const month = new Month();
const months = [
"January"
"February"
"March"
"April"
"May"
"June"
"July"
"August"
"September"
"October"
"November"
"December"
];

document.querySelector('.month h2').innerHTML
= months[month.getMonth()];

document.querySelector('.month span').innerHTML
= month. toMonthString();




