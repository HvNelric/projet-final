import React, {Component} from 'react';
import { Route, Switch } from 'react-router-dom';

import Layout from './layout';
import ModulesIndex from './components/ModulesIndex';
import Page from './components/Page';



class Routes extends Component {
    render(){
        return(
            <Layout>
                <Switch>
                    <Route path="/" exact component={ModulesIndex}/>
                    <Route path="/page" exact component={Page}/>
                </Switch>
            </Layout>
           

        )

    }

}

export default Routes;