function myFunction(e) {
    e.preventDefault();
    let name = document.getElementById("name").value;
   
    let error;
    let filter1 = /[a-zA-Z0-9_\.\-]/;
    if (!filter1.test(name)){
      error = "name not valid";

    } else {
       
      error = "name OK";
    }
    document.getElementById("demo1").innerHTML = error;

    let name2 = document.getElementById("name2").value;

    let error2;
    let filter2 = /[a-zA-Z0-9_\.\-]/;
    if (!filter2.test(name)){
      error2 = "name not valid";
    } else {
        // error2.removeAttribute('class','text-danger');
        // error2.setAttribute('class','text-success');
      error2 = "name OK";
    }
    document.getElementById("demo2").innerHTML = error2;

    let email = document.getElementById("email").value;
   
    let text1;
    let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)){
      text1 = "email not valid";
    } else {
        // text1.removeAttribute('class','text-danger');
        // text1.setAttribute('class','text-success');
      text1 = "Input OK";
    }
    document.getElementById("demo").innerHTML = text1;
     
    let password = document.getElementById('password').value;
    let letter = /[a-z]/;
    let upper  =/[A-Z]/;
    let number = /[0-9]/;
    let text;
    if(password.length < 6 || !letter.test(password) || !number.test(password) || !upper.test(password)) {
        if(password.length<6){
            passwordError.innerText="Please make sure password is longer than 6 characters.";
            
            
          return false;
        }
        
        if(!letter.test(password)){
            passwordError.innerText="Please make sure password includes a lowercase letter."
          return false;
        }
        if(!number.test(password)){
            passwordError.innerText="Please make sure Password Includes a Digit"
          return false;     
        }
        if(!upper.test(password)) {
            passwordError.innerText="Please make sure password includes an uppercase letter."
          return false;
        }
        
    }
    // } else {
    //     passwordError.removeAttribute('class','text-danger');
    //     passwordError.setAttribute('class','text-success');
    //     passwordError = "password OK";
         
    // }

}
 

function validation(e) {
    e.preventDefault();
    let email = document.getElementById("email").value;
   
    let text1;
    let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)){
      text1 = "email not valid";
    } else {
        // text1.removeAttribute('class','text-danger');
        // text1.setAttribute('class','text-success');
      text1 = "Input OK";
    }
    document.getElementById("demo").innerHTML = text1;
     
}
