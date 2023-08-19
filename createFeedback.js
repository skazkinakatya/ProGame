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

  
document.querySelector('#btnFeedback').addEventListener('click', function(){
    let userName=document.querySelector("#nameFeedback").value;
    let userEmail=document.querySelector("#emailFeedback").value;
    let text=document.querySelector("#textFeedback").value;

    if(userName==="" || userEmail==="" || text===""){
        document.querySelector('#errorFeedback').innerHTML="Заполните все поля";
    }
    else{
        let data={ userName : userName, email:userEmail, text:text };
        postData('/createFeedback.php',  data )
        .then((data) => {
          console.log(data);
          document.querySelector("#nameFeedback").value="";
          document.querySelector("#emailFeedback").value="";
          document.querySelector("#textFeedback").value="";
  });
    }
    
})