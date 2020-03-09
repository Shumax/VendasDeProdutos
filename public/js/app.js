(function readyJS(win,doc){
	'use strict';

	let formulario = doc.querySelector('#form-produtos');

	function enviaFormulario(event){
		event.preventDefault();

		let ajax = new XMLHttpRequest();
		let nome = 'nome =' + doc.querySelector('#nome').value;
		let preco = 'preco =' + doc.querySelector('#preco').value;
		ajax.open('post', '../views/produtos.php');
		ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		ajax.onreadystatechange = function(){
			if (ajax.status === 200 && ajax.readyState === 4) {
				//let json = JSON.parse(ajax.responseText);
				confirm("Deseja mesmo salvar?");
				console.log(ajax.responseText);
			}
		}
		ajax.send();
	}

	formulario.addEventListener('submit', enviaFormulario, false);
	

})(window,document);