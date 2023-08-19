const postData = async (url = '', data = {}) => {
    const response = await fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    });
    return response.status; 
  }
  function readCookie(name) {
    var matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }
  function deconsructor(date, options, separator) {
    function format(option) {
       let formatter = new Intl.DateTimeFormat('ru', option);
       return formatter.format(date);
    }
    return options.map(format).join(separator);
 }
  function formatDateString(date) {
    let dateString=deconsructor(date, [{year: 'numeric'}, {month: '2-digit'}, {day: '2-digit'}], "-");
    let timeString=deconsructor(date, [{hour: '2-digit'}, {minute: '2-digit'}, {second: '2-digit'}], ":");
    return dateString+" "+timeString;
  }
  


document.querySelector('#sendComment').addEventListener('click', function(){
    let comment=document.querySelector("#comment").value;
    if(comment===""){
        document.querySelector('#noComment').innerHTML="Нельзя отправить пустое сообщение";
    }
    else{
        let publicationId=document.querySelector("#publicationId").value;
        let userDataJson=JSON.parse(readCookie('user'));
        let data={ publicationId : publicationId, comment:comment, userId:userDataJson.id };
        postData('/createComment.php',  data )
        .then((data) => {
          if(data===200){
            let comments= document.querySelector('#comments');
            let commentElement= document.createElement('div');
            let containerComment=document.createElement('div');
            let timeComment=document.createElement('p');
            let loginComment=document.createElement('p');
            let textComment=document.createElement('p');
            comments.prepend(commentElement);
            containerComment.append(timeComment);
            containerComment.append(loginComment);
            commentElement.append(containerComment);
            commentElement.append(textComment); 
            commentElement.classList.add('comment');
            containerComment.classList.add('containerComment');
            timeComment.classList.add('timeComment');
            loginComment.classList.add('loginComment');
            textComment.classList.add('textComment');
            timeComment.innerHTML=formatDateString(new Date());
            loginComment.innerHTML=userDataJson.login;
            textComment.innerHTML=comment;
            document.querySelector("#comment").value="";
            document.querySelector('#countComment').innerHTML++;
          }
          else{
            document.querySelector('#noComment').innerHTML="Не удалось отправить комметарий";
          }
  });
    }
    
})