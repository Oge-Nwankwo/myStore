'use strict';
const btnClose = document.querySelector('#close-btn');
const bar = document.getElementById('bars');
const navBar = document.getElementById('navbar')


bar.addEventListener('click', function(){
    document.getElementById('navbar').style.display='block';
    document.querySelector('.navList').style.right='0';

})

btnClose.addEventListener('click', function(){
 document.getElementById('navbar').style.display='none';


})


// bar.addEventListener('click', function(){

// // navBar.classList.add='hidden';

// })

//   function hideNav(){
//     document.getElementById('navbar').style.display='none';
// }
// btnClose.addEventListener('click',hideNav);


//  btnClose.addEventListener('click', function(){
//     document.getElementById('navbar').style.display='none';

// })