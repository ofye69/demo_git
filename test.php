<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            Ceci est une modification ...<br/>
            <?php
            $a = array('k1' => 'v1', 'k2' => 'v2', 'k3' => 'v3', 'k4' => array('k41' => 'v41', 'k42' => 'v42'));

            foreach ($a as $key => $value) {
                if (is_array($value) === FALSE) {
                    var_dump('Key: ' . $key . ' Value : ' . $value);
                } else {
                    foreach ($value as $index => $data) {
                        var_dump('Key: ' . $index . ' Value : ' . $data);
                    }
                }
            }
            ?>
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
        
        <?php
        /* Encore du PHP
        Toujours du PHP */
        ?>        
    </body>
</html>
