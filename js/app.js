var hidebox = document.getElementById('signupbox').style.display = 'none';
var showbox = document.getElementById('signupbox').style.display = 'block';

const visibilityToggle = document.querySelector('.visibility');
const visibilityToggle2 = document.querySelector('.visibility__2');
const visibilityToggle3 = document.querySelector('.visibility__3');
const visibilityToggle4 = document.querySelector('.visibility__4');
const visibilityToggle5 = document.querySelector('.visibility__5');

const input = document.querySelector('.input-container input');
const input2 = document.querySelector('.create-password');
const input3 = document.querySelector('.change-password-one');
const input4 = document.querySelector('.change-password-two');
const input5 = document.querySelector('.change-password3');

var password1 = true;
var password2 = true;
var password3 = true;
var password4 = true;
var password5 = true;

visibilityToggle.addEventListener('click', function(){
    if(password1){
        input.setAttribute('type','text');
        visibilityToggle.innerHTML = 'visibility';
    }else{
        input.setAttribute('type','password');
        visibilityToggle.innerHTML = 'visibility_off';
    }
    password1 = !password1;
});



visibilityToggle2.addEventListener('click', function(){
    if(password2){
        input2.setAttribute('type','text');
        visibilityToggle2.innerHTML = 'visibility';
    }else{
        input2.setAttribute('type','password');
        visibilityToggle2.innerHTML = 'visibility_off';
    }
    password2 = !password2;
});

visibilityToggle3.addEventListener('click', function(){
    if(password3){
        input3.setAttribute('type','text');
        visibilityToggle3.innerHTML = 'visibility';
    }else{
        input3.setAttribute('type','password');
        visibilityToggle3.innerHTML = 'visibility_off';
    }
    password3 = !password3;
});

visibilityToggle4.addEventListener('click', function(){
    if(password4){
        input4.setAttribute('type','text');
        visibilityToggle4.innerHTML = 'visibility';
    }else{
        input4.setAttribute('type','password');
        visibilityToggle4.innerHTML = 'visibility_off';
    }
    password4 = !password4;
});


// visibilityToggle5.addEventListener('click', function(){
//     if(password5){
//         input5.setAttribute('type','text');
//         visibilityToggle5.innerHTML = 'visibility';
//     }else{
//         input5.setAttribute('type','password');
//         visibilityToggle5.innerHTML = 'visibility_off';
//     }
//     password5 = !password5;
// });
document.getElementById('signupbox').style.display = "none";
