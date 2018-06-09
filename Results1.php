<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<h1> </h1>
<script>
var i = 1
var allTextLines
$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "file:///C:/Users/Zack/Documents/School/ICS4U/bookings.csv",
        dataType: "text",
        success: function(data) {processData(data);}
     });
});
function processData(allText) {
	var x = 0;
    allTextLines = allText.split(/\r\n|\n/);
    var headers = allTextLines[0].split(',');
    var lines = [];

    for (i=1; i<allTextLines.length; i++) {
        var data = allTextLines[i].split(',');
        if (data.length == headers.length) {

            var tarr = [];
            for (var j=0; j<headers.length; j++) {
                tarr.push(headers[j]+":"+data[j]);
            }
            lines.push(tarr);
			var btn = document.createElement("BUTTON");
			var txt = document.createTextNode(allTextLines[i]);
			btn.appendChild(txt);
			btn.id = "option" + i
			document.body.appendChild(btn);
        }
    }
}
while(true){
	for(var x=i;x>0;x--){
	$("#option" + x).click(function(){
		
	});
	}
}


</script>




</body>
</html>
