<script type="text/javascript">
	

	function changeFiltro(ind) {
		filtros = document.getElementsByClassName('filtros');
		for (i=0; i<filtros.length; i++) {
			filtros[i].classList.remove('selected');
		}
		filtros[ind].classList.add('selected');
		document.getElementById('filtrosValue').value = ind;
	}



	//definir posicao do header
	telaWidth = document.getElementById('buscaSec').offsetWidth;
	novaHeight = telaWidth / 1.84990253411306;
	document.getElementById('buscaSec').style.height = novaHeight+"px"; 

	descer = document.getElementsByClassName('descerBack');
	for (i=0; i<descer.length; i++) {
		//descer[i].style.marginTop = (novaHeight-70)+"px";
	}

</script>