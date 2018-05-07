import React, { Component } from 'react';
import './App.css'
import index01 from './img/index01.png';

import NavbarMod from './NavbarMod';

class App extends Component {
  render() {
    return (
        <div>
        <header>
            <NavbarMod />
            <div className="container-fluid">
                <div className="row top-container">
                    <img src={index01} alt="" className="img-index"/>
                    <button className="btn btn-info btn-join">Inscrivez-vous</button>
                </div>
            </div>
        </header>
        <div className="container-fluid" id="page-container">
            <div className="row row-test">

            </div>
        </div>
        </div>
    );
  }
}

export default App;
