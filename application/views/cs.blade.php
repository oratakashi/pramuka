<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=1"/>
<title>Untitled Document</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ base_url('assets/comingson/') }}jquery.countdown.pack.js"></script>
<script type="text/javascript" src="{{ base_url('assets/comingson/') }}subscribe.js"></script>
<script type="text/javascript" src="{{ base_url('assets/comingson/') }}placeholder.js"></script>


<!-- COUNTDOWN OPTIONS -->
<script type="text/javascript">
$(function () {
 $('#countdown').countdown({until:$.countdown.UTCDate
 	
 	// Set the date to countdown to
 	(-0, 2017,  9 -1, 17),
 	
 	// Set the URL to load when the countdown reaches 0 0 0 0
 	// expiryUrl:'http://yournewsite.com', 
 	
 	//END OPTIONS
 	format: 'DHMS', layout:
'<div class="days">' + 
	'<div id="timer_days" class="numbers">{dnn}</div>'+
	'<div id="timer_days_label" class="labels">days</div>'+
'</div>'+
'<div class="hours">' + 
	'<div id="timer_hours" class="numbers">{hnn}</div>'+
	'<div id="timer_hours_label" class="labels">hours</div>'+
'</div>'+
'<div class="minutes">' + 
	'<div id="timer_mins" class="numbers">{mnn}</div>'+
	'<div id="timer_mins_label" class="labels">minutes</div>'+
'</div>'+
'<div class="seconds">'+
	'<div id="timer_seconds" class="numbers">{snn}</div>'+
	'<div id="timer_seconds_label" class="labels">seconds</div>'+
'</div>'
});
});
</script>
<link href="{{ base_url('assets/comingson/') }}reset.css" rel="stylesheet" type="text/css" />
<link href="{{ base_url('assets/comingson/') }}style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

</head>

<body>


<div class="wrapper">

	<div class="subtitle">
		<h2>Under Development</h2>
	</div>
	<div class="title">
		<h1>AWESOME</h1>
	</div>

	<div class="box">

		<div class="pointer"></div>
		<div class="css_box">
			<h3>LAUNCHING IN:</h3>

			<div id="countdown"></div>

			<div id="email_wrap">

				<!-- Subscription form -->
				<form id="subscribe" method="POST" action="">
					<input type="text" name="email" placeholder="your email address"  id="emailsub" class="text-input" />
					<input type="submit" class="subbutton" id="submitsub" name"submit" width="110" height="35" value="Email Me" />
					<div class="nospam">
						<span class="star">*</span>
						no spam we promise
					</div>
					<!-- Email Validation -->
					<div id="errorSubEmail" class="subError"></div>
					<span id="formSubProgress" class="subProgress"></span>
				</form>
			</div>
		</div>
    
    </div>
</div>
</body>
</html>
