import React from 'react';
import {Link} from 'react-router-dom';

const MenuRegionLoop = (props) => {
<<<<<<< HEAD
    console.log('propregion', props)
=======
    console.log('propregion', props.regions)
>>>>>>> db36e8a5e7ca87d05734325f15442eb0633c8830
    return (
        props.regions.map((item, index) => {
            return (

<<<<<<< HEAD
                    <Link className="dropdown-item" to={`./sejour-par-region/${item.id}`} key={index}>{item.region}</Link>
=======
                    <Link className="dropdown-item" to={`/sejour-par-region/${item.id}`} key={index}>{item.region}</Link>
>>>>>>> db36e8a5e7ca87d05734325f15442eb0633c8830

            )
        }))
}

export default MenuRegionLoop;