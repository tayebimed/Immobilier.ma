 @extends('layouts.app')
 @section('content')
<section id=" header" class="hero-image">
         <div class="overlay"></div>
        <div class="hero-text">
        <div class="container ">

                  <h2>Bienvenu sur le premier site immobilier au Maroc</h2>
                  <button class="btn btn-danger">Déposer une annonce <i class="fas fa-plus"></i></button>

             </div>
        </div>
          <i class="fas fa-angle-down haut"></i>
</section>
 <section id="Services" class="text-center">
        <h1 class="after">Nos Services</h1>
     <div class="container">
     <div class="row">
      <div class="col-md-4">
          <div class="serviece1 text-center">
              <a href="#acheter"><img src="{{asset('img/achter.png')}}" class="icon_1"></a>
               <p> Projets Imoobiliers Neufs </p>
          </div>
      </div>
       <div class="col-md-4">
          <div class="serviece1 text-center">
              <a href="#acheter"><img src="{{asset('img/villa.png')}}" class="icon_1"></a>
               <p>Appartements et Villas à Vendre</p>

          </div>
      </div>
       <div class="col-md-4">
          <div class="serviece1 text-center">
              <a href="#acheter"><img src="{{asset('img/houses.png')}}" class="icon_1"></a>
               <p>Appartements et Villas à Louer</p>
          </div>
      </div>
       <div class="col-md-4">
          <div class="serviece1 text-center">
              <a href="#acheter"><img src="{{asset('img/premiere.png')}}" class="icon_1"></a>
             <p>Terrains</p>
          </div>
      </div>

      <div class="col-md-4">
          <div class="serviece1 text-center">
              <a href="#acheter"><img src="{{asset('img/hotel.png')}}" class="icon_1"></a>
             <p>Locaux Professionnels à louer</p>
          </div>
      </div>

      <div class="col-md-4">
          <div class="serviece1 text-center">
              <a href="#acheter"><img src="{{asset('img/mansion.png')}}" class="icon_1"></a>
             <p>Laucaux Professionnels à vendre</p>
          </div>
      </div>

     </div>
     </div>
 </section>
 <example-component></example-component>
<section id="destination">
                            <h1 class="after center">Des destinations qu'on adore</h1>
                            <div class="container">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Région</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Villes</a>
                                        </li>

                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="list-unstyled">
                                                    <li> <a href="#"> Agadir et Région</a></li>
                                                    <li>  <a href="#">  El Jadida et Région</a></li>
                                                        <li> <a href="#">  Casablanca et Région </a></li>
                                                    <li>  <a href="#">  Fès-Meknès </a></li>
                                                        <li> <a href="#">    Guelmim Es semara </a></li>
                                                    <li>  <a href="#">  Laayoune boujdour Sakia El Hamra  </a></li>
                                                        </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-unstyled">
                                                    <li> <a href="#">   Marrakech-Safi </a></li>
                                                        <li><a href="#">     Oriental </a></li>
                                                        <li> <a href="#">   Oued Dahab-Lagouira </a></li>
                                                    <li>  <a href="#">   Tanger-Tetouan-Al Hoceima </a></li>
                                                        <li> <a href="#">    Rabat-Salé-Kénitra  </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col">
                                                    <ul class="list-unstyled">

            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/AL-HAJEB.html">AL HAJEB</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/AGADIR.html">AGADIR</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/AL-HOCEIMA.html">AL HOCEIMA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/ASSA-ZAG.html">ASSA ZAG</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/AZILAL.html">AZILAL</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/BENI-MELLAL.html">BENI MELLAL</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/BENSLIMANE.html">BENSLIMANE</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/BOUJDOUR.html">BOUJDOUR</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/BOULEMANE.html">BOULEMANE</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/BERRECHID.html">BERRECHID</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/CASABLANCA.html">CASABLANCA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/CHEFCHAOUEN.html">CHEFCHAOUEN</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/CHTOUKA-AIT-BAHA.html">CHTOUKA AIT BAHA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/CHICHAOUA.html">CHICHAOUA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/EL-JADIDA.html">EL JADIDA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/EL-KELAA-DES-SRAGHNAS.html">EL KELAA DES SRAGHNAS</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/ERRACHIDIA.html">ERRACHIDIA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/ESSAOUIRA.html">ESSAOUIRA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/ES-SEMARA.html">ES SEMARA</a></li>
                                                    </ul>
                                                </div>
            <div class="col">

            <ul class="list-unstyled">
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/FES.html">FES</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/FIGUIG.html">FIGUIG</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/GUELMIM.html">GUELMIM</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/IFRANE.html">IFRANE</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/KENITRA.html">KENITRA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/KHEMISSET.html">KHEMISSET</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/KHENIFRA.html">KHENIFRA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/KHOURIBGA.html">KHOURIBGA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/LAAYOUNE.html">LAAYOUNE</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/LARACHE.html">LARACHE</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/MOHAMMEDIA.html">MOHAMMEDIA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/MARRAKECH.html">MARRAKECH</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/MEKNES.html">MEKNES</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/NADOR.html">NADOR</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/OUARZAZATE.html">OUARZAZATE</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/OUJDA.html">OUJDA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/OUED-EDDAHAB.html">OUED EDDAHAB</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/RABAT.html">RABAT</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/SALE.html">SALE</a>  </li>
            </ul>
            </div>
            <div class="col">
                <ul class="list-unstyled">
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/SKHIRAT-TEMARA.html">SKHIRAT TEMARA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/SEFROU.html">SEFROU</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/SAFI.html">SAFI</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/SETTAT.html">SETTAT</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/SIDI-KACEM.html">SIDI KACEM</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/TANGER.html">TANGER</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/TAN-TAN.html">TAN TAN</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/TAOUNAT.html">TAOUNAT</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/TAROUDANNT.html">TAROUDANNT</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/TATA.html">TATA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/TAZA.html">TAZA</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/TETOUAN.html">TETOUAN</a></li>
            <li class="ville-maroc"><img src="/images/pictos/flesh_orange.gif">		<a href="/annuaire-pro/TIZNIT.html">TIZNIT</a></li>
                </ul>
                        </div>


                                                    </ul>
                                                </div>

                                            </div>

                                        </div>

                                        </div>
                            </div>

</section>

 @endsection
