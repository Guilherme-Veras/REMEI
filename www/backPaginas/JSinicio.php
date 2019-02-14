<script type="text/javascript">
	

	function changeFiltro(ind) {
		filtros = document.getElementsByClassName('filtros');
		for (i=0; i<filtros.length; i++) {
			filtros[i].classList.remove('selected');
		}
		filtros[ind].classList.add('selected');
		document.getElementById('filtrosValue').value = ind;
	}

	function buscar(){
		texto = document.getElementById('searchInput').value;
		filtro = document.getElementById('filtrosValue').value;

		if (texto.length>0) {
			document.getElementById('searchInputFinal').value = texto;
			document.getElementById('filtroInputFinal').value = filtro;
			document.getElementById('buscarForm').submit();
		}else{
			document.getElementById('searchInput').focus();
		}

	}



	//definir posicao do header
	function defineTamanhoInicio(){
		telaWidth = document.getElementById('buscaSec').offsetWidth;
		novaHeight = telaWidth / 1.84990253411306;
		document.getElementById('buscaSec').style.height = novaHeight+"px"; 

		descer = document.getElementsByClassName('descerBack');
		for (i=0; i<descer.length; i++) {
			//if (telaWidth>1000) {
			//	descer[i].style.marginTop = (novaHeight-75)+"px";
			//}else{
				descer[i].style.marginTop = (novaHeight)+"px";
			//}
		}
	}
	defineTamanhoInicio();

	carroIn = 0;

	postsCarro = document.getElementById('postsCarro').children;
	for (i=0; i<postsCarro.length;i++){
		postsCarro[i].classList.add("hidden");
	}
	postsCarro[carroIn].classList.remove("hidden")
	
	function carroLeft() {
		console.log(carroIn)
		postsCarro = document.getElementById('postsCarro').children;
		for (i=0; i<postsCarro.length;i++){
			postsCarro[i].classList.add("hidden");
		}
		if (carroIn == 0) {
			carroIn = postsCarro.length-1;
		}else{
			carroIn--;
		}
		postsCarro[carroIn].classList.remove("hidden")
	}

	function carroRight() {
		console.log(carroIn)
		postsCarro = document.getElementById('postsCarro').children;
		for (i=0; i<postsCarro.length;i++){
			postsCarro[i].classList.add("hidden");
		}
		if (carroIn == postsCarro.length-1) {
			carroIn = 0;
		}else{
			carroIn++;
		}
		postsCarro[carroIn].classList.remove("hidden")
	}
</script>