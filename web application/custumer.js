var button=document.getElementById('button');
var modal=document.getElementById('modal');
var modal1=document.getElementById('modal1');
var close=document.getElementsByClassName('modal-close')[0];
var more=document.getElementById('more');
button.onclick = function () {
    modal.style.display='block';


}

close.onclick = function () {
    modal.style.display='none';


}
window.onclick = function (event) {
    if (event.target.className == 'modal-background') {
        modal.style.display = 'none';

    }
    button1.onclick = function () {
        modal1.style.display = 'block';


    }
}

