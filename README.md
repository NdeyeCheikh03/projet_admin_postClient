# Gestion des Uploads de Fichiers en PHP

Ce script PHP permet de gérer le téléchargement de fichiers depuis un formulaire HTML. Lorsqu'un fichier est téléchargé, il est stocké dans un répertoire local spécifié.
# Tech Innovate Solutions Website

Ce fichier HTML représente le code source d'un site web pour Tech Innovate Solutions. Il utilise des balises HTML et des styles CSS pour créer une interface utilisateur attrayante. Voici un aperçu des principales sections et fonctionnalités :

#  Structure du Document

- **DOCTYPE et Balise HTML :**
  Le document commence par une déclaration DOCTYPE HTML5 et une balise HTML de base.

- **En-tête (`<head>`) :**
  L'en-tête contient la déclaration du jeu de caractères, le titre de la page, et les styles CSS intégrés.

- **Corps (`<body>`) :**
  Le corps du document contient plusieurs sections, notamment un en-tête, une barre de navigation, des sections pour les services, l'entreprise et les contacts, et un pied de page.

# Style CSS

- Le fichier contient des règles de style CSS pour définir l'apparence de la page, y compris la police, les couleurs, la mise en page, et les effets de survol.

#  Fonctionnalités
 **Navigation :**
   - La barre de navigation permet de naviguer rapidement vers les sections principales du site.

 **Services :**
   - Une section présente les services offerts par Tech Innovate Solutions.

 **À Propos :**
   - Une section fournit des informations sur l'entreprise et sa mission.

 **Contact :**
   - Une section invite les visiteurs à contacter l'entreprise et inclut un formulaire d'envoi de fichiers.

 **Gestion des Fichiers :**
   - Un formulaire permet le téléchargement de fichiers.
   - Une liste des fichiers stockés est affichée avec la possibilité de les télécharger.
   - Un formulaire supplémentaire permet la suppression de fichiers.

# Suppression de Fichier en PHP

Ce script PHP permet de supprimer un fichier spécifié à partir des données d'un formulaire HTML. Voici comment il fonctionne :

#  Fonctionnalités

- Le script vérifie si la méthode de requête est POST et si la variable `delete` est définie dans la requête.
- Il récupère le nom du fichier à supprimer à partir de la variable `delete`.
- Vérifie si le fichier existe.
- Si le fichier existe, il est supprimé à l'aide de la fonction `unlink`.
- Un message est affiché pour indiquer si la suppression a réussi ou si le fichier n'existe pas.

#  Utilisation

 **Intégration dans un Formulaire HTML :**
   - Intégrez ce code PHP dans le fichier qui traitera le formulaire de suppression (par exemple, `delete_file.php`).

    Exemple de formulaire :

    ```html
    <form action="delete_file.php" method="post">
        <input type="text" name="delete" placeholder="Nom du fichier à supprimer">
        <input type="submit" value="Supprimer le fichier">
    </form>
    ```
# Liste de Téléchargement de Fichiers en PHP

Ce script PHP génère une liste de liens pour télécharger les fichiers stockés dans le répertoire "uploads". Voici comment il fonctionne :

# Fonctionnalités

- Le script utilise la fonction `glob` pour récupérer la liste des fichiers dans le répertoire "uploads".
- Il utilise ensuite une boucle `foreach` pour parcourir chaque fichier.
- Pour chaque fichier, un lien est généré avec l'attribut `download`, permettant aux utilisateurs de télécharger le fichier directement.

# Utilisation

1. **Intégration dans une Page HTML :**
   - Intégrez ce code PHP dans la page où vous souhaitez afficher la liste de téléchargement.

    Exemple d'intégration :

    ```php
    <?php
    $files = glob("uploads/*");
    foreach ($files as $file) {
        echo '<a href="' . $file . '" download>' . basename($file) . '</a><br>';
    }
    ?>
    ```

