<?php
function startPage(){
	echo '
<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<title>Cherry::Web</title>
	<meta http-equiv="content-style-type" content="text/css">
	<meta http-equiv="content-script-type" content="text/javascript">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="/css/offdevice.css">
	<script src="/js/complete-en.js"></script>
	</head>
	<body class="guest-top guest">
		<div id="wrapper">
	';
}
function displayHeader() {
	echo '
			<div id="sub-body">
				<menu id="global-menu">
					<li id="global-menu-logo">
						<h1><a href="/"><img src="/img/menu-logo.png" alt="Miiverse" width="165" height="30"></a></h1>
					</li>
					<li id="global-menu-login">
						<form id="login_form" action="/web/20171107014225/https://miiverse.nintendo.net/auth/forward" method="post">
							<input type="hidden" name="location" value="https://miiverse.nintendo.net/">
							<input type="image" alt="Sign in" src="/img/signin_base.png">
						</form>
					</li>
				</menu>
			</div>
	';
}
function endPage(){
	echo '
		</div>
	</body>
</html>
	';
}
?>