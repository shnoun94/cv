<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="cv.css" rel="stylesheet" />
    <title>
        CV
    </title>
</head>

<body>
    <div class="display">
        <div class="formulaire">
            <h2>INFORMATIONS GÉNÉRALES</h2>
            <form name="formulaire" action="cv.php" onsubmit="return validation()" method="post"
                enctype="multipart/form-data">
                <ul>
                    <li>
                        <label for="nom">Nom</label><br>
                        <input type="text" id="nom" name="nom" />
                    </li>
                    <li>
                        <label for="prénom">Prénom</label><br>
                        <input type="text" id="prénom" name="prénom" />
                    </li>
                    <li>
                        <label for="titre">Titre professionnel</label><br>
                        <input type="text" id="titre" name="titre" />
                    </li>
                    <li>
                        <label for="mail">Adresse mail</label><br>
                        <input type="text" id="mail" name="mail" />
                    </li>
                    <li>
                    <li>
                        <label for="adresse">Adresse</label><br>
                        <input type="text" id="adresse" name="adresse" />

                    </li>
                    <label for="numéro">Numéro</label><br>
                    <input type="tel" id="numéro" name="numéro" />
                    </li>

                    <li>
                        <label for="description">Description</label><br>
                        <input type="text" id="description" name="description" />
                    </li>

                    <li>
                </ul>
                <section class="container">
                    <p class="text">
                        Compétences
                    </p>
                    <section class="competences">

                        <input type="checkbox" id="HTML" name="HTML" value="HTML">
                        <label for="HTML">HTML</label><br>
                        </label>

                        <input type="checkbox" id="CSS" name="CSS" value="CSS">
                        <label for="CSS">CSS</label><br>
                        </label>


                        <input type="checkbox" id="PHP" name="PHP" value="PHP">
                        <label for="PHP">PHP</label><br>
                        </label>


                        <input type="checkbox" id="JavaScipt" name="JavaScipt" value="JavaScipt">
                        <label for="JavaScipt">JavaScipt</label>
                        </label>
                    </section>

                    <li class="f">
                        <label for="formations">Formations</label><br>
                        <input type="text" id="intitulé de la formation" name="formation"
                            placeholder="Intitulé de diplôme ou de la formation" /><br>
                        <input type="text" id="lieu" name="lieu" placeholder="Établissement" /><br>
                        <input type="date" id="début" name="début" /><br>
                        <input type="date" id="fin" name="fin" /><br>
                    </li>
                </section>
                <ul>
                    <h2>ÉXPERIENCES PROFESSIONELLES</h2>
                    <li>
                        <label for="expériences">Expériences</label><br>
                        <input type="text" id="intitulé du poste" name="poste" placeholder="Intitulé du poste" /><br>
                        <input type="text" id="entreprise" name="entreprise" placeholder="Nom de l'entreprise" /><br>
                        <input type="date" id="début" name="début" /><br>
                        <input type="date" id="fin" name="fin" /><br>
                        <input type="text" id="decription des missions" name="missions"
                            placeholder="Decription des missions" /><br>
                    </li>

                </ul>
                <section class="buttons">
                    <input type="submit" value="Envoyer" name="Envoyer" />
                    <input type="reset" value="Rénit" name="Reset" />
                </section>
        </div>
        </form>

        <div class="cv">
            <div class="infos">
                <div class="prenom"> <?php echo $_POST["nom"] . "\n" . $_POST["prénom"] . "<br/> "; ?> </div>
                <div class="titre"> <?php echo $_POST["titre"] . "<br/>"; ?></div>
                <div class="propos"> <?php echo "À propos de moi"; ?></div>
                <div class="proposm"><?php echo $_POST["description"] . "<br/>"; ?> </div>
            </div>
            <div class="tout">
                <div class="dis-dis">
                    <div class="contact">Contact</div>
                    <section class="svg-mail"><img loading="lazy" src="/svg/envelope-icon.svg" width="20" height="20"
                            alt="mail"></section>
                    <div class="mail"> <?php echo $_POST["mail"] . "<br/>"; ?></div>
                    <section class="svg-tel"><img loading="lazy" src="/svg/phone-icon.svg" width="20" height="20"
                            alt="téléphone"></section>
                    <div class="tel"> <?php echo $_POST["numéro"] . "<br/>"; ?></div>
                    <section class="svg-adresse"><img loading="lazy" src="/svg/maps-pin-black-icon.svg" width="20"
                            height="20" alt="adresse"></section>
                    <div class="adresse"> <?php echo $_POST["adresse"] . "<br/>"; ?></div>

                    <div class="competence">Compétences</div>
                    <div class="comp">
                        <div class="html">
                            <?php if (isset($_POST["HTML"])) {
                                $HTML = "+HTML" . $_POST['HTML'];
                                echo $_POST["HTML"] . "<br/>";
                            } ?>
                        </div>
                        <div class="css"><?php
                        if (isset($_POST["CSS"])) {
                            $CSS = "+CSS" . $_POST['CSS'];
                            echo $_POST["CSS"] . "<br/>";
                        } ?></div>
                        <div class="php"><?php
                        if (isset($_POST["PHP"])) {
                            $PHP = "+PHP" . $_POST['PHP'];
                            echo $_POST["PHP"] . "<br/>";
                        } ?></div>
                        <div class="java"><?php
                        if (isset($_POST["JavaScipt"])) {
                            $JavaScipt = "+JavaScipt" . $_POST['JavaScipt'];
                            echo $_POST["JavaScipt"] . "<br/>";
                        } ?></div>
                    </div>
                    <div class="formation">Formation </div>
                    <div class="d-f"><?php
                    echo $_POST["début"] . " - ";
                    echo $_POST["fin"] . "<br/>"; ?></div>
                    <div class="ff"><?php
                    echo $_POST["formation"] . "<br/>"; ?></div>
                    <div class="lieu"><?php
                    echo $_POST["lieu"]; ?></div>
                    <div class=v-line></div>
                </div>
                <div class="dis">
                    <div class="date">
                        <?php
                        echo $_POST["début"] . " - ";
                        echo $_POST["fin"] . "<br/>"; ?>
                    </div>
                    <div class="Poste">
                        <?php
                        echo $_POST["poste"] . "<br/>"; ?>
                    </div>
                    <?php
                    echo $_POST["missions"] . "</br>";
                    echo "Nom de l'entreprise<br>" . $_POST["entreprise"] . "<br/>";
                    ?>
                </div>
            </div>
        </div>
        <script src="cv.js"></script>
</body>
</html>