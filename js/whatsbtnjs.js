
window.onload = (event) => {

 setTimeout(showmsg, 3000);
 setTimeout(hidemsg, 6000);
 function showmsg() {
   document.getElementById('msg').style.display="block";

}

function hidemsg() {
   document.getElementById('msg').style.display="none";

}

};
