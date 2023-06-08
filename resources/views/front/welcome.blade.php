@extends('layouts.front')
@section('title')
    Home Page
@endsection

@section('content')
<div class="sliderPart">
    <ul class="rslides">
       <li>
          <div class="banner" style="background:url(images/banner1.jpg) no-repeat center center;">
             <div class="container">
                <img src="images/banner1.jpg" style="width: 100%" class="mobileBanner">
                <div class="banner-inner">
                   <div class="overlay-text">
                      <h2>ENSEMBLE, NOUS POUVONS FAIRE LA DIFFÉRENCE</h2>
                      <p>Notre garderie est spécialisée dans le développement de vos enfants en mettant l'accent sur le développement des compétences grâce à un apprentissage amusant et interactif.</p>
                   </div>
                   <div class="banner-links">
                      <div class="learn_more"><a href="/about">en savoir plus</a></div>
                      <div class="enroll"><a href="{{route('register')}}">Inscrivez-vous !</a></div>
                   </div>
                </div>
             </div>
             
             <div class="banner-bottom">
                <div class="container">
                   <div class="bttn_left_text">
                      <p>Faire une différence dans la vie des jeunes apprenants</p>
                      <p>Nous sommes prêts à vous rencontrer, vous et votre enfant.</p>
                   </div>
                   <div class="bttn_right_text"> <a href="contact-us.html" class="yellow_bttn">Planifiez une réunion</a> </div>
                </div>
             </div>
          </div>
       </li>
       <li>
          <div class="banner" style="background:url(images/banner2.jpg) no-repeat center center;">
             <div class="container">
                <img src="images/banner2.jpg" style="width: 100%" class="mobileBanner">
                <div class="banner-inner">
                   <div class="overlay-text">
                      <h2>APPRENDRE PAR LA DÉCOUVERTE ET L'EXPÉRIENCE</h2>
                      <p>Notre garderie est spécialisée dans le développement de vos enfants en mettant l'accent sur le développement des compétences grâce à un apprentissage amusant et interactif.</p>
                   </div>
                   <div class="banner-links">
                      <div class="learn_more"><a href="/about">en savoir plus</a></div>
                      <div class="enroll"><a href="{{route('register')}}">Inscrivez-vous !</a></div>
                   </div>
                </div>
             </div>
             <!-- container end -->
             <div class="banner-bottom">
                <div class="container">
                   <div class="bttn_left_text">
                      <p>Faire une différence dans la vie des jeunes apprenants</p>
                      <p>Nous sommes prêts à vous rencontrer, vous et votre enfant.</p>
                   </div>
                   <div class="bttn_right_text"> <a href="tel:+14388168899" class="yellow_bttn">Planifiez une réunion</a> </div>
                </div>
             </div>
          </div>
       </li>
       <li>
          <div class="banner" style="background:url(images/banner3.jpg) no-repeat center center;">
             <div class="container">
                <img src="images/banner3.jpg" style="width: 100%" class="mobileBanner">
                <div class="banner-inner">
                   <div class="overlay-text">
                      <h2>APPRENDRE PAR LA DÉCOUVERTE ET L'EXPÉRIENCE</h2>
                      <p>Notre garderie est spécialisée dans le développement de vos enfants en mettant l'accent sur le développement des compétences grâce à un apprentissage amusant et interactif.</p>
                   </div>
                   <div class="banner-links">
                      <div class="learn_more"><a href="/about">en savoir plus</a></div>
                      <div class="enroll"><a href="{{route('register')}}">Inscrivez-vous !</a></div>
                   </div>
                </div>
             </div>
             <!-- container end -->
             <div class="banner-bottom">
                <div class="container">
                   <div class="bttn_left_text">
                      <p>Faire une différence dans la vie des jeunes apprenants</p>
                      <p>Nous sommes prêts à vous rencontrer, vous et votre enfant.</p>
                   </div>
                   <div class="bttn_right_text"> <a href="contact-us.html" class="yellow_bttn">Planifiez une réunion</a> </div>
                </div>
             </div>
          </div>
       </li>
    </ul>
 </div>
 
 <div class="content_area">
    <div class="yellow_part">
       <div class="container">
          <div class="yellow_part_contents">
             <div class="three-sections">
                <img src="images/pic1.png" class="circuler_pic"/>
                <h5>Inscrivez-vous !</h5>
                <img src="images/underline_pic.png"/>
                <p>Inscrivez-vous comme l'un des parents avec vos informations</p>
                <a href="{{route('register')}}">Inscrivez-vous</a> 
             </div>
             <div class="three-sections">
                <img src="images/pic2.png" class="circuler_pic"/>
                <h5>Ajoutez vos enfants</h5>
                <img src="images/underline_pic.png"/>
                <p>Ajoutez les informations de vos enfants un par un.</p>
                <a href="{{route('register')}}">Inscrivez-vous !</a> 
             </div>
             <div class="three-sections">
                <img src="images/pic3.png" class="circuler_pic"/>
                <h5>Suivre les progrès</h5>
                <img src="images/underline_pic.png"/>
                <p>Suivez la galerie de vos enfants, et ce que les entraîneurs disent d'eux.</p>
                <a href="{{route('register')}}">Inscrivez-vous !</a> 
             </div>
          </div>
       </div>
       <!-- container end --> 
    </div>
    <!--yellow_part-->
    <div class="blue_part">
       <div class="container">
          <div class="left_pic_blue_part"> <img src="images/pic4.jpg"/> </div>
          <div class="right_blue_part">
             <h3>Royaume Des Petits Amis Est<br/>
                <span>MEILLEUR ENDROIT</span>
             </h3>
             <div class="blue_part_list">
                <ul>
                   <li><img src="images/star.png" align="left"/>Professeurs certifiés et expérimentés</li>
                   <li> <img src="images/star.png" align="left"/>Personnel certifié en RCR/premiers soins</li>
                   <li><img src="images/star.png" align="left"/>Frais de scolarité abordables</li>
                   <li><img src="images/star.png" align="left"/>Repas et collations nutritifs</li>
                </ul>
             </div>
             <div class="blue_part_list">
                <ul>
                   <li><img src="images/star.png" align="left"/>Environnement sûr et sécurisé</li>
                   <li><img src="images/star.png" align="left"/>Activités d'enrichissement</li>
                   <li><img src="images/star.png" align="left"/>Curriculum certifié</li>
                   <li><img src="images/star.png" align="left"/>Garderie avant et après l'école</li>
                </ul>
             </div>
          </div>
       </div>
       <!-- container end -->
       <div class="blue_part_bottom"></div>
    </div>
    <div class="grey_part">
       <div class="container">
          <div class="grey_part_contents">
             <div class="three-sections-grey mHeight">
                <img src="images/nuit.png"/> 
                <h6>GARDERIE DE NUIT À VILLERAY</h6>
                <p>Royaume Des Petits Amis offre une solution de confiance pour les parents qui ont besoin de services de garde d'enfants pendant les heures nocturnes.</p>
                <div class="yellow_bttn_box"><a href="/service-de-nuit">En Savoir Plus</a></div>
                <img src="images/star_blue.png" class="blue_star"/> 
             </div>
             <div class="three-sections-grey mHeight">
                <img src="images/baby.png"/> 
                <h4  style="font-size:23px;">GARDERIE DE PROXIMITÉ À VILLERAY</h4>
                <p>Royaume Des Petits Amis est l'endroit idéal pour les parents à la recherche d'une garde d'enfants de qualité dans le quartier de Villeray.</p>
                <div class="yellow_bttn_box"><a href="/about">En Savoir Plus</a></div>
                <img src="images/red_star.png" class="blue_star red-star"/> 
             </div>
             <div class="three-sections-grey mHeight">
                <img src="images/wend.png"/>
                <h5>GARDERIE FIN DE SEMAINE À VILLERAY</h5>
                <p> Située dans le quartier de Villeray, notre garderie offre un environnement sécuritaire et stimulant pour les enfants, même pendant les jours de repos.</p>
                <div class="yellow_bttn_box"><a href="/service-fin-de-semain">En Savoir Plus</a></div>
                <img src="images/yellow_star.png" class="blue_star"/> 
             </div>
          </div>
       </div>
       <!-- container end --> 
    </div>
    <!--yellow_part-->
    <div class="enquire_part">
       <div class="grey_bttm"></div>
       <div class="blue_overlay">
          <div class="container">
             <p>Inscrivez-vous aujourd'hui </p>
             <p>et commencez à ajouter vos enfants en ligne.</p>
             <a href="{{route('register')}}">Inscrivez-vous</a> 
          </div>
          <!-- container end --> 
       </div>
    </div>
    <div class="map-section">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2792.925746033016!2d-73.6579398!3d45.57193179999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91937e22a12eb%3A0x759286ff5c33c253!2sGarderie%20Educative%20Au%20Royaume%20Des%20Petits%20Amis!5e0!3m2!1sfr!2sma!4v1685724970682!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="red-line-section"></div>
 </div>
 
@endsection
