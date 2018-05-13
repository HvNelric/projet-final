import React, {Component} from 'react';
import {
    BrowserRouter as Router,
    Link,
    Route,
    Switch,
} from 'react-router-dom';
const About = () => <h1>About</h1>;

import Connexion from './Connexion';

const Test = () => (

    <Router>
        <div>
            <Link to="/" className="btn btn-info">co</Link>
            <Link to={{pathname: '/about'}}>About</Link>
            <Link to="/contact">Contact</Link>

            <Switch>
                <Route exact path="/" component={Connexion} />
                <Route path="/about" component={About} />
                <Route
                    path="/contact"
                    render={() => <h1>Contact Us</h1>} />
                <Route path="/blog" children={({match}) => (
                    <li className={match ? 'active' : ''}>
                        <Link to="/blog">Blog</Link>
                    </li>)} />
                <Route render={() => <h1>Page not found</h1>} />
            </Switch>
        </div>
    </Router>
);

export default Test;