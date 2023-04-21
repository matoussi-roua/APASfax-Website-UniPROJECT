const myButton = document.getElementById('btn2');
const myElement = document.getElementById('form1');
const myElement2 = document.getElementById('form2');

myButton.onclick = function() {
  myElement.style.opacity = '0';
  myElement2.style.opacity = '1';
}