<?php
require 'ConnectionBD.php';
// require 'menuProduits.php';
?>
<html>
    <head>
        <title>InYour_Area</title>
        
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <style>
                a {
                        text-decoration: none;
                        background-color:pink; 
                        color: #fff;
                        font-size:30px;
                         }

                        a:hover {
                        text-decoration: none;
                        background-color: #fff;
                        color: pink;
                        }

                    
            </style>
    </head>
    <body>
            <form method="post">
                <table class="table table-dark">
                    <tr>
                        <th>Image</th>
                        <th>Titre</th> 
                        <th>Prix DH</th>
                        <th></th>
                    </tr>
                    <?php
                    $select=$conn->query("select * from produit");
                    while($s=$select->fetch(PDO::FETCH_OBJ)){
                    ?>
                    <tr>
                        <td><img src="images/produit/<?= $s->numproduct;?>1.png"></td>
                        <td class="title"><?= $s->title;?></td>
                        <td><?= $s->price;?></td>
                        <td><a href="panier.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a></td>
                    </tr>    
                    <?php
                    }
                    ?>
    </body>
</html>    