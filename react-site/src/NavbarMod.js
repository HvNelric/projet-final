import React, { Component } from 'react';
import './navbarMod.css';
import logo from './img/logo.svg';


class NavbarMod extends Component {
    render() {
        return (
            <div className="NavbarMod">
                <nav className="navbar navbar-expand-lg p-1 my-navbar">
                    <div className="container">
                        <img id="logo" src={logo} alt=""/>
                        <button className="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span className="navbar-toggler-icon"></span>
                        </button>

                        <div className="collapse navbar-collapse ml-4" id="navbarSupportedContent">
                            <ul className="navbar-nav mr-sm-2">
                                <li className="nav-item active">
                                    <a className="nav-link text-white" href="#">Home <span className="sr-only">(current)</span></a>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link text-white" href="#">Link</a>
                                </li>
                                <li className="nav-item dropdown">
                                    <a className="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div className="dropdown-menu text-white" aria-labelledby="navbarDropdown">
                                        <a className="dropdown-item" href="#">Action</a>
                                        <a className="dropdown-item" href="#">Another action</a>
                                        <div className="dropdown-divider"></div>
                                        <a className="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <form className="form-inline my-2 my-lg-0">
                            <input className="form-control mr-sm-2" type="search" placeholder="Search"
                                   aria-label="Search"></input>
                            <button className="btn btn-info my-2 my-sm-0" type="submit">Search
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        );
    }
}

export default NavbarMod;