const sighInBtn = document.querySelector('.signIn-btn');
const sighUpBtn = document.querySelector('.signUp-btn');
const formBox = document.querySelector('.form-box');
const body =document.body;

sighUpBtn.addEventListener('click', function(){
    formBox.classList.add('active');
    body.classList.add('active');

})
sighInBtn.addEventListener('click', function(){
    formBox.classList.remove('active');
    body.classList.remove('active');
})
