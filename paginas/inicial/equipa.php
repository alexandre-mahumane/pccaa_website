<div id="equipa" class="container mb-5 pb-5">
	<div class="row pt-5 mt-5">
		<div class="col">
			<h3 class="ff-hooltwood text-center pb-5">A NOSSA EQUIPA</h3>
			<div id="owl-equipa" class="owl-carousel owl-theme">
			  
				<div class="card">
					<img src="assets/imagens/equipa/Ana-Mchola.jpg" class="card-img-top" style="object-fit: cover; object-position: center; height: 300px; overflow: hidden;" alt="...">
					<div class="card-body card-team">
						<h5 class="card-title fw-800">Ana Mchola</h5>
						<p class="card-text"> Secretariado Interino do Comité Tripartido</p>
					</div>
				</div>

				<div class="card">
					<img src="assets/imagens/equipa/Arquímedes-Varimelo.jpeg" class="card-img-top" style="object-fit: cover; object-position: center; height: 300px; overflow: hidden;" alt="...">
					<div class="card-body card-team">
						<h5 class="card-title fw-800">Arquímedes Varimelo</h5>
						<p class="card-text"> Assessoria jurídica</p>
					</div>
				</div>

				<div class="card">
					<img src="assets/imagens/equipa/Celso-Cunha.jpg" class="card-img-top" style="object-fit: cover; object-position: center; height: 300px; overflow: hidden;" alt="...">
					<div class="card-body card-team">
						<h5 class="card-title fw-800">Celso Cunha</h5>
						<p class="card-text"> Finanças do FCID</p>
					</div>
				</div>

				<div class="card">
					<img src="assets/imagens/equipa/Faira-Bila.jpeg" class="card-img-top" style="object-fit: cover; object-position: 0 -15px; height: 300px; overflow: hidden;" alt="...">
					<div class="card-body card-team">
						<h5 class="card-title fw-800">Faira Bila</h5>
						<p class="card-text"> Assistente de Monitória e Avaliação</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
  		$("#owl-equipa").owlCarousel({
  			center: true,
  			responsive : {
			    // breakpoint from 0 up
			    0 : {
			        items:1,
			    },
			    // breakpoint from 480 up
			    480 : {
			        items:1
			    },
			    // breakpoint from 768 up
			    768 : {
			        items:1,
			    },
			    1024 : {
			        items:3,
			    }
			},
		    loop:true,
		    margin:10,
		    dots: true
  		});
	});
</script>