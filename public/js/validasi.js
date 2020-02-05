function validasi(){
    var x = document.getElementById("nim").value;
    var Regex = /(?=.*\d)((?=.*[A-Z])|(?=.*[a-z]))./i;
    if(x==null||x==""){
        alert("nim harus diisi");
        return false;
    }else if(x.length!=7){
        alert("nim harus memiliki 7 karakter");
    }else if(!Regex.test(x)){
        alert("nim hanya menerima angka dan huruf");
    }
    var x = document.getElementById("nama").value;
    if(x==null||x==""){
        alert("nama harus diisi");
        return false;
    }
}