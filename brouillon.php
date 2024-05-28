<section id="projects" class="bg-gray-800 py-10 md:py-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center text-yellow-300 mb-6 md:mb-12" data-aos="fade-up">Projets</h2>
    <div class="flex flex-wrap justify-center">
        <!-- Projet d'Architecture Réseau -->
        <div class="project-card m-4 p-6 bg-gray-700 rounded-lg shadow-lg text-left transform transition-transform hover:scale-105" data-aos="fade-up">
            <h3 class="text-2xl font-bold mb-4 text-blue-400">Projet d'Architecture Réseau</h3>
            <p class="mb-4">Projet réalisé en fin de 4e année d'école d'ingénieur</p>
            <p class="mb-4">Mise en place d'un réseau local sécurisé pour un championnat de jeu utilisant la méthodologie SCRUM.</p>
            <button class="details-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="toggleDetails(this)">Détails</button>
            <div class="project-details mt-4 hidden">
                <h4 class="text-xl font-bold mb-2">Descriptif du projet</h4>
                <ul class="list-disc list-inside mb-4">
                    <li>Mettre en place l’infrastructure réseau et système</li>
                    <li>Mettre en place la sécurité du réseau (répartition et segmentation de l'adresse IP de classe C 195.221.X.0 en 3 sous-réseaux)</li>
                    <li>Développer des scripts pour le lancement des compétitions à distance</li>
                </ul>
                <h4 class="text-xl font-bold mb-2">Solution proposée</h4>
                <h5 class="text-lg font-bold mb-1">Partie réseau :</h5>
                <ul class="list-disc list-inside mb-4">
                    <li>Un routeur pour interconnecter la ville au reste du monde</li>
                    <li>Un plan d’adressage IP</li>
                    <li>Une sauvegarde de la configuration sur un serveur</li>
                    <li>Sécurisation des flux LAN</li>
                </ul>
                <h5 class="text-lg font-bold mb-1">Partie système :</h5>
                <ul class="list-disc list-inside mb-4">
                    <li>Un serveur web pour l’affichage des scores et le lancement des parties</li>
                    <li>Un serveur de mail et une webmail pour les messages des rendez-vous</li>
                    <li>Deux serveurs DNS (Linux et Windows) pour la résolution de noms DMZ et Trusted</li>
                    <li>Un serveur d’annuaire Active Directory pour authentifier les joueurs</li>
                </ul>
                <h5 class="text-lg font-bold mb-1">Gestion des matchs :</h5>
                <ul class="list-disc list-inside mb-4">
                    <li>Une interface web sécurisée pour l’affichage des résultats (protection par login/mot de passe de l’annuaire)</li>
                    <li>Possibilité de lancer un serveur pour accueillir une compétition (Administrateur)</li>
                    <li>Pour éviter la triche, le joueur devra avoir devant son écran, le jeu, et uniquement le jeu</li>
                </ul>
                <h4 class="text-xl font-bold mb-2">Livrables</h4>
                <ul class="list-disc list-inside mb-4">
                    <li>Plan du réseau</li>
                    <li>Procédures d'installation de chaque équipement</li>
                    <li>Schéma de la base de données</li>
                    <li>Application web (PHP)</li>
                    <li>Scénario de test</li>
                </ul>
                <h4 class="text-xl font-bold mb-2">Objectifs pédagogiques</h4>
                <ul class="list-disc list-inside mb-4">
                    <li>Nommer et décrire les différents rôles d’un projet SCRUM</li>
                    <li>Appliquer et comprendre la méthodologie agile SCRUM dans un projet</li>
                    <li>Participer à un projet en mode agile</li>
                    <li>Déployer des services réseaux</li>
                    <li>Développer une application web</li>
                    <li>Connaître les commandes de base de l’IOS</li>
                    <li>Accroître les connaissances du shell</li>
                </ul>
                <h4 class="text-xl font-bold mb-2">Pré-requis</h4>
                <ul class="list-disc list-inside mb-4">
                    <li>Réseaux TCP/IP</li>
                    <li>IOS Cisco</li>
                    <li>Shell Linux</li>
                    <li>Web</li>
                    <li>PHP</li>
                    <li>VirtualBox</li>
                    <li>Windows Serveur</li>
                    <li>Apache</li>
                    <li>SMTP</li>
                </ul>
            </div>
        </div>
        <!-- Ajouter d'autres projets ici -->
    </div>
</section>