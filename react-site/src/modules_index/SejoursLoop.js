import React from 'react';
import group01 from '../img/img-destinations/dsc0101.jpg';

const SejoursLoop = (props) => {
    console.log('prop', props.sejours);
    return (
        props.sejours.map((item, index) => {
            return (

                <div className="col-6">
                    <div className="group-container"> {/* Group-container */}
                        <div className="group-arrow-container">
                            <div className="group-arrow">
                                <h5 className="text-light m-0">{item.ville}</h5>
                            </div>
                            <div className="triangle-down"></div>
                        </div>
                        <img src={group01} alt=""></img>
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
