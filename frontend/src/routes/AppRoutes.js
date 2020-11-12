import React from 'react';
import { Route } from "react-router";
import LoginProvider from '../context/LoginProvider';
import CreateInvoceProvider from '../context/CreateInvoceProvider';
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
                    <CreateInvoceProvider>
                        <div>
                            <Dashboard/>   
                        </div>
                    </CreateInvoceProvider>
                </Route>,
                <Route key="createinvoce" path="/createinvoce">
                    <CreateInvoceProvider>
                        <div>
                            <CreateInvoce/>   
                        </div>
                    </CreateInvoceProvider>
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