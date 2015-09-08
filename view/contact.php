<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

	<title>Agenda</title>
</head>
<body>

<script type="text/javascript">

	//var contacts = ( "nome"["Jhow"],"telefone"["123"],"facebook"["face"],"twitter"["twi"] );

	var contact = {
	    nome: "Jhow",
	    telefone: "123",
	    facebook: "face",
	    twitter: "twi"
	};


</script>


	<fieldset>

		<form id="form-contact">
			<label for="nome">Nome</label>
			<input id="nome" />

			<label for="telefone">Telefone</label>
			<input id="telefone" />

			<label for="endereco">Endereço</label>
			<input id="endereco" />

			<label for="facebook">Facebook</label>
			<input id="facebook" />

			<label for="twitter">Twitter</label>
			<input id="twitter" />

			<button id="add-contact">[+] Adicionar Contato</button>

		</form>
	</fieldset>

	<table id="tb-contact">
		<tr>
			<td>Nome</td>
			<td>Telefone</td>
			<td>Endereço</td>
			<td>Facebook</td>
			<td>Twitter</td>
		</tr>


		<!--<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>-->
	</table>



<script type="text/javascript">

	
	$(document).ready(function(){

		/*$('add-contact').click(function(){
			contacts[] = $('form-contact').serialize();
		});*/

		$('#tb-contact').append('<tr> <td>nada</td><td>Tudi</td> </tr>');
	});

</script>

</body>
</html>