import React, { Component } from 'react';
import { Link } from 'react-router-dom';

import logo from '../img/logo.svg';


class NavbarMod extends Component {
    render() {
        return (
            <div className="NavbarMod">
                <nav className="navbar navbar-expand-lg p-1 my-navbar">
                    <div className="container">
                        <Link className="nav-link text-white my-navlink" to="/">
                            <img id="logo" src={logo} alt=""/>
                        </Link>
                        <button className="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span className="navbar-toggler-icon"></span>
                        </button>
                        <div className="form-inline my-2 my-lg-0">
                            <div className="collapse navbar-collapse ml-4" id="navbarSupportedContent">
                                <ul className="navbar-nav mr-sm-2">
                                    <li className="nav-item active">
                                        <Link className="nav-link text-white my-navlink" to="/sejour">Sejours</Link>
                                    </li>
                                    <li className="nav-item active">
                                        <Link className="nav-link text-white my-navlink" to="/user">Utilisateurs</Link>
                                    </li>
                                    <li className="nav-item active">
                                        <Link className="nav-link text-white my-navlink" to="/inscription">Inscription</Link>
                                    </li>
                                    <li className="nav-item active">
                                        <Link className="nav-link text-white my-navlink" to="/connexion">Connexion</Link>
                                    </li>
                                    {/* <li className="nav-item">
                                        <a className="nav-link text-white my-navlink" href="#">Link</a>
                                    </li>
                                    <li className="nav-item dropdown">
                                        <a className="nav-link dropdown-toggle text-white my-navlink" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                    </a>
                                        <div className="dropdown-menu text-white" aria-labelledby="navbarDropdown">
                                            <a className="dropdown-item" href="#">Action</a>
                                            <a className="dropdown-item" href="#">Another action</a>
                                            <div className="dropdown-divider"></div>
                                            <a className="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li> */}
                                </ul>
                            </div>

                        </div>
                    </div>
                </nav>
            </div>
        );
    }
}

export default NavbarMod;