<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class ="Dan">
<p> Coding is awesome </p>
	<div class ="Iwao">
	  <p> This is pretty cool </p>
		$( document ).ready(function(){
    $( "button.alert" ).on( "click", function() {
        console.log( "Hey you clicked me!" );
    });
    $( "<button class='alert'>Alert!</button>" ).appendTo( document.body );
});
	</div>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</body>
</html>