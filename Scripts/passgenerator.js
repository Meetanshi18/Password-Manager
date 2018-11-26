
    var generatePassBtn = document.getElementById("createPassBtn");
    generatePassBtn.addEventListener('click', function(e){

    var l = document.getElementById("noc").value;
    
    var length = parseInt(l);

    if (document.getElementById("digits").checked && document.getElementById("speChars").checked){
        var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!#$%&'()*+,-./:;=?@[^_`{|}~";
    }
    else if(document.getElementById("digits").checked){
        var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    }
    else if(document.getElementById("speChars").checked){
        var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&'()*+,-./:;=?@[^_`{|}~";
    }
    else{
        var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }


    var retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    var pass = document.getElementById("your--pass");
    pass.value = retVal;

    e.preventDefault();
    })



