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






		function resizeTextArea(t) {
			t.style.cssText = 'height:' + t.scrollHeight + 'px';
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








		function resuRefil(t) {
			if (t.value.length==0) {
				t.value = "Clique para editar";
			}
		}

		function salvarMeto() {
			document.getElementById("metoFinal").value = document.getElementById("metodol").value;
			if (document.getElementById("metodol").value!=0) {
				document.getElementById("metoSpan").innerHTML = document.getElementById("metodolNome").value;
			}
			openMetoModal()
		}

		function salvarArea() {
			document.getElementById("areaFinal").value = document.getElementById("areass").value
			if (document.getElementById("areass").value!=0) {
				document.getElementById("areaSpan").innerHTML = document.getElementById("areassNome").value;
			}
			openAreaModal()
		}

	    function submitForm(){
	    	if (document.getElementById('metoFinal').value!=0 && document.getElementById('areaFinal').value!=0) {
	    		upload()
			}else{
				alert('selecione uma metodologia e area');
			}
	    }


		function selectMeto(ind, t, nome) {
			btns = document.getElementsByClassName("metos");
			for (i=0; i<btns.length; i++) {
				btns[i].classList.remove("selected");
			}
			t.classList.add("selected");
			document.getElementById("metodol").value = ind;			
			document.getElementById("metodolNome").value = nome;			
		}

		function metoEntra(t) {
			var xhr = new XMLHttpRequest();
	        xhr.open('POST', "api/metodologias");
	        xhr.onload = function() {
		        json = JSON.parse(this.responseText);
		        res = "";
		        i = 0;
		        //console.log(json)
		        for (x in json) {
		        	res += '<div class="metos" onclick="selectMeto('+json[x].met_id+', this, \''+json[x].met_nome+'\')">'+json[x].met_nome+'</div>'
		        	//txt += myObj[x].name + "<br>";
		            i++;
		        }
		        res += '<div class="metos" onclick="newMeto()">Nova metodologia</div>'
		        document.getElementById("caixaBuscaMeto").innerHTML = res;
				apareceSelector1();
	        };
	        // prepare FormData
	        var formData = new FormData();
	        setTimeout(function(){
	        	formData.append('entrada', t.value); 
	        	xhr.send(formData);
	    	}, 200);
		}

		function newMeto() {
			if (confirm("Deseja criar uma metodologia com nome de '"+document.getElementById('metoNome').value+"'")) {
				var xhr = new XMLHttpRequest();
		        xhr.open('POST', "api/newMeto");
		        xhr.onload = function() {
		        	console.log(this.responseText);
		        	metoEntra(document.getElementById('metoNome'));
		        };
		        // prepare FormData
		        var formData = new FormData();
		        formData.append('nome', document.getElementById('metoNome').value);
		        xhr.send(formData);
	        }
		}

		function selectArea(ind, t, nome) {
			btns = document.getElementsByClassName("areas");
			for (i=0; i<btns.length; i++) {
				btns[i].classList.remove("selected");
			}
			t.classList.add("selected");
			document.getElementById("areass").value = ind;			
			document.getElementById("areassNome").value = nome;			
		}

		function areaEntra(t) {
			var xhr = new XMLHttpRequest();
	        xhr.open('POST', "api/areas");
	        xhr.onload = function() {
		        json = JSON.parse(this.responseText);
		        console.log(this.responseText)
		        res = "";
		        i = 0;
		        //console.log(json)
		        for (x in json) {
		        	res += '<div class="areas" onclick="selectArea('+json[x].are_id+', this, \''+json[x].are_nome+'\')">'+json[x].are_nome+'</div>'
		        	//txt += myObj[x].name + "<br>";
		            i++;
		        }
		        res += '<div class="areas" onclick="newArea()">Nova area</div>'
		        document.getElementById("caixaBuscaArea").innerHTML = res;
				apareceSelector1();
	        };
	        // prepare FormData
	        var formData = new FormData();
	        setTimeout(function(){
	        	formData.append('entrada', t.value); 
	        	xhr.send(formData);
	    	}, 200);
		}

		function newArea() {
			if (confirm("Deseja criar uma area com nome de '"+document.getElementById('metoArea').value+"'")) {
				var xhr = new XMLHttpRequest();
		        xhr.open('POST', "api/newArea");
		        xhr.onload = function() {
		        	console.log(this.responseText);
		        	areaEntra(document.getElementById('metoArea'));
		        };
		        // prepare FormData
		        var formData = new FormData();
		        formData.append('nome', document.getElementById('metoArea').value);
		        xhr.send(formData);
	        }
		}




		function openMetoModal() {
			document.getElementById('metoModal').classList.toggle('hidden');
		}
		function openAreaModal() {
			document.getElementById('areaModal').classList.toggle('hidden');
		}






	    

		var dropArea = document.getElementById('caixaDeDrop');
		var result = document.getElementById('result');
		var list = [];
	    function initHandlers() {
	        dropArea.addEventListener('drop', handleDrop, false);
	        dropArea.addEventListener('dragover', handleDragOver, false);
	        dropArea.addEventListener('ondragleave', handleDragLeave, false);
	    }

	    function handleDragOver(event) {
	        event.stopPropagation();
	        event.preventDefault();
	    } 
	    function handleDragLeave(event) {
	        event.stopPropagation();
	        event.preventDefault();
	    }
	    function handleDrop(event) {
	        event.stopPropagation();
	        event.preventDefault();
	        processFiles(event.dataTransfer.files);
	    }

	    function processFiles(filelist) {
	        if (!filelist || !filelist.length || list.length) return;
	        result.textContent = '';
	        for (var i = 0; i < filelist.length; i++) {
	        	console.log(filelist[i])
	        	filelist[i].name = "teste.png"
	        	console.log(filelist[i])
	        	if (filelist[i].type == "image/jpeg" || filelist[i].type == "image/png" || filelist[i].type == "video/mp4") {
	        		valid = 1;
	        		validText = "<span class='filePronto'>Pronto";
	        	}else{
	        		valid = 2;
	        		validText = "<span class='fileError'>Arquivo inválido";
	        	}
	        	result.innerHTML += "<p id='arq"+i+"'><img onclick='removeFile("+i+")' src='imgs/icons/close-black.svg'>"+filelist[i].name+" - "+validText+"</span></p>";
	            list.push([filelist[i], valid]);
	        }
	    }

	    function removeFile(i) {
	    	lius[i, 1] = 2;
	    	document.getElementById('arq'+i).style.display = "none";
	    }

	    err = true;
	    function up(i, rand, f){
	    	var xhr = new XMLHttpRequest();
	    	console.log(rand);
	        xhr.open('POST', "apis/upload.php/?t="+rand);
	        xhr.onload = function() {
	        	console.log(this.responseText);
	        	if(this.responseText == "valid"){
					validText = "<span class='fileFinish'>Uploaded";
	        		document.getElementById("arq"+i).innerHTML = list[i][0].name+" - "+validText+"</span>";
	        		list[i][1] = 4;
	        		if (f) {
	        			if (err) {
					   		document.getElementById('sumbitForm').submit();
					    }else{
					    	alert('erro ao fazer o upload dos arquivos')
					    }
	        		}
	        	}else{
	        		validText = "<span class='fileError'>Erro";
	        		document.getElementById("arq"+i).innerHTML = list[i][0].name+" - "+validText+"</span>";
	        		document.getElementById("btnUp").value = "Tentar novamente"
	        		list[i][1] = 3;
	        		err = false
	        	}
	        };
	        xhr.onerror = function() {
	    		validText = "<span class='fileError'>Erro";
	    		document.getElementById("arq"+i).innerHTML = list[i][0].name+" - "+validText+"</span>";
	    		document.getElementById("btnUp").value = "Tentar novamente"
	    		list[i][1] = 3;
	        	err = false
	        };
	        // prepare FormData
	        var formData = new FormData();
	        formData.append('file', list[i][0]);
	        xhr.send(formData);
	    }

	    function upload(){
	    	rand = makeid(7);
	    	document.getElementById('randFinal').value = rand;
			for (var i = 0; i < list.length; i++) {
				if (list[i][1] == 1 || list[i][1] == 3) {
					if (i==list.length-1) {
						up(i, rand, true);
					}else{
						up(i, rand, false);
					}
			    }
	        }
	        document.getElementById('sumbitForm').submit();
	    }

		initHandlers();			



	</script>