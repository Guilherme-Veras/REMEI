<script type="text/javascript">

	function resizeTextArea(t) {
		t.style.cssText = 'height:' + t.scrollHeight + 'px';
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
        	if (filelist[i].type == "image/jpeg" || filelist[i].type == "image/png" || filelist[i].type == "video/mp4") {
        		valid = 1;
        		validText = "<span class='filePronto'>Pronto";
        	}else{
        		valid = 2;
        		validText = "<span class='fileError'>Arquivo inválido";
        	}
        	result.innerHTML += "<p id='arq"+i+"'>"+filelist[i].name+" - "+validText+"</span></p>";
            list.push([filelist[i], valid]);
        }
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
    	if (list.length==0) {
			document.getElementById('sumbitForm').submit();
    	}
		for (var i = 0; i < list.length; i++) {
			if (list[i][1] == 1 || list[i][1] == 3) {
				if (i==list.length-1) {
					up(i, rand, true);
				}else{
					up(i, rand, false);
				}
		    }
        }
    }

	initHandlers();			



</script>