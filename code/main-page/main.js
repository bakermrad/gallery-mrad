function changeBg(){
    const images = [
        'url("../images/sample/sample\ \(1\).jpg")',
        'url("../images/sample/sample\ \(2\).jpg")',
        'url("../images/sample/sample\ \(3\).jpg")',
        'url("../images/sample/sample\ \(4\).jpg")',
        'url("../images/sample/sample\ \(7\).jpg")',
    ]

    const section = document.querySelector("upperImg")
    const bg = images[Math.floor(Math.random()*images.length)];
upperImg.style.backgroundImage = bg;
}
setInterval(changeBg, 3000)

var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");
smallimg[0].onclick = function(){
    MainImg.src = smallimg[0].src;
}   
smallimg[1].onclick = function(){
    MainImg.src = smallimg[1].src;
} 
  smallimg[2].onclick = function(){
    MainImg.src = smallimg[2].src;
} 
  smallimg[3].onclick = function(){
    MainImg.src = smallimg[3].src;
}

// const changeSelected = (e) => {
//     const $select = document.querySelector('#mySelect');
//     $select.value = 'Green'
//   };
//   document.querySelector('.button').addEventListener('click', button);

var urlMenu = document.getElementById('profile');
urLMenu.onchange = function()
{
var useroption = this.options[this.selectedIndex];
if (useroption.value != "nothing")
{
window.open(useroption.value, "bedroom livingroom diningroom","");
}
}