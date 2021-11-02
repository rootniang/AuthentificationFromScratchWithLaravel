Un petit projet pour avoir la main sur Laravel.
J'ai choisi de mettre en place un systeme de CRUD pour un petit blog.
L'idee c'est d'avoir un ensemble d'articles sur un page qui sera notre page d'accueil et qui sera visible pour tous.
Ensuite un backend ou un super admin pour creer modifier ou supprimer des posts.
Pour la modelisation on procedera comme suit:
Articles(idarticle, titre, contenu)
Auteur(idauteur, nom, prenom)
Categorie(idcategorie, nomcategorie)
cadre(idcadre, lien)

Un article appartient a une seule categorie
Un article peut avoir un seul auteur
Un auteur peut publier plusieurs articles
Un article peut avoir un seul image de cadre
 Authentification
Users(iduser, email, mdp, nom, prenom, role)
Un utilisateur peut etre un auteur et/ou un super admin
Un super admin pourra CRUD un admin et auteur, Categorie article etc..
Un auteur ne pourra que CRUD un article...
Let's start all this from scratch ;)
Day 1: Authentification 
Done ;) Pas terrible niveau front mais on va gerer tout ca apres ;)
