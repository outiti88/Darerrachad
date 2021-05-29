@extends('vitrine.racine')

@section('title')
   Home
@endsection

@section('content')

        <!-- End: Header Section -->
        <!-- Start: Slider Section -->
        <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">

            <!-- Carousel slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <figure>
                        <img alt="Home Slide" src="{{ url('/vitrine/images/header-slider/header-slide.jpg')}}" alt="" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Partout, Le savoir en ligne</h3>
                            <h2>Découverez vos Racines</h2>
                            <p>Nous répugnons à savoir, parce que savoir signifie changer</p>
                            <div class="slide-buttons hidden-sm hidden-xs">
                                <a href="{{ route('vitrine.book.index') }}" class="btn btn-primary">Explorer</a>
                                <a href="{{ route('vitrine.contact.index') }}" class="btn btn-default">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <figure>
                        <img alt="Home Slide" src="{{ url('/vitrine/images/header-slider/header-slide2.jpg')}}" alt=""/>
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h3>Commandez votre livre En Ligne</h3>
                            <h2>Vivez Nos Histoire</h2>
                            <p>L'histoire n'est pas un avocat, c'est un juge</p>
                            <div class="slide-buttons hidden-sm hidden-xs">
                                <a href="#" class="btn btn-primary">Savoir plus</a>
                                <a href="#" class="btn btn-default">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <figure>
                        <img alt="Home Slide" src="{{ url('/vitrine/images/header-slider/header-slide3.jpg')}}" alt=""/>
                    </figure>
                     <div class="container">
                        <div class="carousel-caption">
                            <h3>Bénificiez des Réductions Importantes</h3>
                            <h2>Jusqu'à -50%</h2>
                            <p>N'hésitez pas à nous contacter pour plus d'infos!</p>
                            <div class="slide-buttons hidden-sm hidden-xs">
                                <a href="#" class="btn btn-primary">Savoir plus</a>
                                <a href="#" class="btn btn-default">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#home-v1-header-carousel" data-slide="prev"></a>
            <a class="right carousel-control" href="#home-v1-header-carousel" data-slide="next"></a>
        </div>
        <!-- End: Slider Section -->

        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                                <h2 class="section-title">A PROPOS DE DAR ERRACHAD</h2>
                                <span class="underline left"></span>
                                <p>Avec Dar Errachad Elhaditha vous bénéficiez de la qualité et de l’expertise d’un groupe présent depuis 70 ans dans le domaine livre.</p>
                                <p>Les valeurs et l’éthique de tous nos collaborateurs se pose sur l’écoute, la disponiblité au service de nos clients.</p>
                                <p>Notre ambition principale est de consolider les atouts de notre modèle de maison d’éditions arabophone la plus influente au Maroc et dans la région MENA.</p>
                                <p>Enfin, nous sommes convaincus que dans l’exercice de notre métier, nous nous devons d’être exemplaires.  Celle-ci nous permet de conduire nos activités avec éthique et de contribuer au développement de l’éducation au maroc.</p>
<!--                                <a class="btn btn-primary" href="#">Lire la suite</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="facts-counter">
                            <ul>
                                <li class="bg-primary">
                                    <div class="fact-item">
                                        <div class="fact-icon">
                                            <i class="ebook"></i>
                                        </div>
                                        <span>Livres Religieux<strong class="fact-counter">45780</strong></span>
                                    </div>
                                </li>
                                <li class="bg-blue">
                                    <div class="fact-item">
                                        <div class="fact-icon">
                                            <i class="eaudio"></i>
                                        </div>
                                        <span>Livres Scolaires<strong class="fact-counter">32450</strong></span>
                                    </div>
                                </li>
                                <li class="bg-primary">
                                    <div class="fact-item">
                                        <div class="fact-icon">
                                            <i class="magazine"></i>
                                        </div>
                                        <span>Livres Enfants<strong class="fact-counter">14450</strong></span>
                                    </div>
                                </li>
                                <li class="bg-blue">
                                    <div class="fact-item">
                                        <div class="fact-icon">
                                            <i class="videos"></i>
                                        </div>
                                        <span>Autres<strong class="fact-counter">32450</strong></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-image"></div>
        </section>
        <!-- End: Welcome Section -->

        <section class="team section-padding">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title">Notre Histoire</h2>
                    <span class="underline center"></span>
                    <p class="lead">Très fière de nos racines!</p>
                </div>
                <div class="team-list">
                    <div class="team-member">
                        <figure>
                            <img src="{{ url('/vitrine/images/img_1948.jpg')}}" alt="team" />
                        </figure>
                        <div class="content-block">
                            <div class="member-info">
                                <h4>1948</h4>
                                <span class="designation">Création Librairie Rachad</span>
                                <p>Les début au coeur de l’ancienne Médina dans le quartier koutoubyine (Librairies - Bouquinistes) á proximité du marché aux enchéres des livres oú se déroule chaque vendredi la vente á la criée des manuscrits et des livres d’occasion d’une part et de l’université millainaire la Quaraouyine.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <figure>
                            <img src="{{ url('/vitrine/images/img_1959.jpg')}}" alt="team" />
                        </figure>
                        <div class="content-block">
                            <div class="member-info">
                                <h4>1959</h4>
                                <span class="designation">L’activité a été transformé á Casablanca</span>
                                <p>A partir de 1959, une partie de l’activité a été transformé á Casablanca, capitale économique, disposant de plusieurs imprimeries et d’un port facilitant les échanges ; quelques années plus tard, le siége social lui méme sera transféré á Casablanca quartier des Habous.</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-member">
                        <figure>
                            <img src="{{ url('/vitrine/images/img_1977.jpg')}}" alt="team" />
                        </figure>
                        <div class="content-block">
                            <div class="member-info">
                                <h4>1977</h4>
                                <span class="designation">La création (DAR ERRACHAD EL HADITA)</span>
                                <p>Les associés décident la création d’une nouvelle entité (DAR ERRACHAD EL HADITA) sous forme d’une société anonyme (2001 en S.A.R.L); participera activement á la réalisation d’ouvrages scolaires édités par le Ministére de l’éducation Nationale sous forme d’appels d’offres.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Meet Staff -->

        <!-- Start: Our Community Section -->
        <section class="testimonials">
            <div class="container">
                <h3 class="section-title">MOT DU PRÉSIDENT</h3>
                <span class="underline center"></span>
                <p class="lead">Dar Errachad Al-Hadit.</p>
                <div class="row">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-interval="false" data-ride="carousel" id="testimonials">
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <figure>
                                        <img src="{{ url('/vitrine/images/darerrachad-logo.png')}}" alt="testimonials" />
                                        <figcaption>
                                            <div class="client-name">Directeur de Dar Errachad</div>
                                        </figcaption>
                                    </figure>
                                    <p>Avec Dar Errachad Elhaditha vous bénéficiez de la qualité et de l’expertise d’un groupe présent depuis 70 ans dans le domaine livre.
                                    Les valeurs et l’ethique de tous nos collaborateur se pose sur l’écoute, la disponiblité au service de nos clients.
                                    Notre ambition principale est de consolider les atouts de notre modèle de maison d’éditions arabophone la plus influente au Maroc et dans la région MENA
                                    Enfin, nous sommes convaincus que dans l’exercice de notre métier, nous nous devons d’être exemplaires.  Celle-ci nous permet de conduire nos activités avec éthique et de contribuer au développement de l’éducation au maroc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Our Community Section -->
        <!-- Start: Category Filter -->
        <section class="category-filter section-padding">
            <div class="container">
                <div class="center-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="section-title">Découvrez les nouvelles versions</h2>
                            <span class="underline center"></span>
                            <p class="lead">Toujours de nouveauté dans le monde des livres, avec une diversité de langues </p>
                        </div>
                    </div>
                </div>
                <div class="filter-buttons">
                    <div class="filter btn" data-filter="all">Afficher Tout</div>
                    <div class="filter btn" data-filter=".adults">Islamique</div>
                    <div class="filter btn" data-filter=".kids-teens">Enfants</div>
                    <div class="filter btn" data-filter=".video">Scolaire</div>
                    <div class="filter btn" data-filter=".audio">Autres</div>
                </div>
            </div>
            <div id="category-filter">
                <ul class="category-list">
                    <li class="category-item adults">
                        <figure>
                            <img src="{{ url('/vitrine/images/category-filter/home-v1/category-filter-img-01.jpg')}}" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>Livre 01</h4>
                                    <span class="author"><strong>Auteur:</strong>ELAMRICHE ABDESSAMAD</span>
                                    <span class="author"><strong>Code:</strong> 9781581573268</span>
                                    <p>C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regarde sa mise en page. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Lire la suite <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item kids-teens">
                        <figure>
                            <img src="{{ url('/vitrine/images/category-filter/home-v1/category-filter-img-02.jpg')}}" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>Livre 02</h4>
                                    <span class="author"><strong>Auteur:</strong>ELAMRICHE ABDESSAMAD</span>
                                    <span class="author"><strong>Code:</strong> 9781581573268</span>
                                    <p>C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regarde sa mise en page. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Lire la suite <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item video">
                        <figure>
                            <img src="{{ url('/vitrine/images/category-filter/home-v1/category-filter-img-03.jpg')}}" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>Livre 03</h4>
                                    <span class="author"><strong>Auteur:</strong>ELAMRICHE ABDESSAMAD</span>
                                    <span class="author"><strong>Code:</strong> 9781581573268</span>

                                    <p>C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regarde sa mise en page. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Lire la suite <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="category-item audio">
                        <figure>
                            <img src="{{ url('/vitrine/images/category-filter/home-v1/category-filter-img-04.jpg')}}" alt="New Releaase" />
                            <figcaption class="bg-orange">
                                <div class="info-block">
                                    <h4>Livre 04</h4>
                                    <span class="author"><strong>Auteur:</strong>ELAMRICHE ABDESSAMAD</span>
                                    <span class="author"><strong>Code:</strong> 9781581573268</span>
                                    <p>C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regarde sa mise en page. Pellentesque dolor turpis, pulvinar varius.</p>
                                    <a href="#">Lire la suite <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
                <div class="center-content">
                    <a href="books.html" class="btn btn-primary">Voir Plus</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>


        <!-- End: books -->

        <!-- Start: Newsletter -->
        <section class="newsletter section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="center-content">
                            <h2 class="section-title">Abonnez-vous à nos newsletters</h2>
                            <span class="underline center"></span>
                            <p class="lead">DAR ERRACHAD vous invite à rejoindre notre club de culture!</p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Entrez votre Email" id="newsletter" name="newsletter" type="email">
                            <input class="form-control" value="S'inscrire" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Newsletter -->

        <!-- Start: Social Network -->
        <section class="social-network section-padding">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title">Suivez Nous</h2>
                    <span class="underline center"></span>
                    <p class="lead">Suivez nous pour plus d'actualité</p>
                </div>
                <ul>
                    <li>
                        <a class="facebook" href="#" target="_blank">
                            <span>
                                <i class="fa fa-facebook-f"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="#" target="_blank">
                            <span>
                                <i class="fa fa-twitter"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="google" href="#" target="_blank">
                            <span>
                                <i class="fa fa-google-plus"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="rss" href="#" target="_blank">
                            <span>
                                <i class="fa fa-rss"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" href="#" target="_blank">
                            <span>
                                <i class="fa fa-linkedin"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" href="#" target="_blank">
                            <span>
                                <i class="fa fa-youtube"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
@endsection
