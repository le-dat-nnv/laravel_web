/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
$(document).ready(function() {
  $('#submitform').click(function(event) {
//        alert('tôi đang test');
        event.preventDefault(); // ngăn chặn
        var user = $('input[name=user]').val();
        var pass = $('input[name=pass]').val();
        if(user == '') {
            $('#userError').text('Vui lòng không để trống trường user').css('display' , 'block');
            return false;
        }
        if(user) {
            $('#userError').text('');
        }
        if(pass == '') {
            $('#passError').text('Vui lòng không để trống trường pass');
            return false;
        }
        if(pass) {
            $('#passError').text('');
        }
        // Nếu form hợp lệ thì submit form
        $('form').submit();
  })
});
