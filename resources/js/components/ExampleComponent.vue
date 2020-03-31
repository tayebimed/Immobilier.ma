<template>
  <section id="Annonce">
    <div class="container">
      <h1 class="after center">Annonces</h1>
      <div class="card">
        <div class="card-header">
          <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
              <a class="nav-link" href="#">Annonce à l'une</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Derniére Annonces</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Annonce vidéo</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-3 info_">
              <div class="card">
                <a href="#">
                  <img src="img/image3.jpg" class="card-img-top" alt="..." />
                </a>
                <div class="card-body">
                  <h6>
                    maison
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="text-muted">Rabat</span>
                  </h6>
                  <p class="card-text text-muted">
                    Some quick example text to build on the
                    <a href="#">Voir</a>
                    <span class="ml-3">
                      <i class="fas fa-clock"></i> il y a 23 minutes
                    </span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3 info_">
              <div class="card">
                <a href="#">
                  <img src="/img/image2.jpg" class="card-img-top" alt="..." />
                </a>
                <div class="card-body">
                  <h6>
                    villa
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="text-muted">Casa</span>
                  </h6>
                  <p class="card-text text-muted">
                    Some quick example text to build on the
                    <a href="#">Voir</a>
                    <span class="ml-3">
                      <i class="fas fa-clock"></i> il y a 23 minutes
                    </span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3 info_">
              <div class="card">
                <a href="#">
                  <img src="/img/image1.jpg" class="card-img-top" alt="..." />
                </a>
                <div class="card-body">
                  <h6>
                    Salon
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="text-muted">Marakch</span>
                  </h6>
                  <p class="card-text text-muted">
                    Some quick example text to build on the
                    <a href="#">Voir</a>
                    <span class="ml-3">
                      <i class="fas fa-clock"></i> il y a 23 minutes
                    </span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-3 mb-3 info_">
              <div class="card">
                <a href="#">
                  <img src="/img/image4.jpg" class="card-img-top" alt="..." />
                </a>
                <div class="card-body">
                  <h6>
                    Terrains
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="text-muted">Setat</span>
                  </h6>
                  <p class="card-text text-muted">
                    Some quick example text to build on the
                    <a href="#">Voir</a>
                    <span class="ml-3">
                      <i class="fas fa-clock"></i> il y a 23 minutes
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3 info_">
              <div class="card">
                <a href="#">
                  <img src="/img/image4.jpg" class="card-img-top" alt="..." />
                </a>
                <div class="card-body">
                  <h6>
                    Terrains
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="text-muted">Setat</span>
                  </h6>
                  <p class="card-text text-muted">
                    Some quick example text to build on the
                    <a href="#">Voir</a>
                    <span class="ml-3">
                      <i class="fas fa-clock"></i> il y a 23 minutes
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
