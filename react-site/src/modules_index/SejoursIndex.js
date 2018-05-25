import React, {Component} from 'react';
import '../css/sejour-index.css';
import axios from 'axios';

import SejoursLoop from "./SejoursLoop";

class SejoursIndex extends Component{
    state = {
        sejours: []
    }

    componentWillMount() {
        axios.get(`http://localhost:8000/sejour`) //Get data from the randomuser URL. A custom ChatID is created based on the two profils ID value
            .then(response => {
                this.setState({
                    sejours: response.data
                })
            })
    }

    render() {
        console.log('ppp', this.state.sejours);
        return (

            this.state.sejours.length ?
                <SejoursLoop sejours={this.state.sejours} />
                : <div>Hello</div>)
    }
}

export default SejoursIndex;

{/* <div className="container-fluid destinations-container">
    <div className="container">
        <h2 className="text-center">Destinations les plus populaires</h2>
        <p className="text-center pt-4">
            Faites de votre voyage une expérience amusante, passionnante et inoubliable.
                       <br />
            Ces groupes n’attendent plus que vous !
                   </p>
        <div className="row row-destinations-index">
            <div className="col-6 col-md-4">
                <div className="card my-card">
                    <img className="card-img-top" src={image01} alt="destination" ></img>
                    <div className="card-body clearfix">
                        <h5 className="card-title">Nom destination</h5>
                        <p className="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the card's content.</p>
                        <a href="#" className="btn float-right my-btn">plus de détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> */}