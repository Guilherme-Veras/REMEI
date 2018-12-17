<script type="text/javascript">
	selectedHover1 = null;
	selected1 = false;
	function setHover1(i) {
		//console.log(i)
		apareceSelector1();
		options = document.getElementsByClassName('selOpt1');
		for (j=0; j<options.length; j++) {
			options[j].classList.remove('hover');
		}
		options[i].classList.add('hover');
		selectedHover1 = i;
	}

	function changeBySeta1(event, t) {
		options = document.getElementsByClassName('selOpt1');
		if (event.keyCode == 13) {
			if (options[selectedHover1].id.replace("sele1","") == 'a') {
				openMetoModal();
			}else{
				document.getElementById('selectorRes1').innerHTML = options[selectedHover1].innerHTML;
				document.getElementById('selectorRes1').classList.remove('hidden');
				document.getElementById('inpMetodologia').value = options[selectedHover1].id.replace("sele1","");
				t.value = options[selectedHover1].innerHTML;
				selected1 = true;
			}
		}else{
			if (event.keyCode == 40) {//baixo
				if (selectedHover1 == null) {
					selectedHover1 = 0;
				}else if (selectedHover1+1  >= options.length) {
					selectedHover1 = 0;
				}else{
					selectedHover1++;
				}
			}else if(event.keyCode == 38){//cima
				if (selectedHover1 == null) {
					selectedHover1 = options.length-1;
				}else if (selectedHover1-1  < 0) {
					selectedHover1 = options.length-1;
				}else{
					selectedHover1--;
				}
			}else{
				if (selected1) {
					if (event.keyCode == 8) {
						document.getElementById('selectorRes1').classList.add('hidden');
						selected1 = false;
					}else{
						t.value = options[selectedHover1].innerHTML;
					}
					return;
				}else{
					selectedHover1 = 0;

					var xhr = new XMLHttpRequest();
			        xhr.open('POST', "api/metodologias");
			        xhr.onload = function() {
				        json = JSON.parse(this.responseText);
				        res = "";
				        i = 0;
				        //console.log(json)
				        for (x in json) {
				        	res += '<div class="selOpt1" onclick="defineSel1(this)" id="sele1'+json[x].met_id+'" onmouseover="setHover1('+i+')">'+json[x].met_nome+'</div>'
				            //txt += myObj[x].name + "<br>";
				            i++;
				        }
				        res += '<div class="selOpt1" onclick="defineSel1(-1)" id="sele1a" onmouseover="setHover1('+i+')">Adicionar metodologia</div>'
				        document.getElementById("selector1").innerHTML = res;
						apareceSelector1();
			        };
			        // prepare FormData
			        var formData = new FormData();
			        setTimeout(function(){
			        	formData.append('entrada', t.value); 
			        	xhr.send(formData);
			    	}, 200);
				}
			}
			for (j= 0; j<options.length; j++) {
				options[j].classList.remove('hover');
			}
			options[selectedHover1].classList.add('hover');
		}
	}

	function someSelector1() {
		document.getElementById('selector1').classList.add('hidden');
	}
	function apareceSelector1() {
		document.getElementById('selector1').classList.remove('hidden');
	}

	function defineSel1(t) {
		if (t == -1) {
			openMetoModal();
		}else{
			document.getElementById('selectorRes1').innerHTML = t.innerHTML;
			document.getElementById('selectorRes1').classList.remove('hidden');
			document.getElementById('inpMetodologia').value = t.id.replace("sele1","");
			document.getElementById('selectorInp1').value = options[selectedHover1].innerHTML;
			selected1 = true;
		}
	}


















	selectedHover2 = null;
	selected2 = false;
	function setHover2(i) {
		//console.log(i)
		apareceSelector2();
		options = document.getElementsByClassName('selOpt2');
		for (j=0; j<options.length; j++) {
			options[j].classList.remove('hover');
		}
		options[i].classList.add('hover');
		selectedHover2 = i;
	}

	function changeBySeta2(event, t) {
		options = document.getElementsByClassName('selOpt2');
		if (event.keyCode == 13) {
			if (options[selectedHover2].id.replace("sele2","") == 'a') {
				openAreaModal();
			}else{
				document.getElementById('selectorRes2').innerHTML = options[selectedHover2].innerHTML;
				document.getElementById('selectorRes2').classList.remove('hidden');
				document.getElementById('inpArea').value = options[selectedHover2].id.replace("sele2","");
				t.value = options[selectedHover1].innerHTML;
				selected1 = true;
			}
		}else{
			if (event.keyCode == 40) {//baixo
				if (selectedHover2 == null) {
					selectedHover2 = 0;
				}else if (selectedHover2+1  >= options.length) {
					selectedHover2 = 0;
				}else{
					selectedHover2++;
				}
			}else if(event.keyCode == 38){//cima
				if (selectedHover2 == null) {
					selectedHover2 = options.length-1;
				}else if (selectedHover1-1  < 0) {
					selectedHover2 = options.length-1;
				}else{
					selectedHover2--;
				}
			}else{
				if (selected2) {
					if (event.keyCode == 8) {
						document.getElementById('selectorRes2').classList.add('hidden');
						selected2 = false;
					}else{
						t.value = options[selectedHover2].innerHTML;
					}
					return;
				}else{
					selectedHover2 = 0;

					var xhr = new XMLHttpRequest();
			        xhr.open('POST', "api/areas");
			        xhr.onload = function() {
				        json = JSON.parse(this.responseText);
				        res = "";
				        i = 0;
				        //console.log(json)
				        for (x in json) {
				        	res += '<div class="selOpt2" onclick="defineSel2(this)" id="sele2'+json[x].are_id+'" onmouseover="setHover2('+i+')">'+json[x].are_nome+'</div>'
				            //txt += myObj[x].name + "<br>";
				            i++;
				        }
				        res += '<div class="selOpt2" onclick="defineSel2(-1)" id="sele2a" onmouseover="setHover2('+i+')">Adicionar metodologia</div>'
				        document.getElementById("selector2").innerHTML = res;
						apareceSelector2();
			        };
			        // prepare FormData
			        var formData = new FormData();
			        setTimeout(function(){
			        	formData.append('entrada', t.value); 
			        	xhr.send(formData);
			    	}, 200);
				}
			}
			for (j= 0; j<options.length; j++) {
				options[j].classList.remove('hover');
			}
			options[selectedHover2].classList.add('hover');
		}
	}

	function someSelector2() {
		document.getElementById('selector2').classList.add('hidden');
	}
	function apareceSelector2() {
		document.getElementById('selector2').classList.remove('hidden');
	}

	function defineSel2(t) {
		if (t == -1) {
			openAreaModal();
		}else{
			document.getElementById('selectorRes2').innerHTML = t.innerHTML;
			document.getElementById('selectorRes2').classList.remove('hidden');
			document.getElementById('inpArea').value = t.id.replace("sele2","");
			document.getElementById('selectorInp2').value = options[selectedHover2].innerHTML;
			selected2 = true;
		}
	}























	function openMetoModal() {
		document.getElementById('metoModal').classList.toggle('hidden');
	}
	function openAreaModal() {
		document.getElementById('areaModal').classList.toggle('hidden');
	}

	function criarMeto(){
		var xhr = new XMLHttpRequest();
        xhr.open('POST', "api/newMeto");
        xhr.onload = function() {
        	console.log(this.responseText);
        	openMetoModal()
        };
        // prepare FormData
        var formData = new FormData();
        formData.append('nome', document.getElementById('metoNome').value);
        formData.append('desc', document.getElementById('metoDesc').value);
        xhr.send(formData);
    }
	function criarArea(){
		var xhr = new XMLHttpRequest();
        xhr.open('POST', "api/newArea");
        xhr.onload = function() {
        	console.log(this.responseText);
        	openAreaModal()
        };
        // prepare FormData
        var formData = new FormData();
        formData.append('nome', document.getElementById('areaNome').value);
        xhr.send(formData);
    }


    function submitForm(){
    	document.getElementById('forTitulo').value      = document.getElementById('inpTitulo').value;
    	document.getElementById('forResumo').value      = document.getElementById('inpResumo').value;
    	document.getElementById('forDescricao').value   = document.getElementById('inpDescricao').value;
    	document.getElementById('forMetodologia').value = document.getElementById('inpMetodologia').value;
    	document.getElementById('forArea').value        = document.getElementById('inpArea').value;

    	if (document.getElementById('inpTitulo').value.length>0 &&
    		document.getElementById('inpResumo').value.length>0 &&
    		document.getElementById('inpDescricao').value.length>0 &&
    		document.getElementById('inpMetodologia').value.length>0 &&
    		document.getElementById('inpArea').value.length>0) {
	    	document.getElementById('sumbitForm').submit();
		}else{
			console.log('preencha td');
		}
    }
</script>