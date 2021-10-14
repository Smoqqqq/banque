<div class="container-fluid pagePrinc1">
    <div class="carteInscription">
        <div class="row num11">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
            </svg>
        </div>
        <div class="row num22">
            <h3>Inscription</h3>
        </div>
        <div class="row num44">
        <div class="col-sm-6">
                <h3>Je souhaite ouvrir un :</h3>
                <label for="account_type" class="form-label">Type de compte</label>
                <select name="account_type" id="account_type" class="form-control">
                    <option value="Compte individuel">Compte individuel</option>
                    <option value="Compte joint">Compte joint</option>
                </select>
                <label for="country" class="form-label">Pays de naissance</label>
                <select name="country" id="country" class="form-control">
                    <option value="France">France</option>
                    <option value="Autre">Autre</option>
                </select>
                <label for="city" class="form-label">Ville</label>
                <input type="text" name="city" id="city" placeholder="Ville" class="form-control">
                <label for="street" class="form-label">Rue</label>
                <input type="text" name="street" id="street" placeholder="Rue" class="form-control">
                <label for="number" class="form-label">Numéro</label>
                <input type="number" name="number" id="number" placeholder="Numéro" class="form-control">
            </div>
            <div class="col-sm-6">
                <h3>Titulaire :</h3>
                <label for="civility" class="form-label">Civilité</label>
                <select name="civility" id="civility" class="form-control">
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="name" class="form-label">Prénom</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Prénom">
                <label for="lastname" class="form-label">Nom</label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Nom">
                <label for="date" class="form-label">Date de naissance</label>
                <input type="date" name="date" class="form-control" id="date">
                <label for="email" class="form-label">Adresse E-mail</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
            </div>
        </div>
        <div class="row num55">
            <button>S'inscrire</button>
        </div>
    </div>
</div>