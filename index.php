<!DOCTYPE html>
<head>

	<meta charset = "UTF-8">

	<title>John's Speed Reading Trainer</title>

	<!--Call the stylesheet-->
	<!--
	<link rel = "stylesheet" href = "css/main.css" type "text/css">
-->
	<link rel = "stylesheet" href = "css/bootstrap.css" type "text/css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<!--jQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>



</head>
<body>
	<div id = 'title' class = "header">
        <h1>John's Speed Reading Trainer</h1>
    </div>
        <div id = "explanation" class = "header">
        <p>This is an application to help you improve your reading speed by challenging yourself to read faster.  First, copy text from an article you want to read into the box below.  Then select your word chunk size and your chunk display rate.  These will determine how many words are displayed at a time and how fast the app will cycle through them. </p>
        </div>

    <div id = 'text-input' class = 'input'>
        <form>
            <textarea id = 'toread'  rows = "10" cols = "50">Place the text for your article here</textarea>
        <br><br>
        <label for = "chunksize">Words per chunk<label>
        <select id = "chunksize">
            <option value= 1 selected >1</option>
            <option value= 2 > 2 </option>
            <option value= 3 > 3 </option>
            <option value= 4 > 4 </option>
            <option value= 5 > 5 </option>
            <option value= 6 > 6 </option>
            <option value= 7 > 7 </option>
            <option value= 8 > 8 </option>
            <option value= 9 > 9 </option>
            <option value= 10 > 10 </option>
        </select>
        <label for = "speed">Chunks per minute<label>
        <select id = "speed">
            <option value= 60 selected >60</option>
            <option value= 70 > 70 </option>
            <option value= 80 > 80 </option>
            <option value= 90 > 90 </option>
            <option value= 100 > 100 </option>
            <option value= 110 > 110 </option>
            <option value= 120 > 120 </option>
            <option value= 130 > 130 </option>
            <option value= 140 > 140 </option>
            <option value= 150 > 150 </option>
            <option value= 160 > 160 </option>
            <option value= 170 > 170 </option>
            <option value= 180 > 180 </option>
            <option value= 190 > 190 </option>
            <option value= 200 > 200 </option>
            <option value= 210 > 210 </option>
            <option value= 220 > 220 </option>
            <option value= 230 > 230 </option>
            <option value= 240 > 240 </option>
            <option value= 250 > 250 </option>
            <option value= 260 > 260 </option>
        </select>
            
        <input type = 'button' id = 'display-btn' value = 'READ!'>
        
            
    </div>

    <div id = 'options' class = 'input'>

    </div>

    <div id = 'display'>Your text will appear here.</div>

	
    <script src = "js/main.js"></script>
</body>
</html>