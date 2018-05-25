import React, {Component} from 'react';
import {Switch, Route} from 'react-router-dom';
import '../css/users-index.css';

//modules_index
//import Inscription from './modules_index/Inscription';
//import DestinationIndex from '../modules_index/DestinationIndex';
import UsersIndex from '../modules_index/UsersIndex';
import GroupsIndex from '../modules_index/GroupsIndex';
import HowtoIndex from '../modules_index/HowtoIndex';
import Footer from '../modules_index/Footer';
// import NavbarMod from '../components/NavbarMod';
import Header from '../components/Header';
import EtapesIndex from "../modules_index/EtapesIndex";
import SejoursIndex from "../modules_index/SejoursIndex";

class ModulesIndex extends Component{
    render() {
        return(
            <div>
                <Header />
                
                <div className="container-fluid p-0" id="page-container"> {/** PAGE CONTAINER **/}
                    <EtapesIndex />
                    <div className="container-fluid groups-index">
                        <div className="container">
                            <h1 className="text-center">Ces groupes n'attendent plus que vous !</h1>
                            <p className="text-center mb-4">
                                On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction.
                            </p>
                            <div className="row">
                                <SejoursIndex />
                            </div>
                        </div>
                    </div>
                    {/*<DestinationIndex />*/}
                    <div className="container-fluid users-index">
                        <h2 className="text-center text-light">Ces utilisateurs sont peut-être vos compagnons d’aventure</h2>
                        <p className="text-center text-light pt-4">
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                        </p>
                        <div className="container">
                            <div className="row mt-5">
                                <UsersIndex />
                            </div>
                        </div>
                    </div>
                    <GroupsIndex />
                    <HowtoIndex />
                </div> {/* /PAGE CONTAINER */}
                <Footer />
            </div>
        );
    }
}

export default ModulesIndex;