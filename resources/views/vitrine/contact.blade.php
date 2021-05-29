@extends('vitrine.racine')

@section('title')
   Contact
@endsection

@section('content')

@include('vitrine.partiels._header')

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="contact-main">
                <div class="contact-us">
                    <div class="container">
                        <div class="contact-location">
                            <div class="flipcard">
                                <div class="front">
                                    <div class="top-info">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>Localisation</span>
                                    </div>
                                    <div class="bottom-info">
                                        <span class="top-arrow"></span>
                                        <ul>
                                            <li>98, Bd. Victor Hugo</li>
                                            <li>Casablanca, Maroc</li>
                                            <li>- B.P. 4040 -</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bottom-info orange-bg">
                                        <span class="bottom-arrow"></span>
                                        <ul>
                                            <li>98, Bd. Victor Hugo</li>
                                            <li>Casablanca, Maroc</li>
                                            <li>- B.P. 4040 -</li>
                                        </ul>
                                    </div>
                                    <div class="top-info dark-bg">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i>Localisation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flipcard">
                                <div class="front">
                                    <div class="top-info">
                                        <span><i class="fa fa-fax" aria-hidden="true"></i>Appelez Nous</span>
                                    </div>
                                    <div class="bottom-info">
                                        <span class="top-arrow"></span>
                                        <ul>
                                            <li><a href="tel:+212522274817">+212 522 27 48 17</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bottom-info orange-bg">
                                        <span class="bottom-arrow"></span>
                                        <ul>
                                            <li><a href="tel:+212522274817">+212 522 27 48 17</a></li>
                                        </ul>
                                    </div>
                                    <div class="top-info dark-bg">
                                        <span><i class="fa fa-fax" aria-hidden="true"></i>Numéro de Fixe</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flipcard">
                                <div class="front">
                                    <div class="top-info">
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i>Adresse Email</span>
                                    </div>
                                    <div class="bottom-info">
                                        <span class="top-arrow"></span>
                                        <ul>
                                            <li>www.darerrachad.com</li>
                                            <li>contact@darerrachad.com</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bottom-info orange-bg">
                                        <span class="bottom-arrow"></span>
                                        <ul>
                                            <li><a href="https:/www.darerrachad.com/">www.darerrachad.com</a></li>
                                            <li><a href="mailto:contact@darerrachad.com">contact@darerrachad.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="top-info dark-bg">
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i>Adresse Email</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="contact-area">
                                <div class="container">
                                    <div class="col-md-5 col-md-offset-1 border-gray-left">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-map bg-light margin-left">
                                                    <div class="company-map" id="map"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-gray-right">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-form bg-light margin-right">
                                                    <h2>A votre écoute!</h2>
                                                    <span class="underline left"></span>
                                                    <div class="contact-fields">
                                                        <form id="contact" name="contact" action="http://libraria.demo.presstigers.com/contact.html" method="post" >
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Prénom" name="first-name" id="first-name" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Nom" name="last-name" id="last-name" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Adresse Email" name="email" id="email" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Numéro de Téléphone" name="phone" id="phone" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" placeholder="Votre message" id="message" aria-required="true"></textarea>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-submit">
                                                                        <input class="btn btn-default" id="submit-contact-form" type="button" name="submit" value="Envoyer"  />
                                                                    </div>
                                                                </div>
                                                                <div id="success">
                                                                    <span>Votre message a été bien envoyé. Notre retour sera dans les brefs délai.</span>
                                                                </div>

                                                                <div id="error">
                                                                    <span>Erreur d'envoi, merci de renvoyer votre message.</span>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@include('vitrine.partiels._socialMedia')

@endsection



@section('javascript')
      <!-- Google Map API -->
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT5k-RhvFSVIuCALkpHhKgQx6SJUd9gpI"></script>

      <!-- Google Map (Custom Style) -->
      <script type="text/javascript" src="{{ url('/vitrine/js/google.map.js')}}"></script>
@endsection
