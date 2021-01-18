if (window.SimpleSlide) {
	new SimpleSlide({
		slide: "quote",
		time: 4000
	});
	new SimpleSlide({
		slide: "portfolio",
		nav: true,
		time: 5000
	});
}

if (window.SimpleAnime) {
	new SimpleAnime();
}

if (window.SimpleForm) {
	new SimpleForm({
		form: ".form-php",
		button: "#enviar",
		erro: "<div id='form-erro'><p>Um erro ocorreu, tente para o email contato@bikcraft.com.</p></div>",
		sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso</h2><p>Em breve eu entro em contato com você.</p></div>",
	});
}
