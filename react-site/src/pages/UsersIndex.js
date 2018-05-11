import React, {Component} from 'react';
import '../css/users-index.css';

import profil01 from '../img/img-users/user-01.jpg';

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
                        <div className="col-6 col-md-4 mt-4">
                            <div className="user-container d-flex justify-content-start"> {/** User-container **/}
                                <div className="user-img">
                                    <img src={profil01} alt="image du profil"></img>
                                </div>
                                <div className="user-content">
                                    <h5 className="user-lastname">Prénom</h5>
                                    <p className="user-destination"><span>Destination : </span>Cassis</p>
                                    <p className="user-comment">bla bla</p>
                                </div>
                            </div> {/** /User-container **/}
                        </div>
                        <div className="col-6 col-md-4 mt-4">
                            <div className="user-container d-flex justify-content-start"> {/** User-container **/}
                                <div className="user-img">
                                    <img src={profil01} alt="image du profil"></img>
                                </div>
                                <div className="user-content">
                                    <h5 className="user-lastname">Prénom</h5>
                                    <p className="user-destination"><span>Destination : </span>Cassis</p>
                                    <p className="user-comment">bla bla</p>
                                </div>
                            </div> {/** /User-container **/}
                        </div>
                        <div className="col-6 col-md-4 mt-4">
                            <div className="user-container d-flex justify-content-start"> {/** User-container **/}
                                <div className="user-img">
                                    <img src={profil01} alt="image du profil"></img>
                                </div>
                                <div className="user-content">
                                    <h5 className="user-lastname">Prénom</h5>
                                    <p className="user-destination"><span>Destination : </span>Cassis</p>
                                    <p className="user-comment">bla bla</p>
                                </div>
                            </div> {/** /User-container **/}
                        </div>
                        <div className="col-6 col-md-4 mt-4">
                            <div className="user-container d-flex justify-content-start"> {/** User-container **/}
                                <div className="user-img">
                                    <img src={profil01} alt="image du profil"></img>
                                </div>
                                <div className="user-content">
                                    <h5 className="user-lastname">Prénom</h5>
                                    <p className="user-destination"><span>Destination : </span>Cassis</p>
                                    <p className="user-comment">bla bla</p>
                                </div>
                            </div> {/** /User-container **/}
                        </div>
                        <div className="col-6 col-md-4 mt-4">
                            <div className="user-container d-flex justify-content-start"> {/** User-container **/}
                                <div className="user-img">
                                    <img src={profil01} alt="image du profil"></img>
                                </div>
                                <div className="user-content">
                                    <h5 className="user-lastname">Prénom</h5>
                                    <p className="user-destination">Destination : Cassis</p>
                                    <p className="user-comment">bla bla</p>
                                </div>
                            </div> {/** /User-container **/}
                        </div>
                        <div className="col-6 col-md-4 mt-4">
                            <div className="user-container d-flex justify-content-start"> {/** User-container **/}
                                <div className="user-img">
                                    <img src={profil01} alt="image du profil"></img>
                                </div>
                                <div className="user-content">
                                    <h5 className="user-lastname">Prénom</h5>
                                    <p className="user-destination"><span>Destination : </span>Cassis</p>
                                    <p className="user-comment">bla blabla bla</p>
                                </div>
                            </div> {/** /User-container **/}
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default UsersIndex;