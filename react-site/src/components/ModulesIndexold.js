import React, {Component} from 'react';
import {Switch, Route} from 'react-router-dom';

//modules_index
//import Inscription from './modules_index/Inscription';
import DestinationIndex from '../modules_index/DestinationIndex';
import UsersIndex from '../modules_index/UsersIndex';
import GroupsIndex from '../modules_index/GroupsIndex';
import HowtoIndex from '../modules_index/HowtoIndex';
import Footer from '../modules_index/Footer';
import NavbarMod from '../components/NavbarMod';
import Header from '../components/Header';
import EtapesIndex from "../modules_index/EtapesIndex";

class ModulesIndex extends Component{
    render() {
        return(
            <div>
                <div className="container-fluid p-0" id="page-container"> {/** PAGE CONTAINER **/}
                    <EtapesIndex />
                    <DestinationIndex />
                    <UsersIndex />
                    <GroupsIndex />
                    <HowtoIndex />
                </div> {/* /PAGE CONTAINER */}
            </div>
        );
    }
}

export default ModulesIndex;