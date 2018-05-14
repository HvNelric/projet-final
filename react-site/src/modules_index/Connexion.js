import React, {Component} from 'react';
import '../css/connexion.css';

class Connexion extends Component{
    render() {
        return(
            <div className="container-fluid p-0 connexion-container">
                {/*<div className="circle"></div>*/}
                <div className="connexion-form-container p-5">
                    <form method="post">
                        <form>
                            <div className="form-group">
                                <label htmlFor="exampleInputEmail1">pseudo ou email</label>
                                <input type="email" className="form-control" id="connexion-email"
                                       aria-describedby="emailHelp" placeholder=""></input>
                            </div>
                            <div className="form-group">
                                <label htmlFor="exampleInputPassword1">Mot de passe</label>
                                <input type="password" className="form-control" id="connexion-pwd" placeholder=""></input>
                            </div>
                            <button type="submit" className="btn btn-dark">Valider</button>
                        </form>
                    </form>
                </div>
            </div>
        );
    }
}

export default Connexion;