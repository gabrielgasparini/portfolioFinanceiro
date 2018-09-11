$( document ).ready(function() {

	// PREVENIR EXCLUSÃO
	$(".delete-form").submit(function(e) {
		e.preventDefault();
		var r = confirm("Deseja mesmo excluir esse item?");
		if (r == true) {
			this.submit();
		} else {
			alert('Não excluido!');
		}
	});


});