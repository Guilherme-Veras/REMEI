
<script type="text/javascript">
	function editar(){
		var xhr = new XMLHttpRequest();
        xhr.open('POST', "api/setPerfil");
        xhr.onload = function() {
        	if(this.responseText == 1){		
		        openEditModal();
		        document.getElementById('perfNome').innerHTML = document.getElementById('editNome').value;
		        document.getElementById('perfDesc').innerHTML = document.getElementById('editDesc').value;
		        document.getElementById('perfInst').innerHTML = document.getElementById('editInst').value;
		        document.getElementById('perfLatt').innerHTML = document.getElementById('editLattes').value;
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
    }

	function openEditModal() {
		document.getElementById('editModal').classList.toggle('hidden');
	}
	window.onclick = function(event) {
	    if (event.target == document.getElementById("editModal")) {
	        openEditModal();
	    }
	}
</script>