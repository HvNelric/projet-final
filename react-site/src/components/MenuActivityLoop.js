import React from 'react';
import {Link} from 'react-router-dom';


const MenuActivityLoop = (props) => {
    console.log('prop',props)
    return (
        props.activities.map((item, index)=>{
            return (

<<<<<<< HEAD
                <Link className="dropdown-item" to={`/activites/${item.id}`} key={index}>{item.activity}</Link>
                
=======
                <Link className="dropdown-item" to={`./sejour-par-region/${item.id}`} key={index}>{item.activity}</Link>

>>>>>>> c2a437094c8b845fb454bd132fc5578a95911b17
            )
        }))
}

export default MenuActivityLoop;