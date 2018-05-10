import React, {Component} from 'react';
import '../css/destination-index.css';

//images
import image01 from '../img/img-destinations/marchenoel.jpg';

class DestinationIndex extends Component{
    render() {
        return(
           <div className="container-fluid destinations-container">
               <div className="container">
                   <h2 className="text-center">Destinations les plus populaires</h2>
                   <p className="text-center pt-4">
                       Faites de votre voyage une expérience amusante, passionnante et inoubliable.
                       <br />
                       Ces groupes n’attendent plus que vous !
                   </p>
                   <div className="row row-destinations-index">
                        <div className="col-6 col-md-4">
                            <div className="card my-card"> {/* Card */}
                                <img className="card-img-top" src={image01} alt="destination" ></img>
                                <div className="card-body">
                                    <h5 className="card-title">Nom destination</h5>
                                    <p className="card-text">Some quick example text to build on the card title and make
                                        up the bulk of the card's content.</p>
                                    <a href="#" className="btn my-btn">plus de détails</a>
                                </div>
                            </div> {/* /Card */}
                        </div>
                       <div className="col-6 col-md-4">
                           <div className="card my-card"> {/* Card */}
                               <img className="card-img-top" src={image01} alt="destination" ></img>
                               <div className="card-body">
                                   <h5 className="card-title">Nom destination</h5>
                                   <p className="card-text">Some quick example text to build on the card title and make
                                       up the bulk of the card's content.</p>
                                   <a href="#" className="btn my-btn">plus de détails</a>
                               </div>
                           </div> {/* /Card */}
                       </div>
                       <div className="col-6 col-md-4">
                           <div className="card my-card"> {/* Card */}
                               <img className="card-img-top" src={image01} alt="destination" ></img>
                               <div className="card-body">
                                   <h5 className="card-title">Nom destination</h5>
                                   <p className="card-text">Some quick example text to build on the card title and make
                                       up the bulk of the card's content.</p>
                                   <a href="#" className="btn my-btn">plus de détails</a>
                               </div>
                           </div> {/* /Card */}
                       </div>
                       <div className="col-6 col-md-4">
                           <div className="card my-card"> {/* Card */}
                               <img className="card-img-top" src={image01} alt="destination" ></img>
                               <div className="card-body">
                                   <h5 className="card-title">Nom destination</h5>
                                   <p className="card-text">Some quick example text to build on the card title and make
                                       up the bulk of the card's content.</p>
                                   <a href="#" className="btn my-btn">plus de détails</a>
                               </div>
                           </div> {/* /Card */}
                       </div>
                       <div className="col-6 col-md-4">
                           <div className="card my-card"> {/* Card */}
                               <img className="card-img-top" src={image01} alt="destination" ></img>
                               <div className="card-body">
                                   <h5 className="card-title">Nom destination</h5>
                                   <p className="card-text">Some quick example text to build on the card title and make
                                       up the bulk of the card's content.</p>
                                   <a href="#" className="btn my-btn">plus de détails</a>
                               </div>
                           </div> {/* /Card */}
                       </div>
                       <div className="col-6 col-md-4">
                           <div className="card my-card"> {/* Card */}
                               <img className="card-img-top" src={image01} alt="destination" ></img>
                               <div className="card-body">
                                   <h5 className="card-title">Nom destination</h5>
                                   <p className="card-text">Some quick example text to build on the card title and make
                                       up the bulk of the card's content.</p>
                                   <a href="#" className="btn my-btn">plus de détails</a>
                               </div>
                           </div> {/* /Card */}
                       </div>
                   </div>
               </div>
           </div>
        );
    };
}

export default DestinationIndex;