import React, { Component } from 'react';
import FormFields from './formFields';
import axios from 'axios';

class User extends Component {

    state = {
        formData:{
            username:{
                element:'input',
                value:'',
                label:true,
                labelText:'Email : ',
                config:{
                    name:'_username',
                    type:'email',
                    placeholder:''
                },
                validation:{
                    required:true,
                    minLen:2
                },
                valid:true,
                touched:true,
                validationMessage:'Vous devez entrer une adresse mail valide'
            },
            password:{
                element:'input',
                value:'',
                label:true,
                labelText:'Mot de passe : ',
                config:{
                    name:'_password',
                    type:'password',
                    placeholder:''
                },
                validation:{
                    required:true
                },
                valid:false,
                touched:false,
                validationMessage:''
            },
            // message:{
            //     element:'textarea',
            //     value:'',
            //     label:true,
            //     labelText:'Message',
            //     config:{
            //         name:'message_input',
            //         rows:4,
            //         cols:36
            //     },
            //     validation:{
            //         required:false
            //     },
            //     valid:true
            // },
            // age:{
            //     element:'select',
            //     value:'',
            //     label:true,
            //     labelText:'Age',
            //     config:{
            //         name:'age_input',
            //         options:[
            //             {val:'1',text:'10-20'},
            //             {val:'2',text:'20-30'},
            //             {val:'3',text:'+30'}
            //         ]
            //     },
            //     validation:{
            //         required:false
            //     },
            //     valid:true
             //}
        }
    }

    updateForm = (newState) => {
        this.setState({
            formData:newState
        })
    }

    submitForm = (event) => {
        event.preventDefault();
        let dataToSubmit = {};
        let formIsValid = true;

        for(let key in this.state.formData){
            dataToSubmit[key] = this.state.formData[key].value;
        }

        for(let key in this.state.formData){
            formIsValid = this.state.formData[key].valid && formIsValid;
        }

        if(formIsValid){
            console.log('data',dataToSubmit)
            axios.post('http://localhost:8000/loginr', dataToSubmit,
                {headers: {
                "Content-Type": "application/json"}
            })
            // axios({
            //     url: 'http://localhost:8000/test',
            //     method: 'POST',
            //     contentType: 'application/json',
            //     auth: {
            //         username: 'hvn@gmail.com',
            //         password: 'az'
            //     },
            //     headers: {
            //         "Content-Type": "application/json"}
            //     }
            //   )
               .then(function (response) {
                console.log('reponse',response);
              })
               .catch(function (error) {
                console.log(error);
              });
            }
            // firebaseDB.ref('users').push(dataToSubmit)
            // .then(()=>{
        //     }).catch( e =>{
        //         console.log(e)
        //     })
    }

    render(){
        return(
            <div className="container">
                <form onSubmit={this.submitForm}>

                    <FormFields
                        formData={this.state.formData}
                        onblur={(newState) => this.updateForm(newState)}
                        change={(newState) => this.updateForm(newState)}
                    />

                    <button type="submit">Submit</button>
                </form>
            </div>
        )
    }
}

export default User;