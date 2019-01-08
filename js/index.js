let day = document.getElementById("days");
let hour = document.getElementById("hours");
let minute = document.getElementById("minutes");
let second = document.getElementById("seconds");


function launchTimer() {
  
  let currentDate = (new Date()).getTime();
  var d = new Date();  
  let launchDate = (new Date(2019, 1, 2, 0)).getTime();
  
  let timerDifference = launchDate - currentDate;
  
  let seconds = Math.floor(timerDifference/1000);
  let minutes = Math.floor(seconds/60);
  let hours = Math.floor(minutes/60);
  let days = Math.floor(hours/24);
  
  day.innerText = days;
  hour.innerText = hours%24;
  minute.innerText = minutes%60;
  second.innerText = seconds%60;
  
  setTimeout(launchTimer, 1000);
}

launchTimer();
