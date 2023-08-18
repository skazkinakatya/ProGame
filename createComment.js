const postData = async (url = '', data = {}) => {
    const response = await fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    });
    return response.text(); 
  }
  function readCookie(name) {
    var matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }
  


document.querySelector('#sendComment').addEventListener('click', function(){
    let comment=document.querySelector("#comment").value;
    if(comment===""){
        document.querySelector('#noComment').innerHTML="Введите сообщение";
    }
    else{
        let publicationId=document.querySelector("#publicationId").value;
        let userDataJson=JSON.parse(readCookie('user'));
        let data={ publicationId : publicationId, comment:comment, userId:userDataJson.id };
        postData('/createComment.php',  data )
        .then((data) => {
        console.log(data); 
  });
    }
    
})