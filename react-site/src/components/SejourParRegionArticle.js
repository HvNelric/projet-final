import React, { Component } from 'react';
import axios from 'axios';


class SejourParRegionArticle extends Component {

    state={
        sejourDetail:[]
    }

    
    componentWillMount(){
        console.log('les props', this.props.match.params.id)
        axios(`http://localhost:8000/sejour/detail/${this.props.match.params.id}`)
        .then( response => {
            this.setState({
                sejourDetail:response.data
            })
            console.log('lgt',this.state.sejourDetail.ville)            
        })
    }

    render(){
        return(

                this.state.sejourDetail.ville?
                <div>
                    Séjour à {this.state.sejourDetail.ville}
                </div>
                :<div>hello</div>
        )
    }
};

export default SejourParRegionArticle;