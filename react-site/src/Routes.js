import React, { Component } from 'react';
import './App.css';
import { Route, Switch, Redirect } from 'react-router-dom';

import ModulesIndex from './components/ModulesIndex';
import NavbarMod from './components/NavbarMod';
import Header from './components/Header';
import Sejours from './components/Sejours';
import User from './components/User';
import Inscription from './components/Inscription';
import Connexion from './components/Connexion';
import SejourParRegionArticle from './components/SejourParRegionArticle';
import ActivityArticle from './components/ActivityArticle';


class App extends Component {

  render(){
    return (
        <div>
              <NavbarMod />
              <Switch>
                <Route path="/" exact component={ModulesIndex} />
                <Route path="/sejour-par-region/:id" exact component={SejourParRegionArticle}/>
                <Route path="/activites/:id" exact component={ActivityArticle}/>
                <Route path="/sejour" exact component={Sejours} />
                <Route path="/user" exact component={User} />
                <Route path="/Inscription" exact component={Inscription} />
                <Route path="/Connexion" exact component={Connexion} />
            </Switch>
        </div>
    );
  }
}

export default App;
