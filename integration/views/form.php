<?php require_once 'views/blocs/header.php'; ?>

<main class="main-bg flex ju-co-ce bgc3">
    <div class="main wrapper flex col">
        <h3 class="t3 c1 p1 te-al-st">Réaliser un devis :</h3>

        <?php if (isset($message['txt'])) {    ?>

            <p class="c1 t4 p1 <?= $message['type'] ?>"> <?= $message['txt'] ?> </p>

        <?php   }   ?>

        <form action="index.php" method="post" class="flex col" id="devis">    <!-- Je n'ai pour l'instant pas mis -->
            <section>                                                               <!-- de "required" sur les input -->
                <h4 class="c1 t4 p1 te-al-ce">Informations client :</h4>            <!-- pour faciliter les tests -->
                <div class="flex row space-evenly">
                    <div>
                        <div class="flex row ju-co-fe al-it-ce">
                            <label for="name">Nom * :</label>
                            <input name="name" id="name" type="text" required>
                        </div>
                        <div class="flex row ju-co-fe al-it-ce">
                            <label for="email">Email * :</label>
                            <input name="email" id="email" type="email" required>
                        </div>
                        <div class="flex row ju-co-fe al-it-ce">
                            <label for="tel">Télephone :</label>
                            <input name="tel" id="tel" type="tel">
                        </div>
                    </div>
                    <div>
                        <div class="flex row ju-co-fe al-it-ce">
                            <label for="adresse">Adresse * :</label>
                            <input name="adresse" id="adresse" type="text" required>
                        </div>
                        <div class="flex row ju-co-fe al-it-ce">
                            <label for="formej">Forme juridique * :</label>
                            <select name="formej" id="formej" required>
                                <option>EL</option>
                                <option>EIRL</option>
                                <option>SARL/EURL</option>
                                <option>SAS/SASU</option>
                            </select>
                        </div>
                        <div class="flex row ju-co-fe al-it-ce">
                            <label for="numtva">Numéro de TVA * :</label>
                            <input name="numtva" id="numtva" type="text" required>
                        </div>
                    </div>
                </div>
                <p class="c1 p1 t5 te-al-ce">* Ces champs sont à remplir</p>
            </section>
            <section class="info_com flex col al-it-ce">
                <h4 class="c1 t4 p1 te-al-ce">Informations commande :</h4>
                <div class="flex col ju-co-fe">
                    <div class="flex row ju-co-fe al-it-ce">
                        <label for="stylos_b">Stylos à billes :</label>
                        <input name="stylos_b" id="stylos_b" type="number" step="1" value="0">
                    </div>
                    <div class="flex row ju-co-fe al-it-ce">
                        <label for="stylos_p">Stylos à plummes :</label>
                        <input name="stylos_p" id="stylos_p" type="number" step="1" value="0">
                    </div>
                    <div class="flex row ju-co-fe al-it-ce">
                        <label for="gommes">Gommes :</label>
                        <input name="gommes" id="gommes" type="number" step="1" value="0">
                    </div>
                    <div class="flex row ju-co-fe al-it-ce">
                        <label for="crayons_p">Crayons à papier :</label>
                        <input name="crayons_p" id="crayons_p" type="number" step="1" value="0">
                    </div>
                </div>
            </section>
            <div class="flex ju-co-ce">
                <button class="p1 t4 c1" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</main>

<?php require_once 'views/blocs/footer.php' ?>