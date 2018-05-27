import React,{Component} from 'react';
import axios from 'axios';
import MenuRegionLoop from "./MenuRegionLoop";

class MenuRegionNav extends Component {

    state = {
        regions:[]
    }

    componentWillMount(){
        axios.get(`http://localhost:8000/sejour/regions`)
            .then( response => {
                this.setState({
                    regions:response.data
                })
            })
    }

    render() {
        console.log('gg',this.state.regions);
        return(

            this.state.regions.length ?
                <MenuRegionLoop regions={this.state.regions} />
                :<div>Hello</div>)
    }
}
export default MenuRegionNav;