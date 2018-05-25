import React from 'react';

const Connexion = () => {
    return (
        <div class="container-fluid p-0 connexion-container">
            <div class="circle"></div>
            <div class="connexion-form-container p-5">
                <form method="post">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">pseudo ou email</label>
                            <input type="email" class="form-control" id="connexion-email" aria-describedby="emailHelp" placeholder=""/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" class="form-control" id="connexion-pwd" placeholder=""/>
                        </div>
                        <button type="submit" class="btn btn-dark">Valider</button>
                    </form>
                </form>
            </div>
        </div>
    );
};

export default Connexion;