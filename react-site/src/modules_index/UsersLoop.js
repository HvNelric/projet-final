import React from 'react';
import {Link} from 'react-router-dom';


const UsersLoop = (props) => {
    console.log('prop',props.profils)
    return (
        props.profils.map((item, index)=>{
            return (

                <div className="col-6 col-md-4 mt-4" key={index}>
                    <div className="user-container d-flex justify-content-start"> {/** User-container **/}
                        <Link to={`./user/${item.id}`}>
                            <div className="user-img">
                                <img src={`http://localhost:8000/profil-img/${item.image}`} alt="image du profil"></img>
                            </div>
                        </Link>
                        <div className="user-content">
                            <h5 className="user-lastname">{item.prenom}</h5>
                            <p className="user-destination"><span>Age : </span>{item.age}</p>
                            <p className="user-comment">{item.id}</p>
                        </div>
                    </div> {/** /User-container **/}
                </div>

            )
        }))
}

export default UsersLoop;