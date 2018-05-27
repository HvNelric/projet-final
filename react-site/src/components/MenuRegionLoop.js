import React from 'react';
import {Link} from 'react-router-dom';

const MenuRegionLoop = (props) => {
    console.log('propregion', props.regions)
    return (
        props.regions.map((item, index) => {
            return (

                    <Link className="dropdown-item" to={`/sejour-par-region/${item.id}`} key={index}>{item.region}</Link>

            )
        }))
}

export default MenuRegionLoop;