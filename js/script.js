
function chechEmpty(){
    var soru = document.forms["myForm"]["soru"].value;
    var a = document.forms["myForm"]["a"].value;
    var b = document.forms["myForm"]["b"].value;
    var c = document.forms["myForm"]["c"].value;
    var d = document.forms["myForm"]["d"].value;
    var e = document.forms["myForm"]["e"].value;

    if(
        soru ==null ||
        soru =="" ||
        a==null ||
        a=="" ||
        b==null ||
        b=="" ||
        c==null ||
        c=="" ||
        d==null ||
        d=="" ||
        e==null ||
        e==""){
            alert("Boş alanları doldur!!!")
            return false;
        }else{
            return true;
        }

}