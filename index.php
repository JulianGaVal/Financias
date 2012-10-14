<html>
	<head>
		<title>::: FINANCIAS :::</title>
		<link rel=StyleSheet href="lib/css/clasica.css" type="text/css">
		<script type="text/javascript" src="lib/js/jquery.min.js"></script>
		<script type="text/javascript" src="lib/js/jquery-ui.js"></script>
		<script type="text/javascript" src="lib/js/general.js"></script>
		<script type="text/javascript">
		$(function(){
			$('.navImg')
			.mouseover(function(){
				$(this)
				.animate({
					height: '60'
				}, 500)
				.delay(2000)
				.animate({
					height: '20'
				}, 500);
			});
		});
		</script>
	</head>
	<body>
		<div id="messageModal" class="info" align="center">Loading...<!--span class="close"><a href="javascript: $('#messageModal').slideUp();">X</a></span--></div>
		<section style="display:block; position:relative;margin-top:5%;">
			<header id="head"><a href="#main">Financias</a></header>
			<article id="content">
				&nbsp;
			</article>
			<footer>&copy; Krainic 2012. Todos los derechos reservados. </footer>
		</section>
		<nav>
			<ul>
				<li><a href="#main">inicio</a></li>
				<li><a href="#register">Registrate!</a></li>
				<li><a href="#access">Accede</a></li>
			</ul>
			<span class="profile">
				<ul>
					<li><a href="javascript: alert('Hola Tux Penguin!');">Hola!</a></li>
					<li><a href="javascript: alert('Tux Penguin');"><img class="navImg" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSZQWHH7QR0Ur0-F0Nwfu9xGJHXGZx5_yQ9TtCujpu5CWs09TI8" height="20" title="Tux Penguin" border="0"></a></li>
				</ul>
			</span>
		</nav>
	</body>
</html>