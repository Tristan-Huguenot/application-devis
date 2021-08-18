<?php

if (isset( $_POST['name'], $_POST['adresse'], $_POST['email'], $_POST['formej'], $_POST['numtva'])) {

    if ( !empty($_POST['name']) && !empty($_POST['adresse']) && !empty($_POST['email']) && !empty($_POST['formej']) && !empty($_POST['numtva'])) {

        $nom_produit = [
            'stylos_p' => 'Stylos à plumes',
            'stylos_b' => 'Stylos à billes',
            'gommes' => 'Gommes',
            'crayons_p' => 'Crayons à papier',
        ];
        $prix_produit = [
            'stylos_p' => 2.95,
            'stylos_b' => 0.9,
            'gommes' => 0.5,
            'crayons_p' => 0.35,
        ];
        
        
        
        $ht = 0;
        
        foreach ($nom_produit as $key => $value) {
        
            if ($_POST[$key]) {
                $ht += $_POST[$key] * $prix_produit[$key];
            }
        
        }
        
        $tva = $ht * 0.1;

        require_once 'views/devis.php';

    }
    else {
        
        $message = [ 'type' => 'warning', 'txt' => 'Certains champs n\'ont pas été remplis !'];
        require_once 'views/form.php';
        
    }

}
else{
    
    require_once 'views/form.php';

}