const nic = document.getElementById('nic');

function showNotification(msg){
    var note = document.getElementById("note");
    note.innerHTML = msg;
    note.style.display = "block";
   // setTimeout(hideNotification(),3000);
    setTimeout(function(){
    
      document.getElementById("note").style.display = "none";
    
    }, 4000);
    
  }

  function doCalculate() {
    
    var nic = document.getElementById('nic').value.trim();
    if(nic == ""){
        showNotification("Enter Your NIC ");
        return false;

    }
    var pattern = /[0-9]{9}[V|X|v|x]/;
    var newId = false;
    var NIC;
    if (nic.length == 12) {

        NIC = nic.substr(2, 5) + nic.substr(8, 12);
        nic = NIC + "v";

    }
    if (!pattern.test(nic)) {
        showNotification("Invalid NIC");
        return false;
    }else{
        return true;
    }   
}

function emailVal() {

    var regName = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$");

    if (inpEmail.value != "") {
        if (inpEmail.value.match(regName)) {
            return true;

        } else {
            showNotification("Enter a valid email");
            return false;
        }
    } else {
        showNotification("Email field can't be blank");
        return false;
    }
}
