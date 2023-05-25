<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

		<style type="text/css">
			*
			{
				margin: unset;
				box-sizing: border-box;
				font-family: arial;
				font-size: 14pt;
			}

			/*body
			{
				background-color: #f3f5f6;
			}*/

			html, body
			{
				height: 100%;
			}

			a
			{
				color: black;
				text-decoration: none;
			}

			h4
			{
				font-size: 16pt;
			}

			.menuLeft
			{
				list-style-type: none;
				width: 20%;
				height: 100%;
				float: left;
				border-right: 0.5px solid lightgray;
				padding: unset;
			}

			.menuLeft:after
			{
				display: block;
				clear: both;
				content: "";
			}

			.menuLeft li, .menuLeft li a
			{
				display: block;
			}

			.menuLeft li a
			{
				border-bottom: 0.5px solid lightgray;
				padding: 10px 0px 10px 20px;
			}

			.menuLeft li a:hover
			{
				background-color: lightgray;
			}

			.msg:after
			{
				display: block;
				clear: both;
				content: "";
			}

			.msgContainer
			{
				list-style-type: none;
				margin: 10px 0px 0px 0px;
				width: calc(100% - 20%);
				height: 100%;
				padding: unset;
				float: left;
				background-color: #f3f5f6;
			}

			.toolbar div
			{
				padding: 0px 0px 0px 20px;
			}

			.toolbar:after
			{
				display: block;
				clear: both;
				content: "";
			}

			.dropdown
			{
				float: left;
			}

			.dropbtn
			{
				padding: 0px 0px 0px 20px;
			}

			.dropcontent
			{
				display: none;
			}

			.dropcontent, .dropcontent *
			{
				list-style-type: none;
				padding: unset;
			}

			.dropcontent li button
			{
				width: 100%;
				padding: 5px 10px 5px 10px;
				text-align: left;
				background-color: unset;
				border: none;
			}

			.dropcontent button:hover
			{
				cursor: pointer;
			}

			.msg
			{
				border-bottom: 0.5px solid lightgray;
				padding: 10px 0px 10px 0px;
			}

			.col
			{
				float: left;
				padding: 0px 60px 0px 20px;
				height: 45px;
			}

			.ckboxContainer
			{
				padding: 0px 20px 0px 0px;
			}

			/*.subjectContainer a
			{
				text-align: center;
				color: black;
				text-decoration: none;
			}*/
		</style>
	</head>
	<body>
		<ul class="menuLeft">
			<li><a href="#">Reçus</a></li>
			<li><a href="#">Envoyés</a></li>
			<li><a href="#">Supprimés</a></li>
		</ul>
		<ul class="msgContainer">
			<li class="toolbar">
				<div id="col1" class="col">
					<label class="ckboxContainer"><input type="checkbox" name="toolbarCkbox"> Tout sélectionner</label>
				</div>
				<div id="col2" class="col">
					<span>Afficher</span>
				</div>
				<div id="col3" class="col">
					<span>Trier par</span>
				</div>
				<div id="col4" class="col">
					<button>Supprimer</button>
				</div>
			</li>
			<li id="row1" class="msg">
				<div id="col1" class="col">
					<span class="ckboxContainer"><input id="ckbox1" type="checkbox" name="ckbox1"></span>
					<span>Personne 1</span><br>
					<span></span>
				</div>
				<div id="col2" class="col">
					<span class="subjectContainer"><a href="#">Objet</a></span><br>
					<span>Aperçu 3 lignes</span>
				</div>
				<div id="col3" class="col">
					<span>Date envoi/réception</span>
				</div>
			</li>
			<li id="row2" class="msg">
				<div id="col1" class="col">
					<span class="ckboxContainer"><input id="ckbox2" type="checkbox" name="ckbox2"></span>
					<span>Personne 2</span><br>
					<span></span>
				</div>
				<div id="col2" class="col">
					<span class="subjectContainer"><a href="#">Objet</a></span><br>
					<span>Aperçu 3 lignes</span>
				</div>
				<div id="col3" class="col">
					<span>Date envoi/réception</span>
				</div>
			</li>
			<li id="row3" class="msg">
				<div id="col1" class="col">
					<span class="ckboxContainer"><input id="ckbox3" type="checkbox" name="ckbox3"></span>
					<span>Personne 3</span><br>
					<span></span>
				</div>
				<div id="col2" class="col">
					<span class="subjectContainer"><a href="#">Objet</a></span><br>
					<span>Aperçu 3 lignes</span>
				</div>
				<div id="col3" class="col">
					<span>Date envoi/réception</span>
				</div>
			</li>
			<li id="row4" class="msg">
				<div id="col1" class="col">
					<span class="ckboxContainer"><input id="ckbox4" type="checkbox" name="ckbox4"></span>
					<span>Personne 4</span><br>
					<span></span>
				</div>
				<div id="col2" class="col">
					<span class="subjectContainer"><a href="#">Objet</a></span><br>
					<span>Aperçu 3 lignes</span>
				</div>
				<div id="col3" class="col">
					<span>Date envoi/réception</span>
				</div>
			</li>
		</ul>
		<!--<div class="msg">
			<h4>Personne 1</h4><br>
			<p>Aperçu du message</p>
		</div>
		<div class="msg">
			<h4>Personne 1</h4><br>
			<p>Aperçu du message</p>
		</div>
		<div class="msg">
			<h4>Personne 1</h4><br>
			<p>Aperçu du message</p>
		</div>
		<div class="msg">
			<h4>Personne 1</h4><br>
			<p>Aperçu du message</p>
		</div>-->
	</body>
</html>