import React from "react";
import { Route } from "react-router";
import LoginProvider from "../context/LoginProvider.jsx";
import CreateInvoceProvider from "../context/CreateInvoceProvider.jsx";
import Login from "../pages/Login.jsx";
import Dashboard from "../pages/Dashboard.jsx";
import CreateInvoce from "../pages/CreateInvoce.jsx";
import Error from "../common/Error.jsx";

const AppRoutes = [
  <Route key="login" path="/" exact>
    <LoginProvider>
      <div className="App-container-login">
        <Login />
      </div>
    </LoginProvider>
  </Route>,
  <Route key="dashboard" path="/dashboard">
      <div>
        <Dashboard />
      </div>
  </Route>,
  <Route key="createinvoce" path="/createinvoce">
    <CreateInvoceProvider>
      <div>
        <CreateInvoce />
      </div>
    </CreateInvoceProvider>
  </Route>,
  <Route
    key="error"
    path="/error"
    render={(props) => (
      <div>
        <Error {...props} />
      </div>
    )}
  ></Route>,
];

export default AppRoutes;
