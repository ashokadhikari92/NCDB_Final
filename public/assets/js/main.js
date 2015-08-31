var user;
var user_id;
var user_div_id
var chat = {
    
	init : function() {
		$('.chat_list').on('click', '.conversation', this.displaychat);
		
		/* get current user */
		$.getJSON( base_url + "/getData/user", function( data ) {
			user = data;
            console.log("User's First Name : "+user.first_name);
			CHATAPP.CHATCLIENT.connect("localhost:7778",user.email,user.first_name);
		});
		
	},
	displaychat:function(){
        console.log(this.id);
        user_div_id = this.id;
        var to_email = $("#"+user_div_id).find(".userEmail").html();
        var title = $("#"+user_div_id).find(".userName").html();
        user_id = $("#"+user_div_id).find(".chat_user_id").html();
        console.log("User Id : "+user_id);
       // user_id = $("#"+user_div_id+".chat_user_id").text();
		/* chat configuration */
		
		var new_chat_window = CHATAPP.CHATWINDOW(user_id, title, to_email, CHATAPP.CHATCLIENT.getSocket());
		new_chat_window.init();
	}

};

$(document).ready(function() {
	chat.init();
	
	$('#quote-carousel').carousel({
		    pause: true,
		    interval: 4000
		  });
});

