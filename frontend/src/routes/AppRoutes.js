import React from 'react';
import { Route } from "react-router";
import LoginProvider from '../context/LoginProvider';
import Login from '../pages/Login';
import Dashboard from '../pages/Dashboard';
import CreateInvoce from '../pages/CreateInvoce';
import Error from '../common/Error';

const AppRoutes = [
                <Route key="login" path="/" exact>
                    <LoginProvider>
                        <div className="App-container-login">
                            <Login/>   
                        </div>
                    </LoginProvider>
                </Route>,
                <Route key="dashboard" path="/dashboard">
                    <div>
                        <Dashboard/>   
                    </div>
                </Route>,
                <Route key="createinvoce" path="/createinvoce">
                    <div>
                        <CreateInvoce/>   
                    </div>
                </Route>,
                <Route key="error" path="/error"
                    render={props => 
                        <div>
                            <Error {...props} />      
                        </div> 
                    }>
                </Route>,
    ];


export default AppRoutes