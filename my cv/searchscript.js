{
    let button = document.getElementById("button");

    button.onclick = function(){
    let password = document.getElementById("password").value;
    let email = document.getElementById("email").value;
    let startresult = password.startsWith("UBa");
    let endresult = password.match(/\d+/g);
    // let pwdend = endresult[1].toString().length == 4;
    let endOfpwd = password.endsWith(endresult[1]);

    if (password.length !== 10) {
        alert("Invalid password length")
    }  else if(!endOfpwd) {
        alert("Password must contain 4 integers at the end")
    }else if (endresult[1].toString().length !== 4){
        alert("Wrong matricule format!")
    } else if (!startresult) {
        alert("Password must begin with \"UBa\"")
    }else{
        alert('Welcome ' + email)
        window.open('./cv.php','_self')
    }
    
    
    console.log(startresult);
    console.log(endresult);
    console.log(endresult[0]);
    console.log(endresult[1]);
    console.log(endresult[0].toString().length);
    console.log(endresult[1].toString().length);
    console.log(email);
    console.log(password);
    console.log(password.length);
    
    //console.log(password.search(/UBa/));
    //button.disabled = true;

    }

}
