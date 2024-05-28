import './bootstrap';
import 'bootstrap';

let input_password = document.querySelector('#input_password');
let hide_pass_wrap = document.querySelector('.hide_pass_wrap');

hide_pass_wrap.addEventListener('click', function() {
   if(input_password.type === 'password'){
       input_password.type = 'text';
       hide_pass_wrap.innerHTML = '<i class="hide_pass fa-regular fa-eye"></i>';
   } else{
       input_password.type = 'password';
       hide_pass_wrap.innerHTML = '<i class="hide_pass fa-regular fa-eye-slash"></i>';
   };
})