<html>
<head>
 <script src="../bootstrap/jquery-2.1.4.min.js"></script>
<script>
   $(function(){
	    $("#bt").click(function(){
	       $.post("test.php",function(data){
	    	   alert(data);
		       })
		    })
	   })
</script>
</head>
<body>
<input type="button" id = "bt" value="test"/>
</body>
</html>