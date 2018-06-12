import React from 'react';
import {Link} from 'react-router-dom';


const MenuActivityLoop = (props) => {
    console.log('prop',props)
    return (
        props.activities.map((item, index)=>{
            return (

<<<<<<< HEAD
=======
<<<<<<< HEAD
                <Link className="dropdown-item" to={`/activites/${item.id}`} key={index}>{item.activity}</Link>
                
=======
>>>>>>> db36e8a5e7ca87d05734325f15442eb0633c8830
                <Link className="dropdown-item" to={`./sejour-par-region/${item.id}`} key={index}>{item.activity}</Link>

>>>>>>> c2a437094c8b845fb454bd132fc5578a95911b17
            )
        }))
}

export default MenuActivityLoop;