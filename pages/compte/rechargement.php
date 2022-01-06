<?php
include('functions/compte/rechargement.php');
isGranted();
?>
<div class="container-fluid princCompte py-5">
    <div class="card my-5">
        <h1 class="text-center">Recharger le compte</h1><br>
        <hr>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form method="post">
                    <p>Vous avez reçu lors de votre dépot un code à 10 caractères ; veuillez le renseigner.</p>
                    <input type="text" name="code_input" id="code_input" class="form-control mt-5" placeholder="1-2-3-&-1-2-3-4-5-6">
                    <div class="text-right">
                        <input type="submit" value="Confirmer" id="btn" class="btn btn-outline-primary mt-5 disabled" name="rechargement">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control {
        letter-spacing: 10px;
        text-transform: uppercase;
        font-size: 28px;
    }
</style>

<script>
    let input = document.getElementById('code_input');
    input.focus();

    input.addEventListener("keyup", (e) => {
        if (e.code != "Backspace" && input.value.length > 0 && input.value.length < 18) {
            input.value += "-";
        } else if (input.value.length > 19) {
            input.value = input.value.slice(0, -1);
        }
        if (input.value.length == 6) {
            input.value += "&";
            input.value += "-";
        }
        if (input.value.length == 19) {
            document.getElementById("btn").classList.remove("disabled");
        }
    })
</script>