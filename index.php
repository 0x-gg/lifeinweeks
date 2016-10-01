<html>
<meta charset="UTF-8">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="app.css">
<script type="text/javascript" src='nprogress.js'></script>
<script type="text/javascript" src="paper-full.min.js"></script>
<div class="container-fluid">
<title>Your life in weeks</title>
</head>
<body>
<h1 align="center">Your life in <u id="head-ul" style="text-decoration-color: #ff9900;">weeks</u></h1>
<p align="center">(enter your date of birth below)</p>
<form>
<INPUT TYPE="number" class="glowing-border" placeholder="Day" NAME="day" id="form-day" required>
<INPUT TYPE="number" class="glowing-border" placeholder="Month" NAME="month" id="form-month" required>
<INPUT TYPE="number" class="glowing-border" placeholder="Year" NAME="year" id="form-year" required>
</form>
<div id="messages" style="white-space:pre;"></div><br>
<div class="center-this"><button type="submit" class="btn" id="date-button" value="Submit" onclick="
printweeks();
">Show weeks</button></div>
<canvas id="myCanvas" class="img-responsive"></canvas>
</body>
</div>
<script type="text/javascript" src="app.js"></script>
</html>