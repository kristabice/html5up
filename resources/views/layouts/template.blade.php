<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/css/app.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

                                @include('layouts.nav')

				
						<!-- @include('layouts.header') -->

						@yield('content')

					</div>
				</div>
					@include('layouts.sidebar')

							<!-- Scripts -->

			<script src="js/jquery.min.js" type="text/javascript"></script>
			<script src="js/skel.min.js" type="text/javascript"></script>
			<script src="js/util.js" type="text/javascript"></script>
			<!--[if lte IE 8]><script src="/js/ie/respond.min.js"></script><![endif]-->
			<script src="js/main.js" type="text/javascript"></script>


	</body>
</html>