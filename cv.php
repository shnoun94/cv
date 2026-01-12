<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        CV
    </title>
</head>
<body>
    <form name="formulaire" action="/ma-page-de-traitement" onsubmit="return validation()" method="post" >Informations
    <ul>
        <li>
            <label for="Nom">Nom :</label>
            <input type="text" id="Nom" name="Nom" />
        </li>
        <li>
            <label for="prénom">Prénom :</label>
            <input type="text" id="prénom" name="user_name" />
        </li>
        <li>
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="user_titre" />
        </li>
        <li>
            <label for="numéro">Numéro :</label>
            <input type="number" id="numéro" name="numéro" />
        </li>
        <li>
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" />
            
        </li>
        <li>
            <label for="description">Description :</label>
            <input type="text" id="description" name="user_description" />
        </li>
        <li>
            <label for="compétences">Compétences :</label>
            <select id="compétences"> name="compétences">
                <optgroup label="compétences">
                    <option value="HTML">HTML débutant</option>
                    <option value="HTML">HTML intérmediaire</option>
                    <option value="HTML">HTML expert</option>
                    <option value="CSS">CSS débutant</option>
                    <option value="CSS">CSS intérmediaire</option>
                    <option value="CSS">CSS expert</option>
                    <option value="PHP">PHP débutant</option>
                    <option value="PHP">PHP intérmediaire</option>
                    <option value="PHP">PHP expert</option>
                    <option value="JavaScipt">JavaScipt débutant</option>
                    <option value="JavaScipt">JavaScipt intérmediaire</option>
                    <option value="JavaScipt">JavaScipt expert</option>
                    <option value="Git & Github">Git & Github débutant</option>
                    <option value="Git & Github">Git & Github intérmediaire</option>
                    <option value="Git & Github">Git & Github expert</option>
                </optgroup>
            </select>
        </li>
        <li>
            <label for="expériences">Expériences :</label>
            <input type="text" id="intitulé du poste" name="poste" /><br>
            <input type="text" id="entreprise" name="entrprise" /><br>
            <input type="date" id="début" name="début" /><br>
            <input type="date" id="fin" name="fin" />
        </li>
        <li>
            <label for="formations">Formations :</label>
            <input type="text" id="intitulé de la formation" name="intitulé de la formation" /><br>
            <input type="text" id="lieu" name="lieu" /><br>
            <input type="date" id="début" name="début" /><br>
            <input type="date" id="fin" name="fin" /><br>
            <input type="text" id="descriptionf" name="description" /><br>
        </li>
    </ul>
    <!-- <button class="téléchargement" type="button">Téléchargement</button> -->
<div class="buttons">
      <input type="submit" value="Envoyer" name="Envoyer" />
      <input type="reset" value="Rénit" name="Reset" />
    </div>    
</form>
    <script src="cv.js"></script>
</body>
</html>