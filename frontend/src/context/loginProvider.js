import React, { createContext, useState } from 'react'
import PropTypes from 'prop-types';
import requestLogin from '../request/requestLogin'

export const LoginContext = createContext({
    email:'',
    password:'',
});

const LoginProvider = ({ children }) => {

    const [email, setEmail] = useState("");
    const [password, setPassword]= useState("");
 
    const changeEmail = (emailValue) => {
        setEmail(emailValue);
        console.log("================= "+emailValue);
    }

    const changePassword = (passwordValue) => {
        setPassword(passwordValue);
        console.log("================= "+passwordValue);
    }
    
    const loginAccess = () =>{
        console.log("LOS DATOS PARA CONSULTAR SON:  "+password+"///"+email);
        var user = {
            email,
            password,
        }
        requestLogin.post("authentication/authenticate",user);
    }

    return(
        <LoginContext.Provider value={{ email, password, changePassword, changeEmail, loginAccess}}>
            {children}
        </LoginContext.Provider>
    );
};

LoginProvider.propTypes = {
    email:PropTypes.string,
    password:PropTypes.string,
}

export default LoginProvider;

