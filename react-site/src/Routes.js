import React, { Component } from 'react';
import './App.css';
import { Route, Switch, Redirect } from 'react-router-dom';

import ModulesIndex from './components/ModulesIndex';
import NavbarMod from './components/NavbarMod';
import Header from './components/Header';
import Sejour from './components/Sejour';
import User from './components/User';
import Inscription from './components/Inscription';
import Connexion from './components/Connexion';


class App extends Component {

  render(){
    return (
        <div>
              <NavbarMod />
              <Switch>
                <Route path="/" exact component={ModulesIndex} />
                <Route path="/sejour" exact component={Sejour} />
                <Route path="/user" exact component={User} />
                <Route path="/Inscription" exact component={Inscription} />
                <Route path="/Connexion" exact component={Connexion} />
                {/* <PrivateRoute isLogged={props.auth} path="/dashboard" exact component={Dashboard} /> */}
            </Switch>
        </div>
    );
  }
}

export default App;
