<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
      <title>CODE-STEEL</title>

      <!-- CSS -->
      <link rel="stylesheet" href="./css/libs/bootstrap.css">
      <link rel="stylesheet" href="./css/libs/font.css">
      <link rel="stylesheet" href="./css/libs/animate.css">
      <link rel="stylesheet" href="./css/style.css">

<body>
      
      <a name="accueil"></a>

            <!-- TOP SECTION -->

            <div class="video-container">
                  <video playsinline autoplay muted loop>
                        <source src="./img/video.mp4" type="video/mp4">
                  </video>
            </div>

            
            <div class="header">

            <!-- FORM SECTION -->

            <?php

              include 'form.php';

            ?>

            <div class="neon-text">
                  <h1 class="neonthis wow fadeInUp" data-wow-delay="0.5s">Développeur web</h1>
                  <h2 class="neonthis wow fadeInUp" data-wow-delay="0.9s">Front End</h2>
                  <h3 class="neonthis wow fadeInUp" data-wow-delay="1.2s">Freelance</h3>
            </div>
            
            </div>

            <!-- NAVBAR -->

            <nav class="nav">
                  <span id="brand">
                        <a class="wow fadeInUp" data-wow-delay="0.3s" href="#accueil">CODE-STEEL.</a>
                  </span>

                  <ul id="menu">
                        <li><a class="wow fadeInUp" data-wow-delay="0.3s" href="#accueil">Accueil</a></li>
                        <li><a class="wow fadeInUp" data-wow-delay="0.4s" href="#general">Général</a></li>
                        <li><a class="wow fadeInUp" data-wow-delay="0.5s" href="#competence">Compétences</a></li>
                        <li><a class="wow fadeInUp" data-wow-delay="0.6s" href="#apropos">À propos</a></li>
                        <li><a class="wow fadeInUp" data-wow-delay="0.7s" href="#contact">Contact</a></li>
                  </ul>

                  <div id="toggle">
                        <div class="span">menu</div>
                  </div>

            </nav>

            <!-- MOBILE NAVBAR -->

            <div id="resize">
                  <div class="close-btn">fermer</div>

                  <ul id="menu">
                        <li><a href="#home">Accueil</a></li>
                        <li><a href="#general">General</a></li>
                        <li><a href="#competence">Compétences</a></li>
                        <li><a href="#apropos">À propos</a></li>
                        <li><a href="#contact">Contact</a></li>
                  </ul>
            </div>

            <!-- GENERAL -->

            <div class="content overlay">

            <a name="general"></a>

           <section class="story">
      

                  <div class="container-fluid">

                        <div class="section-data">

                              <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">.01</div>
                                    <div class="neonthis col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">Présentation générale</div>                   
                              </div>

                              <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6 section-subheading wow fadeInUp" data-wow-delay="0.5s"><h1>J’aime le design, la technologie et la créativité. <a href="https://github.com/jBoutoille?tab=repositories" target="_blank" rel="noopener"><img src="img/ico/git.svg" class="social"></a></h1></div>
                              </div>

                              <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6 section-info wow fadeInUp" data-wow-delay="0.6s">Bienvenue sur mon portfolio. Je suis Julien Un développeur front-end basé en France qui trouve sa passion dans la création visuelle. J'exprime librement ma créativité et mon imagination en concevant. Pour donner à cette passion une plate-forme, je construis toutes mes expériences créatives ici sur mon portfolio. Faite le tour. Bonne viste</div>
                              </div><br>
                              <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8 more wow fadeInUp" data-wow-delay="0.7s">
                                    <a href="img/cv.pdf" target="_blank" ><button id="btn">mon cv</button></a>
                                    </div>
                              </div>



                        </div>

                  </div>

           </section>

            <!-- COMPETENCE -->

            <a name="competence"></a>

           <section class="services">

            <div class="container-fluid">

                  <div class="section-data">

                        <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">.02</div>
                              <div class="neonthis col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">Compétences</div>
                        </div>

                        <div class="row service">
                              <div class="col-md-4"></div>
                              <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="icon">
                                          <ion-icon name="finger-print"></ion-icon>
                                    </div>
                                    <div class="icon-title">
                                    <img src="img/ico/html5.svg" class="iconskills">
                                    Format de données conçu pour représenter les pages Web.
                                    </div><br>
                              </div>

                              <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                                          <div class="icon">
                                                <ion-icon name="link"></ion-icon>
                                          </div>
                                          <div class="icon-title">
                                          <img src="img/ico/css3.svg" class="iconskills">
                                          Décrit la présentation des documents HTML et XML.
                                          </div>
                              </div>
                        </div>

                        <div class="row service">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                                          <div class="icon">
                                                <ion-icon name="cloud-upload"></ion-icon>
                                          </div>
                                          <div class="icon-title">
                                          <img src="img/ico/javascript.svg" class="iconskills">
                                          Langage de script pour les pages Web interactives.
                                          </div><br>
                                    </div>
      
                                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                                                <div class="icon">
                                                      <ion-icon name="share"></ion-icon>
                                                </div>
                                                <div class="icon-title">
                                                <img src="img/ico/php.svg" class="iconskills">
                                                Pour produire des pages Web dynamiques via un serveur HTTP.
                                                </div>
                                    </div>

                              </div>

                              <div class="row service">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                                          <div class="icon">
                                                <ion-icon name="cloud-upload"></ion-icon>
                                          </div>
                                          <div class="icon-title">
                                          <img src="img/ico/bootstrap.svg" class="iconskills">
                                                Framework responsive utile pour la création de design.
                                          </div><br>
                                    </div>
      
                                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                                                <div class="icon">
                                                      <ion-icon name="share"></ion-icon>
                                                </div>
                                                <div class="icon-title">
                                                <img src="img/ico/symfony.svg" class="iconskills">
                                                Ensemble de composants PHP pour accélérer le développement d’un site Web.
                                                </div>
                                    </div>
                                    
                              </div>

                               <div class="row service">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
                                          <div class="icon">
                                                <ion-icon name="cloud-upload"></ion-icon>
                                          </div>
                                          <div class="icon-title">
                                          <img src="img/ico/wordpress.svg" class="iconskills">
                                          Créer et gérer différents types de sites Web.
                                          </div><br>
                                    </div>
      
                                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.8s">
                                                <div class="icon">
                                                      <ion-icon name="share"></ion-icon>
                                                </div>
                                                <div class="icon-title">
                                                <img src="img/ico/adobe.svg" class="iconskills">
                                                logiciel graphique professionnel software "photoshop, xd, illustrator, premiere pro, after effect".
                                                </div>
                                    </div>
                                    
                              </div>
                  </div>

            </div>

           </section>

            <!-- A PROPOS -->

            <a name="apropos"></a>

            <section class="about">

                        <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">.03</div>
                              <div class="neonthis col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">À propos</div>
                              <div class="col-md-12 about-title wow fadeInUp" data-wow-delay="0.4s"><h5>Julien Boutoille</h5></div>
                        </div>

                        <div class="row picture">

                              <div class="col-md-4"></div>

                              <div class="col-md-5 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="about-img-one">
                                          <div id="realTarget" class="about-img about-one"></div>
                                    </div>
                              </div>

            </section>

            <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-8 more wow fadeInUp" data-wow-delay="0.7s">
                    <button id="btnReal" data-toggle="modal" data-target=".bd-example-modal-lg">Réalisations</button>
                  </div>
            </div>

                  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          
                          <h5 class="modal-title" id="exampleModalLongTitle">Réalisation</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>

                        </div>
                        <div class="modal-body">
                            
                            <div class="container-fluid">
                              
                              <div class="row">
                                <div class="col-md-12" class="blockImg">
                                  <div class="about-img-one mb-2">
                                      <div id="imgSiteOne" class="about-img about-one"></div>
                                  </div>
                                </div>
                                <div class="col-md-12 text-center mb-2">

                                    <a href="./realisations/sweatmore/index.php" target="_blank"><button id="btnReal">Voir le site</button></a>

                                </div>       
                              </div>


                              <div class="row">
                                <div class="col-md-12" class="blockImg">
                                  <div class="about-img-one mb-2">
                                      <div id="imgSiteTwo" class="about-img about-one"></div>
                                  </div>
                                </div>
                                <div class="col-md-12 text-center mb-2">

                                    <a href="https://gkaufmann.fr/" target="_blank"><button id="btnReal">Voir le site</button></a>

                                </div>      
                              </div>


                              <div class="row">
                                <div class="col-md-12" class="blockImg">
                                  <div class="about-img-one mb-2">
                                      <div id="imgSiteTree" class="about-img about-one"></div>
                                  </div>
                                </div>
                                <div class="col-md-12 ml-auto text-center mb-2">
                                  
                                  <a href="./realisations/retro_g_shop/index.html" target="_blank"><button id="btnReal">Voir le site</button></a>

                                </div>      
                              </div>


                              <div class="row">
                                <div class="col-md-12" class="blockImg">
                                  <div class="about-img-one mb-2">
                                      <div id="imgSiteFour" class="about-img about-one"></div>
                                  </div>
                                </div>
                                <div class="col-md-12 ml-auto text-center mb-2">
                                  
                                  <a href="./realisations/piebald/index.html" target="_blank"><button id="btnReal">Voir le site</button></a>

                                </div>      
                              </div>
                            
                            
                            </div>
                          </div>
                      </div>                                                                  
                    </div>
                  </div>


 
            <!-- CONTACT -->

            <a name="contact"></a>

            <section class="contact">


                        <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-2 section-index wow fadeInUp" data-wow-delay="0.3s">.04</div>
                              <div class="neonthis col-md-8 section-heading wow fadeInUp" data-wow-delay="0.4s">Me contacter</div>
                        </div>

                        <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-6 icon-title wow fadeInUp" data-wow-delay="0.5s">vous avez un projet intéressant ? <br>web, design, photo ou video <br>contactez moi</div>
                        </div>


                        <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-6">
                                    <form action="<?php echo strip_tags($_SERVER['REQUEST_URI']); ?>" name="contact-form" id="contact-form" method="post">

                                          <ul>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                      <label for="contact-name">Nom & Prénom :</label>
                                                      <div class="textarea">
                                                            <input type="text" name="nom" size="30" id="contact-name" value="" required>
                                                      </div>
                                                </li>

                                                <br>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                      <label for="contact-email">E-mail :</label>
                                                      <div class="textarea">
                                                            <input type="email" name="email" size="30" id="contact-email" value="" required>
                                                      </div>
                                                </li><br>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                      <label for="contact-début">Début du projet :</label>
                                                      <div class="textarea">
                                                            <input type="date" class="date" name="debut" size="30" id="contact-debut" value="" required>
                                                      </div>
                                                </li><br>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                      <label for="contact-fin">Fin du projet :</label>
                                                      <div class="textarea">
                                                            <input type="date" name="fin" size="30" id="contact-fin" value="" required>
                                                      </div>
                                                </li><br>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                     <label for="contact-project">Message :</label> 
                                                     <div class="textarea">
                                                     <textarea name="message" id="contact-project" rows="6" required></textarea>
                                                     </div>
                                                </li><br>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                
                                                      <label for="contact-type">Quel type de site souhaitez-vous :</label>
                                                      <select name="typeSite" id="inputState" class="form-control">
                                                            <option value="vitrine">Site vitrine</option>
                                                            <option value="catalogue">Site catalogue</option>
                                                            <option value="commerce">Site e-commerce</option>
                                                            <option value="marketplace">Marketplace</option>
                                                            <option value="none" selected>. . .</option>
                                                      </select>
                                                    
                                                </li><br>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                
                                                      <label for="inputState">Périmètre d'influence :</label>
                                                      <select name= "influence" id="inputState" class="form-control">
                                                      <option value="local">Local</option>
                                                      <option value="national">National</option>
                                                      <option value="international">International</option>
                                                      <option value="none" selected>. . .</option>
                                                      </select>
                                        
                                                </li><br>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                
                                                      <label for="inputState">Existence d'une charte graphique :</label>
                                                      <select name="charte" id="inputState" class="form-control">
                                                      <option value="oui">Oui</option>
                                                      <option value="non">Non</option>
                                                      <option value="none" selected>. . .</option>
                                                      </select>
                                  
                                                </li><br>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                
                                                      <label for="inputState">Maintenance du site :</label>
                                                      <select name="maintenance" id="inputState" class="form-control">
                                                      <option value="oui">Oui</option>
                                                      <option value="non">Non</option>
                                                      <option value="none" selected>. . .</option>
                                                      </select>
                                  
                                                </li><br>

                                                <li class="wow fadeInUp" data-wow-delay="0.6s">
                                                      <label>*Sécurité 3+6 =<input type="text" name="captcha" size="2"></label>
                                                      <div class="textarea"></div>
                                                </li><br>

                                                <p class="wow fadeInUp" data-wow-delay="0.9s" id="smallmsg">Je respecte votre vie privée.</p>
                                               

                                          </ul>
                                          
                                          
                                          <button type="submit" name="submit" value="Envoyer" id="contact-submit" class="send wow fadeInUp" data-wow-delay="0.6s">Envoyer</button>

                                    </form>
                              </div>

                  </div>

            </section>

            <!-- NEWSLETERRE -->

           <section class="newsletter">

                              
                              <div class="col-md-12">
                                    
                                    <div class="news-data">
                                          
                                          <div class="section-subheading">
                                                <h3 class="neonthis wow fadeInUp" data-wow-delay="0.3s">Newsletter</h3>
                                                <h4 class="wow fadeInUp" data-wow-delay="0.3s">Inscrivez-vous avec votre adresse e-mail pour recevoir des infos et offres pour votre site internet .</h4><br>
                                          </div>

                                                <div class="custom-control custom-checkbox mb-3 wow fadeInUp">
                                                  <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                                  <label class="acceptLois custom-control-label" for="customControlValidation1"> J'ai lu et j'accepte les <a href="./" data-toggle="modal" data-target="#exampleModalCenterOne">mentions légales</a> et la <a href="./" data-toggle="modal" data-target="#exampleModalCenterTwo">politique de confidentialité</a></label>
                                                </div><br>
                            


                                                      <!-- MODAL 1 -->
                                                      <div class="modal fade" id="exampleModalCenterOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                                      <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Mentions légales</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <p class="mention">Editeur du site<br>
                                                            Julien Boutoille est l'éditeur du présent site internet.</p>
                                                            
                                                            <p class="mention">Contacter l'éditeur<br>
                                                            L'éditeur peut être contacté via le présent formulaire de contact ou via l'adresse email boutoille.julien@gmail.com</p>

                                                            <p class="mention">Hébergeur du site<br>
                                                            Le présent site est hébergé sur https://www.planethoster.com/</p>

                                                            <p class="mention">Adresse de l'hébergeur<br>
                                                            L'adresse de l'hébergeur est la même que celle de l'éditeur.</p>

                                                            <p class="mention">Description des services<br>
                                                            Le présent site comporte les réalisations, une liste des compétences et connaissances acquises lors de ses réalisations ainsi qu'un formulaire</p>

                                                            <p class="mention">Propriété intellectuelle<br>
                                                            Le code source, le graphisme, les sons, les animations, les textes, ainsi que les informations et les contenus de ce présent site peuvent être librement utilisés, à condition de les distribuer sans modifications et de les attribuer à l’éditeur en citant son nom. Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, des images ou photos est strictement interdite sans l'accord exprès par écrit de l'éditeur.</p>

                                                            <p class="mention">Données personnelles<br>
                                                            Seule l'adresse email de l'utilisateur est utilisée par l'éditeur du présent site dans le seul but de pouvoir répondre par email à l'utilisateur.</p>

                                                            <p class="mention">A propos des cookies<br>
                                                            Le présent site n'utilise pas cookies.</p>

                                                            <p class="mention">Copyright © 2019 Julien Boutoille</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <a href="https://www.cnil.fr/fr/cnil-direct/question/mentions-legales-sur-un-site-internet-est-ce-obligatoire" target="_blank" ><button type="button" class="btn btn-secondary">+ infos</button></a>
                                                            </div>
                                                      </div>
                                                      </div>
                                                      </div>

                                                      <!-- MODAL 2 -->
                                                      <div class="modal fade" id="exampleModalCenterTwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                      <div class="modal-dialog modal-dialog-centered" role="document">
                                                      <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Politique de confidentialité</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <p class="mention">Conditions d’utilisation<br>
                                                            Ce site (www.jb-portfolio.yo.fr) est proposé en différents langages web (HTML5, Javascript, CSS, etc...) pour un meilleur confort d’utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des navigateurs modernes comme Modzilla Firefox, Google Chrome, etc... jb-portfolio met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de , et signaler toutes modifications du site qu’il jugerait utile. n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.</p>
                                                            
                                                            <p class="mention">Liens hypertextes<br>
                                                            Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. jb-portfolio ne dispose d’aucun moyen pour contrôler les sites en connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation. Les utilisateurs, les abonnés et les visiteurs des sites internet ne peuvent pas mettre en place un hyperlien en direction de ce site sans l’autorisation expresse et préalable de jb-portfolio. Dans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de jb-portfolio, il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien. jb-portfolio se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.</p>

                                                            <p class="mention">Déclaration à la CNIL<br>
                                                            Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l’égard des traitements de données à caractère personnel) relative à l’informatique, aux fichiers et aux libertés, ce site a fait l’objet d’une déclaration 1656629 auprès de la Commission nationale de l’informatique et des libertés (www.cnil.fr).</p>

                                                            <p class="mention">Litiges<br>
                                                            Les présentes conditions du site www.jb-portfolio.yo.fr sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l’interprétation ou de l’exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence , pour le règlement de contentieux éventuels, est le français.</p>

                                                            <p class="mention">Données personnelles<br>
                                                            De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet www.jb-portfolio.yo.fr Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ». Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur notre société, ou de recevoir les lettres d’information. Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d’accès. De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>

                                                            <p class="mention">Copyright © 2019 Julien Boutoille</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <a href="https://www.cnil.fr/fr/conformite-rgpd-information-des-personnes-et-transparence" target="_blank" ><button type="button" class="btn btn-secondary">+ infos</button></a>
                                                            </div>
                                                      </div>
                                                      </div>
                                                      </div>                             

                                          <div class="input-group wow fadeInUp" data-wow-delay="0.3s">
                                                <input type="email" class="form-control" placeholder="e-mail">   
                                                <button type="submit" name="contact-submit" id="contact-submit" class="send wow fadeInUp" data-wow-delay="0.3s">S'INSCRIRE</button>
                                          </div>

                                    </div>

                              </div>

           </section>

            <!-- FOOTER -->

            <div class="footer">

                  <div class="container">

                        <div class="info">

                              <div class="row">
                                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s" id="address">
                                          <p>France</p>
                                          <h4>Nord-Pas-de-Calais</h4>
                                          <h4>Boulogne-sur-mer</h4>
                                          <h4>62200</h4>

                                          <br><br>
                                    </div>

                                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s" id="media">
                                          <ul>
                                                <a href="https://www.facebook.com/profile.php?id=100014442556010" target="_blank" rel="noopener"><img src="img/ico/facebook.svg" class="social wow fadeInUp" data-wow-delay="0.5s"></a>

                                                <a href="https://www.instagram.com/codsteel/" target="_blank" rel="noopener"><img src="img/ico/instagram.svg" class="social wow fadeInUp" data-wow-delay="0.7s"></a>

                                                <a href="https://vimeo.com/user34318809" target="_blank" rel="noopener"><img src="img/ico/vimeo.svg" class="social wow fadeInUp" data-wow-delay="0.9s"></a>

                                                <a href="https://www.youtube.com/channel/UChoUDrSFHBVt7Uvsw85z8fA?view_as=subscriber" target="_blank" rel="noopener"><img src="img/ico/youtube.svg" class="social wow fadeInUp" data-wow-delay="1.1s"></a>

                                                <a href="https://www.linkedin.com/in/julien-boutoille-dev/" target="_blank" rel="noopener"><img src="img/ico/linkedin.svg" class="social wow fadeInUp" data-wow-delay="1.3s"></a>


                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s" id="mail">
                                          <p>Say Hello <img src="img/ico/hand.svg" class="social"></p>
                                          <h4><a href="mailto:boutoille.julien@gmail.com">boutoille.julien@gmail.com</a></h4>
                                          <h4>+33 6 26 20 56 77</h4>
                                          <h4>+33 3 59 44 17 34</h4>

                                          <br><br>
                                    <div class="col-md-12 wow fadeInUp" data-wow-delay="0.5s" id="copyright">
                                    <p>&copy; Tous droits réservés</p>
                                    <a href="./admin/index.php"><img src="img/ico/laptop.svg" class="social"></a>
                                    </div>
                                    
                                    </div>

                              </div>

                        </div>

                  </div>

            </div>

            </div>


      </div>

      
 
            <!-- SCRIPTS JS CDN BOOTSTRAP-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
            <!-- SCRIPTS JS LIBS-->
            <script type="text/javascript" src="./js/libs/wow.js"></script>
            <script type="text/javascript" src="./js/libs/sizzle.js"></script>
            <script type="text/javascript" src="./js/libs/mgglitch.js"></script>
            <script type="text/javascript" src="./js/libs/neon.js"></script>
            <script type="text/javascript" src="./js/libs/jquery.novacancy.js"></script>
            
            <!-- SCRIPTS JS CUSTOM -->
            <script type="text/javascript" src="./js/animportfolio.js"></script>
            <script type="text/javascript" src="./js/modal.js"></script>
            <script type="text/javascript" src="./js/neon.js"></script>

</body>
</html>