import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter } from 'react-router-dom';
import './App.css';

import Routes from './routes';
import ModulesIndex from './components/ModulesIndex';


const App =() =>{
    return(
        <div>
        <BrowserRouter>
            <Routes/>
        </BrowserRouter>
        
        </div>
        
    )
}

export default App;

