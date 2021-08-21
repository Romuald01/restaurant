const visibilityToggle = document.querySelector('.visibility');
// const createAccvisibilityToggle = document.querySelector('.visibility');
const input = document.querySelector('.input-container input');
// const createAccInput = document.querySelector('.create-accpsw input');
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

createAccvisibilityToggle.addEventListener('click', function(){
    if(password){
        createAccInput.setAttribute('type','text');
        visibilityToggle.innerHTML = 'visibility';
    }else{
        input.setAttribute('type','password');
        createAccvisibilityToggle.innerHTML = 'visibility_off';
    }
    password = !password;
});



