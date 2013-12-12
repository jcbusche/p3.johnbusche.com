$('#display-btn').click(function(){
	var words = $("#toread").val().split(' ');
	var numwords = words.length;
    var chunksize = $("#chunksize").val();
    var cpm = $("#speed").val();
    var counter = 0;
    var counter2 = 0;
    console.log(words);
    console.log(numwords);
    var chunks = [];
    for (k = 0; k < numwords/chunksize ; k ++){
        chunks[k] = "";
    }
    for (i = 0; i< numwords; i+=chunksize) {
        var diff = numwords - i;
        if (diff >= chunksize +1){
            for (j = 0; j < chunksize; j++) {
                chunks[counter2] = chunks[counter2]  + words[i + j] + " ";
            }
        }
        else {
            for (j = 0; j< diff; j++){
                chunks[counter2] = chunks[counter2] + words[i + j] + " ";
            }
        }
        counter2 = counter2 + 1;
    }
    console.log(chunks);
    setInterval(function(){
        $('#display').text(chunks[counter]);
        counter = counter + 1 ;
     }, 60000/cpm);
});
        