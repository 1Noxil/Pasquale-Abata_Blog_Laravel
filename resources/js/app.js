import 'boxicons';
import './bootstrap';
import 'bootstrap';

/* hide password button */

let password_hide_wrap = document.querySelector('#password-hide-wrap');
let password = document.querySelector('#password');

password_hide_wrap.addEventListener('click', function(){
    if(password.type === 'password'){
        password.type = 'text';
        password_hide_wrap.innerHTML = '<i class="bi bi-eye"></i>';
    } else{
        password.type = 'password';
        password_hide_wrap.innerHTML = '<i class="bi bi-eye-slash"></i>';
    };
});

