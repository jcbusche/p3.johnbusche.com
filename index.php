<!DOCTYPE html>
<head>

	<meta charset = "UTF-8">

	<title>John's Speed Reading Trainer</title>

	<!--Call the stylesheet-->
	<link rel = "stylesheet" href = "css/main.css" type "text/css">

	<!--jQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>



</head>
<body>
	<div id = 'title'>
		<h1>John's Speed Reading Trainer</h1>
		<p>This is an application to help you improve your reading speed by challenging yourself to read faster.  First, copy text from an article you want to read into the box below.  Then select your word chunk size and your chunk display rate.  These will determine how many words are displayed at a time and how fast the app will cycle through them. </p>

	<div id = 'text-input' class = 'input'>
		<label for = 'toread'>Place the text for your article here:</label><br>
		<input type='textarea' id = 'toread'>
		<br><br>

		<input type = 'button' id = 'display-btn' value = 'READ!'>
	<div>

	<div id = 'options' class = 'input'>

	</div>

	<div id = 'display'></div>

	<script type="text/javascript" src="js/main.js"></script>
    
</body>
</html>