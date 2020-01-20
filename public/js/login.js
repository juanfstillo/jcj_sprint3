var email = document.querySelector('input[name=email]');
var password = document.querySelector('input[name=password]');
var form = document.getElementById('formLogin');
console.log(form);

var regexMail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
email.onchange = function (){
}

email.onblur = function (){
  if (this.value.trim() == '') {
    alert('JCJ TENIS [ERROR]| Completa el campo email');
  }else if (!regexMail.test(this.value)) {
    alert('JCJ TENIS [ERROR]| El campo de mail tiene un formato invalido');
  }
}

form.onsubmit = function (event){
  if (this.value.trim() == '') {
    alert('JCJ TENIS [ERROR]| Completa el campo email');
    event.preventDefault();
  }
}

password.onchange = function (){

}

password.onblur = function (){
  if (this.value.trim() == '') {
    alert('JCJ TENIS [ERROR]| Completa el campo contrasena');
  }
}
