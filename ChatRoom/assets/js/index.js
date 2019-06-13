$(document).ready(function() {
    // login
    $('#login').submit(function(e){
		$.ajax({
			type: "POST",
			url: "../index.php",
			data: {user: $('user').val()},
		    success: function (html) {
			    $('body').html(html);
		    }, error : function () {
			    alert('Error al acceder al chat room');
		    }}
        );      
		e.preventDefault();
    });
    
    // userszone
    function ajax() {
        $.ajax({
            type: "POST",
            url: "chat.php",
            data: {}, 
            success: function (html) {
                $('#chat').html(html);
            }, error : function () {
                alert('Error al cargar el chat');
            }
        });
       
    }
    document.getElementById('chat_box').onload = ajax();
    setInterval( ajax(), 1000 );
    document.getElementById('add_message').onsubmit = function(e){
        $.ajax({
            type: "POST",
            url: "../index.php",
            data: {username: $('username').val(), message: $('message').val()}, 
            success: function (html) {
                $('#chat').html(html);
            }, error : function () {
                alert('Error al enviar el mensaje al chat');
            }
        });
        e.preventDefault()
    }; 
});
