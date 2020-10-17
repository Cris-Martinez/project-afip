import React, { createContext, useState } from 'react'
import PropTypes from 'prop-types';
import requestLogin from '../request/RequestLogin'

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
        if(user.email !=="" && user.password !==""){
            requestLogin.post("authentication/authenticate", user, { setIsLogged, setIsErrorObject }); 
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

