import React, {Component} from 'react';
import '../css/header-index.css';
import index01 from '../img/index-violet.png';

class Header extends Component{
    render(){
        return(
            <header>
                <div className="container-fluid p-0">
                    <div className="row top-container">
                        <img src={index01} alt="" className="img-index"/>
                        <div className="btns-container text-center">
                            <a href="#" className="btn btn-join mb-4">Inscrivez-vous</a>
                            <div className="for-border-bottom"></div>
                            <p className="text-light my-2">OU</p>
                            <div className="for-border-bottom"></div>
                            <a className="btn btn-join mt-4" href="">Connectez-vous</a>
                        </div>
                    </div>
                </div>
            </header>
        );
    }
}

export default Header;