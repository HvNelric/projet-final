import React, {Component} from 'react';
import '../css/users-index.css';

class UsersIndex extends Component{
    render() {
        return(
            <div className="container-fluid users-index">
                <div className="container">
                    <h2 className="text-center text-light">Ces utilisateurs sont peut-être vos compagnons d’aventure</h2>
                    <p className="text-center text-light pt-4">
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                    </p>
                    <div className="row mt-5">
                        <div className="col-6">
                            <div className="user-container">
                                <div className="user-img">
                                    <img src="" alt=""></img>
                                </div>
                                <h5 className="">Prénom <span>Nom</span></h5>
                            </div>
                        </div>
                        <div className="col-6">

                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default UsersIndex;