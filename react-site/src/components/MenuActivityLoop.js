import React from 'react';
import {Link} from 'react-router-dom';


const MenuActivityLoop = (props) => {
    console.log('prop',props)
    return (
        props.activities.map((item, index)=>{
            return (

                <Link className="dropdown-item" to={`./sejour-par-region/${item.id}`} key={index}>{item.activity}</Link>

            )
        }))
}

export default MenuActivityLoop;