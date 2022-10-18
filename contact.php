<?php include 'header.php' ?>
<link href="assets/css/style.css" rel="stylesheet">


<body>
<form method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Adresse mail</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <input type="submit" class="btn btn_envoyer"></a>
</form>
<?php
    if (isset($_POST['message'])) {
        $retour = mail('thomasjouau@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>