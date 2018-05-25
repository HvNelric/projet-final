import React, { Component } from 'react'
import { connect } from 'react-redux'
import { selectUser } from '../actions/index'
import { bindActionCreators } from 'redux'
import style from '../components/sejour.css';
// import user from './reducer_users';
class UserList extends Component {
 
    render () {
        return (
        <div>
            
                {
                    this.props.myUsers.map((user) => {
                    // user.map((user) => {
                        return (
                            
                         
                            // <li className="list-group-item list-group-item-action flex-column align-items-start active"
                            <li className="list-group-item-action list-group-item  flex-column align-items-start list-group-item-primary"
                             key={user.name} onClick={() => this.props.selectUser(user)}>
                            {user.name}
                         </li>
                         );
                    })
                }
           
        </div>
        )
    }
   
}

function  mapStateToProps(state) {    
    return {
        myUsers: state.users
    }
}

function mapDispatchToProps(dispatch){
    return bindActionCreators({selectUser:selectUser},dispatch)
}

export default connect(mapStateToProps,mapDispatchToProps)(UserList)
// export default UserList
