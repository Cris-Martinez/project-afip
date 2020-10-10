import React, { createContext, useState } from 'react'
import PropTypes from 'prop-types';
import Password from 'antd/lib/input/Password';

export const LoginContext = createContext({
    email:'',
    password:'',
});

const LoginProvider = ({ children }) => {

    const [email, setEmail] = useState("");
    const [password, setPassword]= useState("");
 
    const changeEmail = (emailValue) => {
        setEmail(emailValue);
        console.log("================="+emailValue);
    }

    const changePassword = (passwordValue) => {
        setPassword(passwordValue);
        console.log("================="+passwordValue);
    }
    
    const loginAccess = () =>{
        console.log("LOS DATOS PARA CONSULTAR SON:  "+password+"///"+email);
        
        //requestLogin.post("authentication/authenticate",)
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

