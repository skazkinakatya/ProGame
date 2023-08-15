function readCookie(name) {
    var matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

  let userDataJson=readCookie('user');
  if(userDataJson){
    let userData=JSON.parse(userDataJson);
    document.querySelector('#userName').innerHTML=userData.login;
    document.querySelector('#divLogin').classList.add('displayNone');
    document.querySelector('#divUser').classList.remove('displayNone');
}


