function validation(){
    var fname = document.getElementById('fname').value;
     var lname = document.getElementById('lname').value;
     var roll = document.getElementById('roll').value;
     var Email = document.getElementById('email').value;
    var gender = document.getElementById('gender').value;
    var birthday = document.getElementById('date').value;
  
    if(fname==""){
        alert("Please enter your first name");
        return false;
         }
    
    
    if(lname==""){
        alert("Please enter your first name");
        return false;
         }
    
    
    if(roll==""){
        alert("Please enter your first name");
        return false;
         }
    
     atpos = Email.indexOf("@");
         dotpos = Email.lastIndexOf(".");
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
           return false;
         }
    if(email==""){
        alert("Please enter your first name");
        return false;
         }
    
    if(gender==""){
        alert("Please enter your first name");
        return false;
         }
    
    if(birthday==""){
        alert("Please enter your first name");
        return false;
         }
    
}