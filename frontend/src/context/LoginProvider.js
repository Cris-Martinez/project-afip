import React, { createContext, useState } from "react";
import { Redirect } from "react-router-dom";
import PropTypes from "prop-types";
import { loginRequests } from "../requests/RequestLogin";

export const LoginContext = createContext({
  email: "",
  password: "",
});

const LoginProvider = ({ children }) => {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [isLogged, setIsLogged] = useState({});
  const [isErrorObject, setIsErrorObject] = useState({
    isError: false,
    message: "",
  });

  const [user, setUser] = useState({
    email: "",
    password: "",
  });

  const changeEmail = (email) => {
    setEmail(email);
    const newUser = Object.assign({}, { ...user, email });
    setUser(newUser);
  };

  const changePassword = (password) => {
    setPassword(password);
    const newUser = Object.assign({}, { ...user, password });
    setUser(newUser);
  };

  const loginAccess = () => {
    if (user.email !== "" && user.password !== "") {
      loginRequests(user, { setIsLogged, setIsErrorObject });
    }
  };

  const renderRedirectToDashboard = () => {
    switch (isLogged.status) {
      case 200:
        return <Redirect to="/dashboard" />;
      case 404:
        return (
          <Redirect
            to={{
              pathname: "/error",
              state: {
                status: "404",
                title: "404",
              },
            }}
          />
        );
      case 500:
        return (
          <Redirect
            to={{
              pathname: "/error",
              state: {
                status: "500",
                title: "500",
              },
            }}
          />
        );
      case isLogged !== {}:
        return (
          <Redirect
            to={{
              pathname: "/error",
              state: {
                status: "error",
                title: "Submission Failed",
              },
            }}
          />
        );
      default:
        break;
    }
  };

  return (
    <LoginContext.Provider
      value={{
        email,
        password,
        isLogged,
        isErrorObject,
        changePassword,
        changeEmail,
        loginAccess,
        renderRedirectToDashboard,
      }}
    >
      {children}
    </LoginContext.Provider>
  );
};

LoginProvider.propTypes = {
  email: PropTypes.string,
  password: PropTypes.string,
};

export default LoginProvider;
