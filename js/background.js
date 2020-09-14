const colorBtn = document.querySelector(".colorBtn");const bodyBcg = document.querySelector("body");
const colors = ['green', 'blue', 'yellow','black', 'purple','gold', '#3f4d67'];

colorBtn.addEventListener('click', changeColor);
function changeColor(){
let random = Math.floor(Math.random()*colors.length); bodyBcg.style.backgroundColor = colors[random];
}
 /*bodyBcg.style.backgroundColor = colors[2];*/

//hex code numbers
/*const hexNumbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F'];
const hexBtn = document.querySelector('.hexBtn');
const bodyBcg = document.querySelector('body');
const hex = document.querySelector('.hex');

hexBtn.addEventListener('click', getHex);
function getHex () {
    let hexCol = '#';
    for(let i = 0; i < 6; i++){
        let random = Math.floor(Math.random()*hexNumbers.length);
        hexCol += hexNumbers[random];
    }
    body.style.backgroundColor = hexCol;
    hex.innerHTML = hexCol;
}
*/ 
