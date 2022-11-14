
function isValidLogin(){
    var userName = document.getElementById("userName").value;
    var passWord = document.getElementById("passWord").value;
    var Candles = document.getElementById("Candles").value;
    var Presents = document.getElementById("Presents").value;
    var Balloons = document.getElementById("Balloons").value;
    var ship1 = document.getElementById("ship1").checked;
    var ship2 = document.getElementById("ship2").checked;
    var ship3 = document.getElementById("ship3").checked;
    
    //alert(document.getElementById("login").action);

    if(!(userName.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))){
        alert("Invalid Username, Username must be an email");
        return false;
    }
    
    //alert(document.getElementById("login").action);
    if(passWord.length == 0){
     alert("You must enter a password");
     return false;  
    }
    
    if(Balloons < 0 || Balloons == null){
        alert("Balloon Quantity cannot be negative or blank!");
        return false;
    }
  
    

    if(Candles < 0 || Candles == null){
        alert("Candles Quantity cannot be negative or blank!");
        return false;
    }


    if(Presents < 0 || Presents == null){
        alert("Presents Quantity cannot be negative or blank!");
        return false;
    }

    if(!(ship1 || ship2 || ship3)){
        alert("Please select a shipping option");
        return false;
    }

    
    document.getElementById("login").action = "customerBackend.php";
    
    

}

function resetForm(){
    var myForm = document.getElementById("login");

    myForm.reset();
}

function myPrint(){
    var recipt = document.getElementById("recipt").innerHTML;
    var oldPage = document.body.innerHTML;

    document.body.innerHTML = 
    "<html><head><link rel='stylesheet' href='style.css'><title></title></head><body>" + 
    recipt + "</body>";

    window.print();
    document.body.innerHTML = oldPage; 
}
