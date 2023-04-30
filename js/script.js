function hamdk(){
     var emailreg=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(emailreg.test(document.getElementById('email').value)==false){
        alert("Email không hợp lệ!");
        return false;
    }
    var sdt=document.getElementById('sdt');
    var sdtreg=/^[0-9]{10}$/;
    if(sdtreg.test(sdt.value)==false){
        alert("Số điện thoại không hợp lệ!");
        return false;
    }
   
    if(document.getElementById('matkhau').value.length<8){
        alert("Mật khẩu phải lớn hơn 8 ký tự!")
        return false;
    }
    if(document.getElementById('nhaplaimk').value != document.getElementById('matkhau').value){
        alert("Mật khẩu nhập lại không khớp!");
        return false;
    }
    return true;
}