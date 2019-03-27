<script type="text/javascript">
	
    function delPost(i) {
        if (confirm("Deseja mesmo deletar esse post?")) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', "api/delPost");
            xhr.onload = function() {
                reload();
            };
            // prepare FormData
            var formData = new FormData();
            formData.append('id', i);
            xhr.send(formData);
            inicio();
        }
    }
</script>