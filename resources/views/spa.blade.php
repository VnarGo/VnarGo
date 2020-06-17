<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue SPA Demo</title>
</head>
<body>

	<div class="nav-bar"></div>

	<div id="app">
        <cart></cart>
    	<app :premium="premium"></app>
    	
    </div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

<style type="text/css">
	
	body {
    	font-family: tahoma;
    	color:#282828;
    	margin: 0px;
  	}

  	 .nav-bar {
	    background: linear-gradient(-90deg, #84CF6A, #16C0B0);
	    height: 60px;
	    margin-bottom: 15px;
	  }

	  .cart {
	    margin-right: 25px;
	    float: right;
	    border: 1px solid #d8d8d8;
	    padding: 5px 20px;
	  }

</style>

