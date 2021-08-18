<?php require_once 'views/blocs/header.php'; ?>

<main class="main-bg bgc3 flex ju-co-ce">
    <div class="wrapper main">
        <h3 class="c1 t3 p1">Devis :</h3>
        <div class="devis bgc2 flex col">
            <div class="flex row space-between">
            <ul class="list-devis flex col al-it-fs margin-0">
                <li>
                    <p class="c1 t4 p1 bold">Vendeur</p>
                </li>
                <li>
                    <p class="c1 t4 p1">Nom : Au petit bureau</p>
                </li>
                <li>
                    <p class="c1 t4 p1">Adresse : 1 rue de l'encre, Atlantis, Océan</p>
                </li>
                <li>
                    <p class="c1 t4 p1">Numéro de Siren : 123 456 789</p>
                </li>
                <li>
                    <p class="c1 t4 p1">Enrengistré au RCS/RM de Atlantis</p>
                </li>
                <li>
                    <p class="c1 t4 p1">Numéro de télephone : +33 04 04 04 04 04</p>
                </li>
            </ul>
            <img class="logo-devis" src="public/imgs/logo_tp.devis_T.H.png" alt="">
            </div>
            <ul class="list-devis flex col al-it-fs al-se-fe margin-0">
                <li>
                    <p class="c1 t4 p1 bold">Client</p>
                </li>
                <li>
                    <p class="c1 t4 p1">Nom : <?= htmlspecialchars($_POST['name']) ?></p>
                </li>
                <li>
                    <p class="c1 t4 p1">Adresse : <?= htmlspecialchars($_POST['adresse']) ?></p>
                </li>
                <?php

                    if (isset($_POST['telephone'])){

                ?>

                    <li>
                        <p class="c1 t4 p1">Numéro de télephone : <?= htmlspecialchars($_POST['telephone']) ?></p>
                    </li>
                
                <?php
                    }
                ?>
                <li>
                    <p class="c1 t4 p1">Forme juridique : <?= htmlspecialchars($_POST['formej']) ?></p>
                </li>
                <li>
                    <p class="c1 t4 p1">Numéro de TVA : <?= htmlspecialchars($_POST['numtva']) ?></p>
                </li>
            </ul>
            <div>
                <p class="c1 t4 p1">
                    Devis numéro : 1
                    <br>
                    Devis réalisé le : <?= date('d/m/Y') ?>
                </p>
            </div>
            <table class="table-devis">
                <tr>
                    <th colspan="2">Désignation des produits</th>
                    <th>Quantité</th>
                    <th>Prix <abbr title="Hors taxe">HT</abbr> unitaire €</th>
                    <th>Total HT €</th>
                </tr>

                <?php
                    foreach ($nom_produit as $key => $value) {

                        if ($_POST[$key]) {
                            
                ?>            

                <tr>
                    <td colspan="2"> <?= $value ?> </td>
                    <td> <?= htmlspecialchars($_POST[$key]) ?> </td>
                    <td> <?= htmlspecialchars(str_replace('.', ',', $prix_produit[$key]))?> </td>
                    <td> <?= htmlspecialchars(str_replace('.', ',',($_POST[$key] * $prix_produit[$key]))) ?> </td>
                </tr>

                <?php
                        }

                    }
                ?>

            </table>
            <!-- Si reduction afficher ici -->
            <table class="table-total flex col al-se-fe al-it-fe">
                <tr>
                    <th>Total HT €</th>
                    <td> <?= $ht ?> </td>
                </tr>
                <tr>
                    <th>Montant TVA(10%) €</th>
                    <td> <?= $tva ?> </td>
                </tr>
                <tr>
                    <th>Total <abbr title="Toutes taxes comprises">TTC</abbr> €</th>
                    <td> <?= ($ht + $tva) ?> </td>
                </tr>
            </table>
        </div> 
        <p class="c1 t4 p1">Le devis vous seras envoyer à cette adresse email : <?= $_POST['email'] ?></p>
    </div>
</main>

<?php require_once 'views/blocs/footer.php' ?>