var myHeading = document.querySelector('h1');
myHeading.textContent = 'Witaj podróżniku!';

var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');
function setUserName() {
    var myName = prompt('Podaj nazwę.');
    localStorage.setItem('name', myName);
    myHeading.textContent = 'Witaj ponownie, ' + myName;
  }
  if(!localStorage.getItem('name')) {
    setUserName();
  } else {
    var storedName = localStorage.getItem('name');
    myHeading.textContent = 'Witaj ponownie, ' + storedName;
  }
  myButton.onclick = function() {
    setUserName();
  }
  