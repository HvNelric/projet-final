import React,{Component} from 'react';
import UsersLoop from './UsersLoop';
import axios from 'axios';

class UsersIndex extends Component {

    state = {
        profils:[]
    }

    componentWillMount(){
        axios.get(`http://localhost:8000/user`) //Get data from the randomuser URL. A custom ChatID is created based on the two profils ID value
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