<style>
  @keyframes slideInLeft {
    0% {
      transform: translateX(-50%);
      opacity: 0;
    }
    100% {
      transform: translateX(0);
      opacity: 1;
    }
  }

  .fade-in-left {
    animation: slideInLeft 1s ease-out forwards;
  }

  /* Oculta o conteúdo sobreposto no mobile */
  @media (max-width: 767px) {
    .overlay-content {
      display: none;
    }
  }
</style>

<div style="
  background-image: url('assets/imagens/slides/7.jpeg');
  background-size: cover;
  background-position: initial;
  width: 100%;
  height: 100vh;
  position: relative;
  font-family: sans-serif;
  color: white;
">
  <!-- Camada sobreposta com texto -->
  <div class="overlay-content" style="
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background-color: rgba(0,0,0,0.3); */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 60px;
    box-sizing: border-box;
  ">
    <div style="max-width: 50%; margin-left:1rem">
      <!-- <h1 style="font-size: 48px; line-height: 1.2; margin: 0;">
        COMÉRCIO<span style="color: #f4a300;">&</span><br> CONECTIVIDADE
      </h1> -->
      <p class="fade-in-left" style="font-size: 24px; font-weight:1000; margin-top: 20px;">
        Conectando oportunidades na África Austral
      </p>
    </div>
  </div>
</div>



<!--<div class="container-fluid p-0" style="margin-top: 2rem;">
<div id="carouselExample" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner" style="height:600px !important;">
    <div class="carousel-item active">
      <img src="assets/imagens/slides/1.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption">
        <h5 class="text-uppercase ff-hooltwood">Projecto de Comércio e Conectividade da África Austral</h5>
      </div> 
    </div>
    <div class="carousel-item active">
      <img src="assets/imagens/slides/7.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption" style="opacity:1;  left:-53%; bottom:13rem;">
  <h5 class="text-uppercase ff-hooltwood" style="text-align:start; display: inline-block;">
    <span style=" font-weight: 1000; font-size: 2rem; display: block; transform: translateX(-100%); opacity: 0; animation: slideIn 0.6s forwards; animation-delay: 0.1s;">Conectando</span>
    <span style="font-weight: 1000; font-size: 2rem; display: block; transform: translateX(-100%); opacity: 0; animation: slideIn 0.6s forwards; animation-delay: 0.3s;">oportunidades</span>
    <span style="font-weight: 1000; font-size: 2rem; display: block; transform: translateX(-100%); opacity: 0; animation: slideIn 0.6s forwards; animation-delay: 0.5s;">na</span>
    <span style="font-weight: 1000; font-size: 2rem; display: block; transform: translateX(-100%); opacity: 0; animation: slideIn 0.6s forwards; animation-delay: 0.7s;">África Austral</span>
  </h5>
</div>
    </div>
    <div class="carousel-item">  ADD CLASS DRK FOR OVERLAY EFFECT 
      <img src="assets/imagens/slides/2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/imagens/slides/3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5 class="text-uppercase ff-hooltwood">Projecto de Comércio e Conectividade da África Austral</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/imagens/slides/4.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/imagens/slides/5.jpeg" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
-->
<style>
@keyframes slideIn {
  to {
    transform: translateX(0);
    opacity: 1;
  }
}
</style>