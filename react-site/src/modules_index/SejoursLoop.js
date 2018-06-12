import React from 'react';
import group01 from '../img/img-destinations/dsc0101.jpg';
import { Link } from 'react-router-dom';


const SejoursLoop = (props) => {
    console.log('prop', props.sejours);
    return (
        props.sejours.map((item, index) => {
            return (
<<<<<<< HEAD

                <div className="col-6" key={index}>
=======
                <div className="col-6">

>>>>>>> db36e8a5e7ca87d05734325f15442eb0633c8830
                    <div className="group-container"> {/* Group-container */}
                        <div className="group-arrow-container">
                            <div className="group-arrow">
                                <h5 className="text-light m-0">{item.ville}</h5>
                            </div>
                            <div className="triangle-down"></div>
                        </div>
                        <Link to={`/sejour-par-region/${item.id}`} key={index}>
                        
                        <img src={group01} alt=""></img>
                </Link>
                        
                        <div className="group-users-container"> {/* Group-users-container */}
                            <p>{item.desc}</p>
                        </div> {/* /Group-users-container */}
                    </div> {/* /Group-container */}
                </div>

            )
        })
    )
}

export default SejoursLoop;
