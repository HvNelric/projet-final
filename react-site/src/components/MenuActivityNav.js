import React,{Component} from 'react';
import axios from 'axios';
import MenuActivityLoop from "./MenuActivityLoop";

class MenuActivityNav extends Component {

    state = {
        activities:[]
    }

    componentWillMount(){
        axios.get(`http://localhost:8000/profil/activites`)
            .then( response => {
                this.setState({
                    activities:response.data
                })
            })
    }

    render() {
        console.log('gg',this.state.activities);
        return(

            this.state.activities.length ?
                <MenuActivityLoop regions={this.state.activities} />
                :<div>Hello</div>)
    }
}
export default MenuActivityNav;