import React from 'react';
import ReactDOM from 'react-dom';

import './index.css';
import Routes from './Routes';
// import registerServiceWorker from './registerServiceWorker';

import { BrowserRouter } from 'react-router-dom';

const App = (props) =>{
    return(
        <BrowserRouter>
            <Routes {...props} />
        </BrowserRouter>
    )
}

ReactDOM.render(<App/>, document.getElementById('root'));
// registerServiceWorker();