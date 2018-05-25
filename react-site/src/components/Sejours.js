import React from 'react';
import ReactDOM from 'react-dom';


import reducers from './reducers';
import { Provider } from 'react-redux';
import { createStore, applyMiddleware } from 'redux';
import Sejour from './Sejour';
const createStoreWithMiddleware = applyMiddleware()(createStore);



const Sejours = () => {
    return (
  
<Provider store={createStoreWithMiddleware(reducers,window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__())}>
    <Sejour />
  </Provider>
    );
};

export default Sejours;