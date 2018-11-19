	
<script type="text/javascript">
	function redir(page) {
		window.location = page;
	}
	function inicio() {
		redir('inicio');
	}
	function reload() {
		location.reload();
	}

	function runOnEnter(event, func) {
		if (event.keyCode == 13) {
			func();
		}
	}

	function logout() {
		var xhr = new XMLHttpRequest();
        xhr.open('POST', "api/logout");
        var formData = new FormData();
        xhr.send(formData);
        reload();
	}

	function validateEmail(mail){
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
    		return true
 		}
    	return false
	}

	function validateURL(str) {
	  var pattern = new RegExp('^(https?:\/\/)?'+ // protocol
	    '((([a-z\d]([a-z\d-]*[a-z\d])*)\.)+[a-z]{2,}|'+ // domain name
	    '((\d{1,3}\.){3}\d{1,3}))'+ // OR ip (v4) address
	    '(\:\d+)?(\/[-a-z\d%_.~+]*)*'+ // port and path
	    '(\?[;&a-z\d%_.~+=-]*)?'+ // query string
	    '(\#[-a-z\d_]*)?$','i'); // fragment locater
	  if(!pattern.test(str)) {
	    return false;
	  } else {
	    return true;
	  }
	}

	function validateLattes(url){
		if (url.includes("http://lattes.cnpq.br/")) {
			return true;
		}
		return false;
	}

	
	function estrelasHover(t, i) {
		estrelas = t.parentNode.childNodes;
		for (j=0; j<i+1; j++) {
			estrelas[j+1].src = 'imgs/icons/star-yellow.svg';
		}
	}
	function estrelasHoverOut(t, q) {
		estrelas = t.parentNode.childNodes;
		console.log(estrelas);
		for (j=1; j<estrelas.length-1; j++) {
			if (q>=j*20) {
				estrelas[j].src = 'imgs/icons/star-black.svg';
			}else if(q>=(j*20)-10){
				estrelas[j].src = 'imgs/icons/star-gray.svg';
			}else{
				estrelas[j].src = 'imgs/icons/star-white.svg';
			}
		}
	}
	function estrelasClick(user, i, post, t) {
		estrelas = t.parentNode.childNodes;
		for (j=1; j<estrelas.length-1; j++) {
			estrelas[j].onmouseover = function() {};
			estrelas[j].onmouseleave = function() {};
			estrelas[j].onclick = function() {};
		}
		var xhr = new XMLHttpRequest();
        xhr.open('POST', "api/avaliar");
        xhr.onload = function() {
        	console.log (this.responseText);
        };
        // prepare FormData
        var formData = new FormData();
        formData.append('user', user);
        formData.append('valo', (i+1));
        formData.append('post', post);
        xhr.send(formData);
	}


	window.onclick = function(event) {
	    if (event.target == document.getElementById("loginModal")) {
	        openLoginModal();
	    }else if (event.target == document.getElementById("editModal")) {
	        openEditModal();
	    }else if (event.target == document.getElementById("metoModal")) {
	        openMetoModal();
	    }else if (event.target == document.getElementById("areaModal")) {
	        openAreaModal();
	    }
	}
	window.onresize = function(event) {
		defineTamanhoInicio();
	};

</script>