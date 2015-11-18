<html>
<head>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
<script>
$(function(){
	$("#bt").click(function(){
	    $.get("http://localhost:8080/index/index",function(response,status,xhr){
	    	 alert(response);
	    });
	});
});
</script>
</head>
<body>
<button id="bt" type="button">ajax</button>
<div id="dv" ></div>
</body>
</html>