<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>

		<style type="text/css">
			*
			{
				margin: unset;
				box-sizing: border-box;
				border: none;
				background-color: unset;
			}

			.dropdown
			{
				width: fit-content;
			}

			.dropbtn
			{
				color: orange;
				cursor: pointer;
			}

			.dropcontent *
			{
				display: block;
			}

			.dropcontent
			{
				display: none;
				list-style-type: none;
				padding: unset;
				border: 1px solid black;
			}

			.dropcontent a
			{
				padding: 0px 20px 0px 10px;
				color: black;
				text-decoration: none;
			}

			.dropcontent a:hover
			{
				background-color: lightgray;
			}

			.show
			{
				display: block;
			}
		</style>

		<script type="text/javascript">
			function show()
			{
				document.getElementById("dropcontent").classList.toggle("show");
			}

			window.onclick = function(event)
			{
				if(!event.target.matches(".dropbtn"))
				{
					document.getElementById("dropcontent").style.display="block";
				}
			}
		</script>
	</head>
	<body>
		<div id="dropdown1" class="dropdown">
			<button class="dropbtn" onclick="show()">Trier par&#9662;</button>
			<ul id="dropcontent" class="dropcontent">
				<li>
					<!--<label><input type="checkbox" name=""> date</label>-->
					<a href="#">date</a>
				</li>
				<li>
					<!--<label><input type="checkbox" name=""> expéditeur</label>-->
					<a href="#">expéditeur</a>
				</li>
				<li>
					<!--<label><input type="checkbox" name=""> objet</label>-->
					<a href="#">objet</a>
				</li>
				<li>
					<!--<label><input type="checkbox" name=""> taille</label>-->
					<a href="#">taille</a>
				</li>
				<li>
					<!--<label><input type="checkbox" name=""> non lus</label>-->
					<a href="#">non lus</a>
				</li>
			</ul>
		</div>
	</body>
</html>