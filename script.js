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

let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.menu');
menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
});
