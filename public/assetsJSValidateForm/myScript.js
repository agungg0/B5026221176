function validateFormWhatsapp(){
    var whatsapp = document.getElementById("whatsapp");
    var msg = document.getElementById("msg");

    //cek hanya invalid
    if(whatsapp.value==""){
        whatsapp.focus();
        whatsapp.placeholder = "Example: 082132842826";
        alert("Whatsapp Number Must Be Filled");
        return false
    }

    if(isNaN(whatsapp.value)==true){
        whatsapp.focus();
        whatsapp.placeholder = "Example: 082132842826";
        alert("Enter an 11-13 digit number, you enter a letter");
        return false;
    }

    if(whatsapp.value.length!=12  || whatsapp.value.length!=11 || whatsapp.value.length!=13){
        whatsapp.focus();
        whatsapp.placeholder = "Example: 082132842826";
        alert ("Whatsapp number must be 11-13 digit");
        return false;
    }
}
