import React, { Component } from 'react';

class ActivityArticle extends Component {

    state={

    }

    
    componentWillMount(){
        console.log('les props', this.props)

    }

    render(){
        return(
                <div>
                    Activité {this.props.match.params.id}
                </div>
        )
    }
};

export default ActivityArticle;