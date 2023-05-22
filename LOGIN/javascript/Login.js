const myButton = document.getElementById('btn2');
const myButton2 = document.getElementById('btn3');
const myElement = document.getElementById('form1');
const myElement2 = document.getElementById('form2');

myButton.onclick = function() {
  myElement.style.opacity = '0';
  myElement.style.zIndex = '0';
  myElement2.style.opacity = '1';
  myElement2.style.zIndex = '1';
}

myButton2.onclick = function() {
  myElement.style.opacity = '1';
  myElement2.style.opacity = '0';
  myElement2.style.zIndex = '0';
  myElement.style.zIndex = '1';
}