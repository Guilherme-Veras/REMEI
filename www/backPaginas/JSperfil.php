<script type="text/javascript">
	function editar(){
        document.getElementById('nomeErro').classList.add('hidden');
        document.getElementById('lattesErro').classList.add('hidden');
        document.getElementById('nomeErro2').classList.add('hidden');
        if (document.getElementById('editNome').value.length>0) {
            if (document.getElementById('editNome').value.split(" ").length>1) {
                if (validateLattes(document.getElementById('editLattes').value) || document.getElementById('editLattes').value.length==0) {
            		var xhr = new XMLHttpRequest();
                    xhr.open('POST', "api/setPerfil");
                    xhr.onload = function() {
                    	if(this.responseText == 1){		
            		        openEditModal();
            		        document.getElementById('perfNome').innerHTML = document.getElementById('editNome').value;
                            if (document.getElementById('editDesc').value.length>0) {
                                document.getElementById('perfDesc').innerHTML = document.getElementById('editDesc').value;
                                document.getElementById('perfDescT').classList.remove("hidden");  
                            }else{
                                document.getElementById('perfDescT').classList.add("hidden");  
                            }
                            if (document.getElementById('editInst').value.length>0) {
                                document.getElementById('perfInst').innerHTML = document.getElementById('editInst').value;
                                document.getElementById('perfInstT').classList.remove("hidden");  
                            }else{
                                document.getElementById('perfInstT').classList.add("hidden");  
                            }
                            if (document.getElementById('editLattes').value.length>0) {
                                document.getElementById('perfLatt').href = document.getElementById('editLattes').value;
                		        document.getElementById('perfLatt2').innerHTML = document.getElementById('editLattes').value;
                                document.getElementById('perfLattT').classList.remove("hidden");     
                            }else{
                                document.getElementById('perfLattT').classList.add("hidden");                            
                            }
                    	}
                    };
                    // prepare FormData
                    var formData = new FormData();
                    formData.append('id'         , <?php echo $user; ?>);
                    formData.append('nome'       , document.getElementById('editNome').value);
                    formData.append('descricao'  , document.getElementById('editDesc').value);
                    formData.append('instituicao', document.getElementById('editInst').value);
                    formData.append('lattes'     , document.getElementById('editLattes').value);
                    xhr.send(formData);
                }else{
                    document.getElementById('lattesErro').classList.remove('hidden');
                }
            }else{
                document.getElementById('nomeErro2').classList.remove('hidden');
            }
        }else{
            document.getElementById('nomeErro').classList.remove('hidden');
        }
    }

	function openEditModal() {
		document.getElementById('editModal').classList.toggle('hidden');
	}

    function imgHover() {
        document.getElementById("imgPerfilHover").classList.add("visible");
    }

    function imgHoverOut() {
        document.getElementById("imgPerfilHover").classList.remove("visible");
    }

    function openImg() {
        document.getElementById('imgUpload').click();
    }
    function setImg(event, id) {
        var reader = new FileReader();
        reader.onload = function(){
            img = new Image;
            img.onload = function() {
                if (Math.abs(img.width-img.height)<10 && img.width<1000 && img.height<1000) {
                    document.getElementById('imgPerf').src = reader.result;

                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', "api/setImgPerfil");
                    xhr.onload = function() {  
                        console.log(this.responseText);
                    };
                    // prepare FormData
                    var formData = new FormData();
                    formData.append('id', id);
                    formData.append('file', event.target.files[0]);
                    xhr.send(formData);
                }else{
                    alert("Imagem de proporção ou tamanho inválido");
                }
            };
            img.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);  


    }
</script>