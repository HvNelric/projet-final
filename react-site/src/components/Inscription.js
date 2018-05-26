import React from 'react';

const Inscription = () => {
    return (
        <div class="container-fluid p-0 inscription-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {/*<form method="post" class="inscription-form p-5 m-0">*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Email</label>*/}
                            {/*<input type="email" class="form-control" name="email" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Mot de passe</label>*/}
                            {/*<input type="password" class="form-control" name="pwd" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Civilité</label>*/}
                            {/*<select class="form-control" name="civilite">*/}
                                {/*<option>Mme</option>*/}
                                {/*<option>M</option>*/}
                            {/*</select>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Prénom</label>*/}
                            {/*<input type="text" class="form-control" name="prenom" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Nom</label>*/}
                            {/*<input type="text" class="form-control" name="nom" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Adresse</label>*/}
                            {/*<input type="text" class="form-control" name="adresse" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Code postal</label>*/}
                            {/*<input type="text" class="form-control" name="cp" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Ville</label>*/}
                            {/*<input type="text" class="form-control" name="ville" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Date de naissance</label>*/}
                            {/*<input type="text" class="form-control" name="date" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Téléphone</label>*/}
                            {/*<input type="text" class="form-control" name="nom" value=""/>*/}
                        {/*</div>*/}
                        {/*<button type="submit" class="btn btn-dark">Submit</button>*/}
                    {/*</form>*/}

                    <form method="post">
                        <input type="text" className="form-control" name="activite" value="" />
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    );
};

export default Inscription;