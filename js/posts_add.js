// setup options for ajax
var options = {
	type: 'POST',
	url: '/posts/p_add/',
	beforeSubmit: function(){
		$('#results').html("Adding...");
	},
	success: function(reponse){
		$('#results').html("Your post was added.");
	}
};

// using the above ajax the form
$('form').ajaxForm(options);