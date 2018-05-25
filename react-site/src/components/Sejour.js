import React from 'react';
import UserList from '../containers/user_list';
import UserDetail from '../containers/user_detail';
import style from './sejour.css'

const Sejour = () => {
    return (
  
        <div>
            <div className="entete"></div>
            <div className="container">
                <div className="row">
                    <div className="text-center">
                        {/* <input type="text" className="form-control" id="barrerecherche" placeholder="Rechercher une destination" /> */}
                        <span className="titrePrincipal">Nos destinations</span>
                    </div>
                </div>
                <div className="row">
                    <ul className="col-md-4">
                         <UserList/>
    
                    </ul>
                    <ul className="col-md-8">
                         <UserDetail/>
                    
                    </ul> 
                </div>
        </div>
    
   
    
    
       </div>
    );
};

export default Sejour;