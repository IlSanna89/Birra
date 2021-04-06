<?php include "partials/header.php" ?>  
<main>
<div class="container form"> 
            <div class="alert alert-secondary" role="alert">
                <h4 class="sent-notification"></h4>
            </div>

            <form id="myForm">
                <h2>Contattaci</h2>

                <div class="form-group">
                <label>Nome</label>
                <input class="form-control" id="name" type="text" placeholder="Inserisci il Nome">
                </div>

                <div class="form-group">
                <label>Email</label>
                <input class="form-control" id="email" type="text" placeholder="Inserisci l'indirizzo Mail">
                </div>

                <div class="form-group">
                <label>Oggetto</label>
                <input class="form-control" id="subject" type="text" placeholder="Oggetto della Mail">
                </div>

                <div class="form-group">
                <label>Messaggio</label>
                <textarea class="form-control" id="body" rows="5" placeholder="Messaggio di testo"></textarea>
                </div>

                <button class="btn btn-primary" type="button" onclick="sendEmail()" value="Send An Email">Submit</button>
            </form>
        </div>
</main>
        <?php include "partials/footer.php" ?>  
