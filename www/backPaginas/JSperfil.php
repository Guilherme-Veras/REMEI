
<script type="text/javascript">
	function logar(){
		document.getElementById('emailErroLogin').classList.add('hidden');
		document.getElementById('senhaErroLogin').classList.add('hidden');
		var xhr = new XMLHttpRequest();
        xhr.open('POST', "api/login");
        xhr.onload = function() {
        	if (this.responseText == 0){//email errado
				document.getElementById('emailErroLogin').classList.remove('hidden');
        	}else if(this.responseText == 1){//senha incorrera
				document.getElementById('senhaErroLogin').classList.remove('hidden');
        	}else if(typeof (this.responseText) === 'string'){//sucess
        		openLoginModal();
        		document.getElementById('perfilNomeWeb').innerHTML = this.responseText+'<img src="imgs/icons/arrow-drop-down-white.svg">';
        		document.getElementById('deslogado').classList.add('hidden');
        		document.getElementById('logadoDiv').classList.remove('hidden');
        	}else{//qualquer outro erro
				document.getElementById('emailErroLogin').classList.remove('hidden');
        	}
        };
        // prepare FormData
        var formData = new FormData();
        formData.append('email', document.getElementById('emailLogin').value);
        formData.append('senha', document.getElementById('senhaLogin').value);
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