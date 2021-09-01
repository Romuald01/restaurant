const visibilityToggle = document.querySelector('.visibility');
const visibilityToggle2 = document.querySelector('.visibility__2');

const input = document.querySelector('.input-container input');
const input2 = document.querySelector('.password');

var password1 = true;
var password2 = true;

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




// function firstButton(){
//     alert("first button");

// }
// function secondButton(){
//     alert("second button");
    
// }