<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere -->

<?php
include __DIR__ . '/database.php';
include __DIR__ . './partials/header.php';
?>



<main>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <?php foreach ($dischi as $disco) { ?>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 d-flex justify-content-center text-center mx-3 my-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img class="img-fluid" src=<?php echo $disco['poster'] ?> alt="<?php echo $disco['title'] ?>">
                            <h5 class="card-title my-3 text-white"><?php echo $disco['title'] ?></h5>
                            <p class="card-subtitle text-muted"><?php echo $disco['author'] ?></p>
                            <p class="card-subtitle text-muted"><?php echo $disco['year'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>

</body>

</html>