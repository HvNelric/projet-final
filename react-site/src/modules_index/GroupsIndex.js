import React, {Component} from 'react';
import '../css/groups-index.css';
import profil01 from '../img/img-users/user-01.jpg';

import group01 from '../img/img-destinations/dsc0101.jpg';

class GroupsIndex extends Component{
    render() {
        return(
            <div className="container-fluid groups-index">
                <div className="container">
                    <h1 className="text-center">Ces groupes n'attendent plus que vous !</h1>
                    <p className="text-center mb-4">
                        On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
                    </p>
                    <div className="row">
                        <div className="col-6">
                            <div className="group-container"> {/* Group-container */}
                                <div className="group-arrow-container">
                                    <div className="group-arrow">
                                        <h5 className="text-light m-0">St Maxime</h5>
                                    </div>
                                    <div className="triangle-down"></div>
                                </div>
                                <img src={group01} alt=""></img>
                                <div className="group-users-container"> {/* Group-users-container */}
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                </div> {/* /Group-users-container */}
                            </div> {/* /Group-container */}
                        </div>
                        <div className="col-6">
                            <div className="group-container"> {/* Group-container */}
                                <div className="group-arrow-container">
                                    <div className="group-arrow">
                                        <h5 className="text-light m-0">St Maxime</h5>
                                    </div>
                                    <div className="triangle-down"></div>
                                </div>
                                <img src={group01} alt=""></img>
                                <div className="group-users-container"> {/* Group-users-container */}
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                </div> {/* /Group-users-container */}
                            </div> {/* /Group-container */}
                        </div>
                        <div className="col-6">
                            <div className="group-container"> {/* Group-container */}
                                <div className="group-arrow-container">
                                    <div className="group-arrow">
                                        <h5 className="text-light m-0">St Maxime</h5>
                                    </div>
                                    <div className="triangle-down"></div>
                                </div>
                                <img src={group01} alt=""></img>
                                <div className="group-users-container"> {/* Group-users-container */}
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                    <div className="group-user-img">
                                        <img src={profil01} alt=""/>
                                    </div>
                                </div> {/* /Group-users-container */}
                            </div> {/* /Group-container */}
                        </div>
                        
                    </div>
                </div>
            </div>
        );
    }
}

export default GroupsIndex;