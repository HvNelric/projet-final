import React, { Component } from 'react';
import FormFields from './formFields';
import axios from 'axios';

class User extends Component {

    state = {
        formData:{
            activity:{
                element:'input',
                value:'',
                label:true,
                labelText:'Email',
                config:{
                    name:'activity',
                    type:'text',
                    placeholder:''
                },
                validation:{
                    required:true,
                    minLen:2
                },
                valid:false,
                touched:false,
                validationMessage:'Vous devez entrer une adresse mail valide'
            },
            // password:{
            //     element:'input',
            //     value:'',
            //     label:true,
            //     labelText:'Mot de passe',
            //     config:{
            //         name:'_password',
            //         type:'password',
            //         placeholder:'Entrer votre mot de passe'
            //     },
            //     validation:{
            //         required:true
            //     },
            //     valid:false,
            //     touched:false,
            //     validationMessage:''
            // },
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
            axios.post('http://localhost:8000/test', dataToSubmit,
                {headers: {
                        "Content-Type": "application/json"}
                })
            // axios({
            //     method: 'post',
            //     url: 'http://localhost:8000/test',
            //     data: {
            //       firstName: 'Fred',
            //       lastName: 'Flintstone'
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





// import React from 'react';
//
// const Inscription = () => {
//     return (
//         <div class="container-fluid p-0 inscription-container">
//         <div class="container">
//             <div class="row">
//                 <div class="col-12">
                    {/*<form method="post" class="inscription-form p-5 m-0">*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Email</label>*/}
                            {/*<input type="email" class="form-control" name="email" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Mot de passe</label>*/}
                            {/*<input type="password" class="form-control" name="pwd" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Civilité</label>*/}
                            {/*<select class="form-control" name="civilite">*/}
                                {/*<option>Mme</option>*/}
                                {/*<option>M</option>*/}
                            {/*</select>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Prénom</label>*/}
                            {/*<input type="text" class="form-control" name="prenom" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Nom</label>*/}
                            {/*<input type="text" class="form-control" name="nom" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Adresse</label>*/}
                            {/*<input type="text" class="form-control" name="adresse" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Code postal</label>*/}
                            {/*<input type="text" class="form-control" name="cp" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Ville</label>*/}
                            {/*<input type="text" class="form-control" name="ville" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Date de naissance</label>*/}
                            {/*<input type="text" class="form-control" name="date" value=""/>*/}
                        {/*</div>*/}
                        {/*<div class="form-group">*/}
                            {/*<label>Téléphone</label>*/}
                            {/*<input type="text" class="form-control" name="nom" value=""/>*/}
                        {/*</div>*/}
                        {/*<button type="submit" class="btn btn-dark">Submit</button>*/}
                    {/*</form>*/}

//                 </div>
//             </div>
//         </div>
//     </div>
//     );
// };
//
// export default Inscription;