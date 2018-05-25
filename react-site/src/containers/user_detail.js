import React, { Component } from 'react'
import { connect } from 'react-redux';
import style from '../components/sejour.css';


class UserDetail extends Component {
    render () {
        const {user} = this.props
        if(!user){
          return  <div className="test">Selectionnez une destination pour démarrer</div>
        }
        return (
            <div className="test">
             <h3 className="titre"> {user.name}</h3>
             <li className="list-group-item d-flex"> {user.description}</li>
             <li className="list-group-item d-flex mr-auto">Activité : {user.activite} </li>
             <li className="list-group-item d-flex">Hébergement : {user.hebergement} </li>
            </div>
        )
    }
}

 const mapStateToProps = (state) => {
  return {
    user: state.activeUser
  }
}

export default connect(mapStateToProps)(UserDetail)
// export default UserDetail