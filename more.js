let moreBtn=document.querySelector('#moreBtn');
moreBtn.addEventListener('click', function(){
    let publications=document.querySelectorAll('.publication.displayNone');
    for (let i = 0; i < publications.length && i<5; i++) {
        publications[i].classList.remove('displayNone');
    }
})