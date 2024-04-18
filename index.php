<!DOCTYPE html>
<html lang="fr">
    <title> formulaire des questionnaires </title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.js">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="js/main.js">

    </head>
    <body>

        <header class=" container-fluid"  style="text-align:center; width:70%;font-family: Arial, Helvetica, sans-serif; font-weight: bold;" >  
        <p><img src="css/img/logo.png" alt="logo"></p>
        <span class="header container-fluid">Questionnaires pour la création d'un site web </span>
        </header>
        <br><br>
        <div class="container form-control rounded" style="width: 70%; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
                        <h2 class="text-uppercase text-center">veillez repondre à ses différentes questions</h2>
                        <form  action="envoie.php" Method="POST">
                        <div class="mb-3">
          <label for="nom" class="form-label">Nom & Prenom</label>
          <input type="text" class="form-control" name="nom" id="nom" placeholder="Saisissez votre nom et prenom" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Saisissez votre email" required>
        </div>
        <div class="mb-3">
          <label for="statut" class="form-label">Votre Statut dans l'entreprise</label>
          <input type="statut" class="form-control" name="statut" id="email" placeholder="Saisissez votre statut" required>
        </div>
        <div class="mb-3">
          <label for="Q1" class="form-label"> 1- Y a-t-il des sites web existants que vous admirez ou dont vous aimeriez vous inspirer pour le design ou la fonctionnalité ?</label>
          OUI <input name="Q1" type="radio" onClick="afficher();" value="Oui">
          NON <input type="radio" name="Q1" value="Non" onClick="cacher();">
        </div> 
        <div id="champ_cache" class="mb-3" >
          <label for="nom_url" >Veuiilez nous donnez les URL des différents sites </label>
          <p id="champ_cache">URL1*  <input type="text" class="form-control" name="nom_url1" placeholder="www.monsiteweb.com"></p>
          <p id="champ_cache">URL2   <input type="text" class="form-control" name="nom_url2" placeholder="www.monsiteweb.com"></p>
        </div>
        <div class="mb-3">
          <label for="Q2" class="form-label">2- Avez-vous une / des fonctionnalités particulières à ajouter au site ?</label><br>
          OUI <input name="Q2" type="radio" onClick="affiche5();" value="Oui">
          NON <input type="radio" name="Q2" value="Non" onClick="cache5();">
        </div>
        <div id="champ_cache5" class="mb-3" >
          <label for="num_tel" >Lesquelles avec une briève description </label>
          <p id="champ_cache"><input type="text" class="form-control" name="fonctionnalite"  placeholder="Saisir ici la reponse "></p>
        </div>
        <div class="mb-3">
          <label for="Q3" class="form-label">3- Quel est votre calendrier ou vos délais pour la réalisation de ce projet ?</label><br>
          Date de début<input type="date" class="form-control" name="debut" id="Q3"  required><br>
          Date de fin<input type="date" class="form-control" name="fin" id="Q3" required>
        </div>
        <div class="mb-3">
          <label for="Q4" class="form-label">4- Disposez-vous déjà de contenu (texte, images, vidéos) pour le site, ou devons-nous le créer ?</label><br>
          OUI <input name="Q4" type="radio" onClick="affiche();" value="Oui">
          NON <input type="radio" name="Q4" value="Non" onClick="cache();">
           VOUS POUVEZ LE CREER <input type="radio" name="Q4" value="le creer" onClick="cache();">
        </div> 
        <div id="champ_cache2" class="mb-3" >
          <label for="num_tel" >Veuiilez nous les faires parvenir via Whatsapp </label>
          <p id="champ_cache"><input type="tel" class="form-control" name="num_tel" value="+224621256770" disabled ></p>
        </div>
        <div class="mb-3">
          <label for="Q5" class="form-label">5- Souhaitez-vous qu’on s’occupe de la mise à jour du contenu et du blogging de votre site ? </label>
          <select class="form-select form-select-lg mb-3 form-control" aria-label="Large select example" name="Q5" id="Q5" required>
              <option selected >Cliquez ici pour faire un choix</option>
              <option value="oui">OUI</option>
              <option value="non">NON</option>
              <option value="plustard"> A REPONDRE PLUSTARD </option>
              <option value="Non + formation"> NON, MAIS ON A BESOIN D'UNE FORMATION </option>
            </select>
        </div>
        <div class="mb-3">
          <label for="Q6" class="form-label">6- Avez-vous un choix spécifique en ce qui concerne la police d’écriture ? </label><BR></BR>
          OUI <input name="Q6" type="radio" onClick="affiche3();" value="Oui">
          NON <input type="radio" name="Q6" value="Non" onClick="cache3();">
        </div>
        <div id="champ_cache3" class="mb-3" >
          <label for="nom_police" >Saisir le / les nom(s) de police(s) </label>
          <p id="champ_cache3"><input type="text" class="form-control" name="nom_police" placeholder="Arial"  ></p>
        </div>
      <!--  <div class="mb-3">
          <label for="Q7" class="form-label">7- Envisagez-vous de mettre à jour votre site web vous-même ?   </label><BR></BR>
          OUI <input name="Q7" type="radio" onClick="affiche4();" value="Oui">
          NON <input type="radio" name="Q7" value="Non" onClick="cache4();">
        </div> -->
        <div id="champ_cache4" class="mb-3" >
          <label for="nom_police" >si Oui aurez-vous besoin d’une formation ? </label><br>
          OUI <input name="formation" type="radio"  value="Oui">
          NON <input type="radio" name="formation" value="Non">
          
        </div>

        <div class="mb-3">
          <label for="Q8" class="form-label">8-	Quels sont les objectifs principaux du site web de Susdev+ ?</label>
          <textarea class="form-control" name="Q8" id="message" rows="5" placeholder="Saisissez vos onbjectifs" required></textarea>
        </div>

        <div class="mb-3">
          <label for="Q9" class="form-label">9-	Quelle est la vision globale de l'image de marque que vous souhaitez véhiculer à travers le site ?</label>
          <textarea class="form-control" name="Q9" id="message" rows="5" placeholder="Ecrivez votre reponses ici " required></textarea>
        </div>

        <div class="mb-3">
          <label for="Q10" class="form-label">10-	Quels sont les principaux services ou produits que vous souhaitez mettre en avant sur le site ?</label>
          <textarea class="form-control" name="Q10" id="message" rows="5" placeholder="Ecrivez votre reponses ici " required></textarea>
        </div>
    

                          <button type="submit" class="btn btn-danger" style="width: 100%; text-align: center; margin-left: 0%;">Envoyer</button>
                        </form>
                      </div>
                    
                        
    </body>
    <script type="text/javascript">
        document.getElementById("champ_cache").style.display = "none";
        function afficher(){
        document.getElementById("champ_cache").style.display = "block";
        }
        function cacher(){
        document.getElementById("champ_cache").style.display = "none";
        }


        // debut pour cacher la question 4

        document.getElementById("champ_cache2").style.display = "none";
        function affiche(){
        document.getElementById("champ_cache2").style.display = "block";
        }
        function cache(){
        document.getElementById("champ_cache2").style.display = "none";
        }


        document.getElementById("champ_cache3").style.display = "none";
        function affiche3(){
        document.getElementById("champ_cache3").style.display = "block";
        }
        function cache3(){
        document.getElementById("champ_cache3").style.display = "none";
        }


        document.getElementById("champ_cache4").style.display = "none";
        function affiche4(){
        document.getElementById("champ_cache4").style.display = "block";
        }
        function cache4(){
        document.getElementById("champ_cache4").style.display = "none";
        }

        document.getElementById("champ_cache5").style.display = "none";
        function affiche5(){
        document.getElementById("champ_cache5").style.display = "block";
        }
        function cache5(){
        document.getElementById("champ_cache5").style.display = "none";
        }
        </script>
</html>