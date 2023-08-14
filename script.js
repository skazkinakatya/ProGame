let feedbackH=document.querySelector('.feedbackH');
let feedbackContainer=document.querySelector('.feedbackContainer');
let close=document.querySelector('.close');
let userListKey="users";
feedbackH.addEventListener('click', openContainer);
function openContainer() {
    feedbackContainer.classList.add('feedbackContainerOpen');
}
close.addEventListener('click', closeContainer);
function closeContainer() {
    feedbackContainer.classList.remove('feedbackContainerOpen');
}

document.querySelector('#register').addEventListener('click', registration);


function registration(){
    let formRegister=document.querySelector('#formRegister');
    let user={
        Login : formRegister.loginNameReg.value,
        Name : formRegister.nameReg.value, 
        Email : formRegister.emailReg.value,
        Tel : formRegister.numberReg.value,
        Password : formRegister.passwordReg.value
    }
    let userListJSON=localStorage.getItem(userListKey);
    let userList= {};
    if(userListJSON){
        userList=JSON.parse(userListJSON);
    }
    userList[user.Tel]=user;
    userListJSON=JSON.stringify(userList);
    localStorage.setItem(userListKey, userListJSON);
}

document.querySelector('#Enter').addEventListener('click', logIn);

function logIn(){
    let formEnter=document.querySelector('#formEnter');
    let numberEnter=formEnter.numberEnter.value;
    let passwordEnter=formEnter.passwordEnter.value;

    let userListJSON=localStorage.getItem(userListKey);
    let userList=JSON.parse(userListJSON);

    console.log(userList);

    if(userList.hasOwnProperty(numberEnter)){
        if(userList[numberEnter].Password==passwordEnter){
            alert("Вы вошли успешно");
            return;
        }
    }
    alert("Неверный логин или пароль")

}


let formReg=document.querySelector('.formReg');
document.querySelector('.regP').addEventListener('click', changeForm);


function changeForm() {
    console.log('ll');
    formReg.classList.add('formRegOpen');
}

