const visibilityToggle = document.querySelector('.visibility');
const input = document.querySelector('.input-container input');
var password = true;

visibilityToggle.addEventListener('click', function(){
    if(password){
        input.setAttribute('type','text');
        visibilityToggle.innerHTML = 'visibility';
    }else{
        input.setAttribute('type','password');
        visibilityToggle.innerHTML = 'visibility_off';
    }
    password = !password;
});

const createAccVisibilityToggle = document.querySelector('.visibility');
const createAccInput = document.querySelector('.create-accpsw createAccinput');
var password = true;

createAccVisibilityToggle.addEventListener('click', function(){
    if(password){
        createAccInput.setAttribute('type','text');
       createAccVisibilityToggle.innerHTML = 'visibility';
    }else{
        createAccInput.setAttribute('type','password');
       createAccVisibilityToggle.innerHTML = 'visibility_off';
    }
    password = !password;
});
