import React, { createContext, useState } from 'react'
import PropTypes from 'prop-types';
import requestLogin from '../request/requestLogin'

export const LoginContext = createContext({
    email:'',
    password:'',
    isLogged:{},
});

const LoginProvider = ({ children }) => {

    const [email, setEmail] = useState("");
    const [password, setPassword]= useState("");
    const [isLogged, setIsLogged] = useState({});
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
 
    const changeIsLogged = (isLogged) =>{   
        setIsLogged(isLogged);
        console.log(isLogged);
    }

    const loginAccess = () =>{
        console.log(user);
        requestLogin.post("authentication/authenticate",user);

    }

    return(
        <LoginContext.Provider value={{ email, password, changePassword, changeEmail, loginAccess, isLogged}}>
            {children}
        </LoginContext.Provider>
    );
};


LoginProvider.propTypes = {
    email:PropTypes.string,
    password:PropTypes.string,
}

export default LoginProvider;

