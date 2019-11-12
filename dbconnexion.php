<?php
    try {
        $pdo= new pdo('mysql:host=localhost;dbname=dsi21_g2_2019', 'root', '');
    } catch (Exception $e) {
        echo 'Erreur: '.$e;
    }

