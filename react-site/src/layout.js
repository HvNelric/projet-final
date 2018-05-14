import React, { Component } from 'react';

import Header from './components/Header';
import Footer from './modules_index/Footer';
import NavbarMod from './components/NavbarMod';

class Layout extends Component {

    render() {
        return (
            <div>
                <NavbarMod />                
                {this.props.children}            
                <Footer/>
            </div>
        );
    }
}

export default Layout;