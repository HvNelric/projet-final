import React from 'react';
import {Link} from 'react-router-dom';


const MenuActivityLoop = (props) => {
    console.log('prop',props.profils)
    return (
        props.profils.map((item, index)=>{
            return (

                <div className="dropdown-menu" aria-labelledby="navbarDropdown" key={index}>
                    <Link className="dropdown-item" to={`./sejour-par-region/${item.id}`}>{item.region}</Link>
                </div>

            )
        }))
}

export default MenuActivityLoop;