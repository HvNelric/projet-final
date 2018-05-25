import React,{Component} from 'react';
import UsersLoop from './UsersLoop';
import axios from 'axios';
import '../css/users-index.css';

class UsersIndex extends Component {

    state = {
        profils:[]
    }

    componentWillMount(){
        axios.get(`http://localhost:8000/user`) 
            .then( response => {
                this.setState({
                    profils:response.data
                })
            })
    }

    render() {
        console.log('ppp',this.state.profils);
        return(

            this.state.profils.length ?
                <UsersLoop profils={this.state.profils} />
                :<div>Hello</div>)
    }
}
export default UsersIndex;