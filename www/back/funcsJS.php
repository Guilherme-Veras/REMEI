
<script type="text/javascript">
	function redir(page) {
		window.location = page;
	}

	function validateEmail(mail){
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
    		return true
 		}
    	return false
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
	function estrelasClick(user, i, post) {
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
</script>