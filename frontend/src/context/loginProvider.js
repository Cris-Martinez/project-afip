import React, { createContext, useState } from 'react'
import PropTypes from 'prop-types';
import axios from 'axios';

axios.defaults.baseURL = `http://127.0.0.1:8000/api/`;

export const LoginContext = createContext({
    email:'',
    password:'',
});

const LoginProvider = ({ children }) => {

    const [email, setEmail] = useState("");
    const [password, setPassword]= useState("");
    const [isLogged, setIsLogged] = useState({});
    const [isErrorObject, setIsErrorObject] = useState({
        isError: false,
        message: "",
    });

    const [user, setUser] = useState({
        email:"",
        password:"",
    });
    
    const changeEmail = (email) => {
        /*realizar validacion de correo que tenga @, etc*/
        setEmail(email);
        const newUser = Object.assign({},{...user, email});
        setUser(newUser);
    }

    const changePassword = (password) => {
        setPassword(password);
        const newUser = Object.assign({},{...user, password});
        setUser(newUser);
    }

     const loginAccess = () =>{
        //requestLogin.post("authentication/authenticate",user);
        if(user.email !=="" && user.password !==""){
            axios.post("authentication/authenticate", user)
                        .then(res => {
                            setIsLogged(res); 
                            const newError = Object.assign({},{...isErrorObject, isError:false, message:""});
                            setIsErrorObject(newError);
                        })
                        .catch(err => {
                            if(err.response){
                                setIsLogged(err.response); 
                                const newError = Object.assign({},{...isErrorObject, isError:true, message:err.response.data.error});
                                setIsErrorObject(newError);
                            }else if(err.request){
                                setIsLogged(err.request); 
                            }else{
                                setIsLogged(err); 
                            }
                        }); 
        }
    }

    return(
        <LoginContext.Provider value={{ email, password, isLogged, isErrorObject, changePassword, changeEmail, loginAccess}}>
            {children}
        </LoginContext.Provider>
    );
};


LoginProvider.propTypes = {
    email:PropTypes.string,
    password:PropTypes.string,
}

export default LoginProvider;

