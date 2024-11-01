<?php
// Code PHP ici
echo "Bienvenue sur notre site !";
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THOMAS-TECH GROUP - Opportunités pour Freelances</title>
    <meta name="description" content="THOMAS-TECH GROUP offre des opportunités pour les freelances en développement web, apk premium, mobile, e-commerce et IA. Rejoignez-nous pour des projets passionnants et une rémunération équitable.">
    <meta name="keywords" content="freelance, développement web, applications mobiles, e-commerce, IA, machine learning, projets payés, Haïti, Thomas-Tech">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="dropdown">
            <a href="javascript:void(0)" onclick="toggleMenu()"><i class="fas fa-bars"></i>Menu</a>
            <div id="menuDropdown" class="dropdown-content">
                <a href="#projects"><i class="fas fa-briefcase"></i>Projets</a>
                <a href="#benefits"><i class="fas fa-star"></i>Avantages</a>
                <a href="ex.html"><i class="fas fa-mobile-alt"></i>APKs Premium</a>
                <a href="#thomas"><i class="fas fa-user"></i>Thomas Info</a>
                <a href="#profile"><i class="fas fa-user-check"></i>Profil</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="javascript:void(0)" onclick="toggleCategories()"><i class="fas fa-list"></i>Catégories</a>
            <div id="categoriesDropdown" class="dropdown-content">
                <a href="#category1"><i class="fas fa-tag"></i>Catégorie 1 bientôt</a>
                <a href="#category2"><i class="fas fa-tag"></i>Catégorie 2 bientôt</a>
                <a href="#category3"><i class="fas fa-tag"></i>Catégorie 3 bientôt</a>
                <a href="#category4"><i class="fas fa-tag"></i>Catégorie 4 bientôt</a>
            </div>
        </div>
        <a href="info.html"><i class="fas fa-shopping-cart"></i>Panier</a>
    </nav>

    <header class="animate__animated animate__fadeIn">
        <h1>THOMAS-TECH GROUP</h1>
        <p class="subtitle">Découvrez des opportunités passionnantes pour les freelances talentueux</p>
    </header>

    <div class="container">
        <section id="projects" class="section animate__animated animate__fadeInUp">
            <h2><i class="fas fa-briefcase"></i> Nos Projets</h2>
            <p>Chez THOMAS-TECH GROUP, nous proposons une variété de projets stimulants pour les freelances talentueux. Chaque projet est une opportunité de démontrer votre expertise.</p>
            <div class="project-grid">
                <div class="project-item">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Applications Mobiles</h3>
                    <p>Développement d'apps, cracking APK et déblocage Android</p>
                    <ul>
                        <li><strong>Solutions sur mesure :</strong> Adaptées à vos besoins.</li>
                        <li><strong>Sécurité assurée :</strong> Protection de vos données.</li>
                        <li><strong>Visibilité optimisée :</strong> Applications qui captivent.</li>
                        <li><strong>Clients satisfaits :</strong> Témoignages élogieux.</li>
                        <li><strong>Offres spéciales :</strong> Promotions et consultations gratuites.</li>
                        <li><strong>Support 24/7 :</strong> Assistance disponible à tout moment.</li>
                    </ul>
                    <a href="ex.html" class="cta-button">Consultation Apks premium Gratuite</a>
                </div>
                <div class="project-item">
                    <i class="fas fa-globe"></i>
                    <h3>Sites Web</h3>
                    <p>Création de sites web modernes et réactifs, maîtrise du JavaScript</p>
                </div>
                <div class="card animate__animated animate__fadeInUp">
                    <h3><i class="fas fa-rocket"></i> Découvrez Nos APKs Premium</h3>
                    <p>Explorez un monde d'applications exclusives et de fonctionnalités avancées. Débloquez le plein potentiel de votre appareil avec nos APKs soigneusement sélectionnées !</p>
                    <ul class="benefits-list">
                        <li><i class="fas fa-check-circle"></i> Accès à des fonctionnalités premium</li>
                        <li><i class="fas fa-shield-alt"></i> Applications sécurisées et testées</li>
                        <li><i class="fas fa-sync-alt"></i> Mises à jour régulières</li>
                        <li><i class="fas fa-headphones-alt"></i> Support client dédié</li>
                    </ul>
                    <a href="catalogue.html" class="cta-button">Passez Votre Commande</a>
                </div>
                <div class="project-item">
                    <i class="fas fa-shopping-cart"></i>
                    <h3>E-commerce et Logiciels</h3>
                    <p>Plateformes de vente en ligne performantes et logiciels de déblocage de téléphones</p>
                </div>
            </div>
        </section>

        <section id="thomas" class="section animate__animated animate__fadeInUp">
            <h2><i class="fas fa-user-check"></i> Thomas - Votre Spécialiste en Solutions Numériques</h2>
            <p>Explorez les services offerts par Thomas, votre expert en technologies numériques :</p>
            <ul class="benefits-list">
                <li><i class="fas fa-download"></i> Vente d'APKs premium pour des expériences optimales sur votre appareil.</li>
                <li><i class="fas fa-unlock-alt"></i> Logiciels de déblocage de téléphones pour un accès total à vos appareils.</li>
                <li><i class="fas fa-comments"></i> Création de bots WhatsApp personnalisés pour améliorer votre communication.</li>
                <li><i class="fas fa-cogs"></i> Solutions sur mesure pour répondre à tous vos besoins numériques.</li>
                <li><i class="fas fa-phone-alt"></i> Un simple message suffit pour démarrer votre projet avec Thomas.</li>
            </ul>
        </section>

        <section id="benefits" class="section animate__animated animate__fadeInUp">
            <h2><i class="fas fa-star"></i> Avantages du Modèle par Projet</h2>
            <ul class="benefits-list">
                <li><i class="fas fa-money-bill-wave"></i> Rémunération basée sur la valeur livrée</li>
                <li><i class="fas fa-clock"></i> Flexibilité totale dans la gestion de votre temps</li>
                <li><i class="fas fa-project-diagram"></i> Diversité des projets et des défis</li>
                <li><i class="fas fa-chart-line"></i> Opportunités de croissance et d'apprentissage</li>
                <li><i class="fas fa-handshake"></i> Collaboration avec des équipes internationales</li>
            </ul>
        </section>

        <section id="profil" class="section animate__animated animate__fadeInUp">
            <h2><i class="fas fa-user-check"></i> Alex - Votre Expert en Technologie</h2>
            <p>Découvrez les services offerts par Alex, votre partenaire de confiance pour tous vos besoins en technologie :</p>
            <ul class="benefits-list">
                <li><i class="fas fa-laptop"></i> Vente de portables haut de gamme et déblocage de logiciels.</li>
                <li><i class="fas fa-check"></i> Service rapide et efficace : chez Alex, tout est simple et rapide.</li>
                <li><i class="fas fa-comments"></i> Communication efficace et service autonome pour votre tranquillité d'esprit.</li>
                <li><i class="fas fa-lightbulb"></i> Passion pour l'innovation et les meilleures offres en Côte d'Ivoire.</li>
                <li><i class="fas fa-phone"></i> Un simple appel suffit pour résoudre tous vos besoins technologiques.</li>
            </ul>
        </section>

        <section id="profile" class="section animate__animated animate__fadeInUp">
            <h2><i class="fas fa-user-check"></i> Profil Recherché</h2>
            <ul class="benefits-list">
                <li><i class="fas fa-check-circle"></i> Expérience avérée dans le développement de projets similaires</li>
                <li><i class="fas fa-tasks"></i> Excellentes compétences en gestion de projet et respect des délais</li>
                <li><i class="fas fa-comments"></i> Capacité à communiquer efficacement et à travailler de manière autonome</li>
                <li><i class="fas fa-lightbulb"></i> Passion pour l'innovation et l'apprentissage continu</li>
                <li><i class="fas fa-code"></i> Maîtrise des technologies modernes de développement</li>
            </ul>
        </section>

        <section id="faq" class="section animate__animated animate__fadeInUp">
            <h2><i class="fas fa-question-circle"></i> FAQ</h2>
            <div id="faqAccordion">
                <div class="faq-item">
                    <div class="faq-question">Comment fonctionne le paiement ?</div>
                    <div class="faq-answer">Le paiement est effectué en fonction du travail que vous effectuez pour chaque projet. Nous discutons des termes et des échéances au début de chaque collaboration pour assurer une rémunération juste et transparente.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Puis-je travailler sur plusieurs projets simultanément ?</div>
                    <div class="faq-answer">Absolument ! Tant que vous respectez les délais convenus, vous êtes libre de gérer votre charge de travail comme vous le souhaitez.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Y a-t-il des opportunités de projets à long terme ?</div>
                    <div class="faq-answer">Oui, nous avons souvent des projets qui s'étendent sur plusieurs mois, offrant ainsi une stabilité pour les freelances qui le souhaitent.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Quelles langues recherchez-vous ?</div>
                    <div class="faq-answer">Chez THOMAS-TECH GROUP, nous recherchons des développeurs francophones et/ou anglophones.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Avez-vous une limite d'âge ?</div>
                    <div class="faq-answer">Oui, la limite d'âge est de 13 ans, car nous croyons que cette génération apporte de jeunes talents prometteurs.</div>
                </div>
            </div>
        </section>

        <div class="text-center">
            <a href="in.html" class="cta animate__animated animate__pulse animate__infinite">Proposez vos services</a>
        </div>

        <div class="text-center" style="margin-top: 30px;">
            <div class="cta-container">
                <a href="#" class="scrolling-cta">
                    Tu veux quelques bénéfices de mes APK site gratuit ? Clique sûr  le bouton menu ensuite cliquez sur apk crack gratuit!
                </a>
            </div>
        </div>
    </div>

    <footer>
        <ul class="footer-nav-list">
            <li class="footer-nav-item">
                <h2 class="nav-title">Localisation</h2>
            </li>
            <li class="footer-nav-item flex">
                <div class="icon-box">
                    <ion-icon name="location-outline"></ion-icon>
                </div>
                <address class="content">
                    Yopougon - Abidjan, ouest Africa
                </address>
            </li>
            <li class="footer-nav-item flex">
                <div class="icon-box">
                    <ion-icon name="call-outline"></ion-icon>
                </div>
                <a href="tel:+2250705607226" class="footer-nav-link">+2250705607226</a>
            </li>
            <li class="footer-nav-item flex">
                <div class="icon-box">
                    <ion-icon name="mail-outline"></ion-icon>
                </div>
                <a href="mailto:kouamedjakiss765@gmail.com" class="footer-nav-link">kouamedjakiss765@gmail.com</a>
            </li>
        </ul>

        <ul class="footer-nav-list">
            <li class="footer-nav-item">
                <h2 class="nav-title">Follow Moi Réseaux Sociaux</h2>
                <div class="social-icons">
                    <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/HACKING995" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/kouamedjakiss765?igsh=MTB3bHV0MG5jMTduaA==" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@thomas.brow.d?_t=8pk1fTOpmHV&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a>
                </div>
            </li>
        </ul>

        <div class="footer-category">
            <div class="container">
                <h2 class="footer-category-title">THOMAS APK PREMIUM TOUTES UTILISATEURS</h2>
                <div class="footer-category-box">
                    <h3 class="text-orange">APPLICATION PREMIUM DISPONIBLE:</h3>
                    <a href="catalogue.html" class="footer-category-link">APK premium</a>
                    <a href="catalogue.html" class="footer-category-link">Canal+ tout pays</a>
                    <a href="catalogue.html" class="footer-category-link">bot WhatsApp & web développeur</a>
                    <a href="catalogue.html" class="footer-category-link">Canvas premium</a>
                    <a href="catalogue.html" class="footer-category-link">IPTV & Version</a>
                    <a href="catalogue.html" class="footer-category-link">Toutes Version</a>
                    <a href="catalogue.html" class="footer-category-link">Crack apk</a>
                </div>
            </div>
        </div>

        <ul class="footer-nav-list">
            <li class="footer-nav-item">
                <h2 class="nav-title">Fonctionnalité</h2>
            </li>
            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">JUSTE PEU IMPORTE ANDROID UTILISER</a>
            </li>
            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">ORDINATEUR POUR UTILISER</a>
            </li>
            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">CANVAS PRO</a>
            </li>
            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">CANAL+ A VIE TOUT PAYS</a>
            </li>
            <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">BOT WHATSAPP</a>
            </li>
        </ul>

        <ul class="footer-nav-list">
            <li class="footer-nav-item">
                <h2 class="text-blue">THOMAS SERVICE</h2>
            </li>
            <li class="footer-nav-item">
                <a href="#" class="text-yellow">Gratuite Ici-</a>
            </li>
            <li class="footer-nav-item">
                <a href="#" class="text-yellow">Mes Apk premium payant</a>
            </li>
            <li class="footer-nav-item">
                <a href="#" class="text-yellow">Tu veux plus d'infos</a>
            </li>
            <li class="footer-nav-item">
                <a href="contact.html" class="text-yellow">Contacter moi</a>
            </li>
            <li class="footer-nav-item">
                <a href="#" class="text-yellow">Canal+ Toutes pays</a>
            </li>
        </ul>

        <div class="footer-bottom">
            <a href="paiement.html">
                <div class="container">
                    <img src="payement.png" alt="payment method" class="payment-img">
                </div>
            </a>
            <p>&copy; 2024 THOMAS-TECH GROUP. Tous droits réservés. Cliquez sur les icônes ci-dessous projets en cours .....</p>
        </div>

        <!-- Section Statistiques -->
        <section class="stats-section animate__animated animate__fadeInUp">
            <h2><i class="fas fa-chart-bar"></i> Nos Statistiques</h2>
            <div class="stats-container">
                <div class="stat-box">
                    <div class="stat-number" id="dailyVisits">0</div>
                    <div class="stat-label">Visites Aujourd'hui</div>
                    <div class="stat-icon"><i class="fas fa-users"></i></div>
                </div>
                <div class="stat-box">
                    <div class="stat-number" id="weeklyVisits">0</div>
                    <div class="stat-label">Visites cette Semaine</div>
                    <div class="stat-icon"><i class="fas fa-calendar-week"></i></div>

                <div class="stat-box">
                    <div class="stat-number" id="monthlyVisits">0</div>
                    <div class="stat-label">Visites ce Mois</div>
                    <div class="stat-icon"><i class="fas fa-calendar-alt"></i></div>
                </div>
                <div class="stat-box">
                    <div class="stat-number" id="totalUsers">0</div>
                    <div class="stat-label">Utilisateurs Totaux</div>
                    <div class="stat-icon"><i class="fas fa-user-friends"></i></div>
                </div>
            </div>
        </section>
    </footer>

    <script src="script13.js"></script>
    <script>
        function toggleMenu() {
            const menuDropdown = document.getElementById("menuDropdown");
            menuDropdown.classList.toggle("show");
        }

        function toggleCategories() {
            const categoriesDropdown = document.getElementById("categoriesDropdown");
            categoriesDropdown.classList.toggle("show");
        }

        // Statistiques fictives pour démonstration
        document.getElementById("dailyVisits").innerText = "150";
        document.getElementById("weeklyVisits").innerText = "1200";
        document.getElementById("monthlyVisits").innerText = "5000";
        document.getElementById("totalUsers").innerText = "20000";

        // Script pour le FAQ
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.querySelector('.faq-question').addEventListener('click', () => {
                item.querySelector('.faq-answer').classList.toggle('show');
            });
        });
    </script>
    <style>
        .dropdown-content.show {
            display: block;
        }
    </style>
</body>
</html>

                    
