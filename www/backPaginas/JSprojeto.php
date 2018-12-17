<script type="text/javascript">
	
	function changePessoa(p) {
		pesssoas = document.getElementsByClassName('infos');
		for (i=0; i<pesssoas.length; i++) {
			pesssoas[i].classList.add('hidden');
		}

		document.getElementById(p).classList.remove('hidden');
		document.getElementById(p).scrollIntoView();
		window.scrollBy(0, -100);
	}

</script>