import React, { Component } from 'react';
import axios from 'axios';

class Inscription extends Component {

    state = {
        files:'',
        firstname:'',
        lastname:'',
        email:'',
        password:'',
        sex:'f',
        age:'',
        date_de_debut:'',
        date_de_fin:'',
        activitySelected:[],
        regionSelected:[],
        activities:[],
        regions:[]
    }

    handleFileChange = (event) => {
        let files = event.target.files || event.dataTransfer.files;
            if (!files.length) {
                console.log('no files');
            }
            console.log(files);
            console.log(files[0])
            this.setState({
                files:event.target.files[0]
            })
        }
    



    handleFirstNameChange = (event) => {
        this.setState({
            firstname:event.target.value
        })
    }

    handleLastNameChange = (event) => {
        this.setState({
            lastname:event.target.value
        })
    }

    handleEmailChange= (event) => {
        this.setState({
            email:event.target.value
        })
    }

    handlePasswordChange = (event) =>{
        this.setState({
            password:event.target.value
        })
    }

    handleSexChange = (event) =>{
        this.setState({
            sex:event.target.value
        })
    }

    handleAgeChange = (event) =>{
        this.setState({
            age:event.target.value
        })
    }

    handleDate_de_debutChange = (event) =>{
        this.setState({
            date_de_debut:event.target.value
        })
    }

    handleDate_de_finChange = (event) =>{
        this.setState({
            date_de_fin:event.target.value
        })
    }

    handleActivityChange = (event) =>{
        event.target.checked?
        this.setState({activitySelected:[...this.state.activitySelected,event.target.value]})
        :
        this.setState({
            activitySelected: this.state.activitySelected.filter((_, i) => i !== this.state.activitySelected.indexOf(event.target.value))
          });
    }
        

    handleRegionChange = (event) =>{
        event.target.checked?
        this.setState({regionSelected:[...this.state.regionSelected,event.target.value]})
        :
        this.setState({
            regionSelected: this.state.regionSelected.filter((_, i) => i !== this.state.regionSelected.indexOf(event.target.value))
          });
    }
        



    onshandler = (event) =>{
        event.preventDefault();

        console.log(this.state)

        axios.post('http://localhost:8000/registerr', this.state, { 
                headers: {
                    "Content-Type": "application/json"
                }
        }
    );
            onUploadProgress: progressEvent => {
              console.log(progressEvent.loaded / progressEvent.total);
            }
    })
    }

    componentWillMount(){
        axios.get(`http://localhost:8000/profil/activites`)
            .then( response => {
                console.log('act', response.data)
                this.setState({
                    activities:response.data
                })
            })
        axios.get(`http://localhost:8000/sejour/regions`)
        .then( response => {
            this.setState({
                regions:response.data
            })
        })
    }

        
    render(){
        return(
            this.state.regions.length && this.state.activities.length?

                <div className="container">
                    <h1 className="mt-5">Inscription</h1>
                    <div className="container py-5">
                    <form onSubmit={this.onshandler}>
                    <div className="form-control p-5">
                        <div className="form-group">
                            <div>
                                <label htmlFor="inscription_profil_img">Photo de profil</label>
                                <input type="file" id="inscription_profil_img" name="image"
                                onChange={this.handleFileChange}
                                value={this.state.file}/>
                            </div>
                        </div>
                        <div className="form-group">
                            <div>
                            <label htmlFor="inscription_email">Email</label>
                            <input 
                                type="email"
                                id="inscription_email"
                                name="email"
                                required="required"
                                className="form-control"
                                onChange={this.handleEmailChange}
                                value={this.state.email}
                            />
                            </div>
                        </div>

                        <div className="form_group">
                            <div>
                                <label htmlFor="inscription_plainPassword_first" className="required">Mot de passe</label>
                                <input 
                                    type="password"
                                    id="inscription_plainPassword_first"
                                    name="password"
                                    required="required"
                                    className="form-control"
                                    onChange={this.handlePasswordChange}
                                    value={this.state.password}
                                />
                            </div>
                        </div>
                        <div className="form-group">
                            <label htmlFor="inscription_prenom" className="required">Prénom</label>
                            <input 
                                type="text"
                                id="inscription_prenom"
                                name="prenom"
                                required="required"
                                className="form-control"
                                onChange={this.handleFirstNameChange}
                                value={this.state.firstname}
                            />
                        </div>
                        <div className="form-group">
                            <label htmlFor="inscription_nom" className="required">Nom</label>
                            <input 
                                type="text"
                                id="inscription_nom"
                                name="nom"
                                required="required"
                                className="form-control"
                                onChange={this.handleLastNameChange}
                                value={this.state.lastname}
                            />
                        </div>
                        <div className="form-group">
                            <div>
                                <label htmlFor="inscription_sexe" className="required">Sexe</label>
                                <select id="inscription_sexe" name="sexe" className="form-control" value={this.state.sex} onChange={this.handleSexChange}>
                                <option value="femme">Femme</option>
                                <option value="homme">Homme</option>
                                </select>
                            </div>
                        </div>
                        <div className="form-group">
                            <div>
                                <label htmlFor="inscription_age" className="required">Age</label>
                                <input type="number" id="inscription_age" name="age" required="required" className="form-control"
                                onChange={this.handleAgeChange}
                                value={this.state.age}
                                />
                            </div>
                        </div>
                        <div className="form-group">
                            <div>
                                <label htmlFor="inscription_date_dispo" className="required">Date de début</label>
                                <input type="date" id="inscription_date_dispo" name="date_dispo" required="required" className="form-control"
                                 onChange={this.handleDate_de_debutChange}
                                 value={this.state.date_de_debut}/>
                            </div>
                        </div>
                        <div className="form-group">
                            <div>
                                <label htmlFor="inscription_date_fin" className="required">Date de fin</label>
                                <input type="date" id="inscription_date_fin" name="date_fin" required="required" className="form-control"                                 onChange={this.handleDate_de_finChange}
                                 value={this.state.date_de_fin}/>
                            </div>
                        </div>
                        <div className="form-group">
                            <div>
                                <label>Activités</label>
                                <div className="form-control">
                                {this.state.activities.map((item,i)=>(
                                    <div key={i} id="inscription_activites" >
                                    <input type="checkbox" name={item.val} value={item.activity} onChange={this.handleActivityChange}/>
                                    <label htmlFor={item.activity}>{item.activity}</label>&nbsp;&nbsp;
                                    </div>))
                                }
                                </div>
                            </div>
                        </div>
                        <div className="form-group">
                            <div>
                            <label>Régions</label>
                            <div className="form-control">
                                {this.state.regions.map((item,i)=>(
                                    <div key={i} id="inscription_region"> 
                                    <input type="checkbox" name={item.val} value={item.region} onChange={this.handleRegionChange}
                                    />
                                    <label htmlFor={item.region}>{item.region}</label>&nbsp;&nbsp;
                                    </div>))
                                }
                                </div>
                            </div>
                        </div>
                        <div className="form-btn-group text-right">
                            <button type="submit" className="btn btn-info mt-4">
                            Enregistrer
                        </button>
                    </div>
                   </div>
                    </form>
                
                    </div>
                </div>
                :null
        )
    }
}

export default Inscription;