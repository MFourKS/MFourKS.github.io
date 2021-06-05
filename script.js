// window.onload = function() {
//     alert("javaScript подлючён!");
// }
// проверка данных формы
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Неверно заполнена форма");
        return false;
    }
} 
// проверка email
// function validateEmail(email) 
//     {
//         // const str = 'hello world!';
//         // const result = /.*/

//         // var re = /.*/;
//         // switch(email){
//         //     case result.test(str):  alert(email + ' d');
//         //     return true;

    
//     return ;

//         }
//     }
    
function clickButton() {

var email = document.getElementById('email').value;
var re = /\S+@\S+\.\S+/;
var result;

re.test(email) ? result = 'email указан верно':result = 'email указан не верно';


// if (re.test(email)){ var result = 'email указан верно';}
// else {var result = 'email указан не верно';}

    // switch (email) {
    //     case  (validateEmail(email)):
    //         var result = 'email указан верно';
    //         break;
    //     default:
    //         var result = 'email указан не верно';
    //         break;
    // }

    alert(result);
    return result;
}
    // Вывод в консоль разработчика
console.log('anystring@anystring.anystring');


$(document).ready(function() {
  $('button').click(function(e) {
    // Stop form from sending request to server
    e.preventDefault();

    var btn = $(this);

    $.ajax({
      method: "POST",
      url: "https://jsonplaceholder.typicode.com/posts",
      dataType: "json",
      data: {
        "tables": btn.val(),
        'input': $('input').val()
      },
      success: function(data) {
        console.log(data);
      },
      error: function(er) {
        console.log(er);
      }
    });
  })
});