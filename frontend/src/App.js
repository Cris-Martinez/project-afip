import React from 'react';
import './App.css';
import {
  BrowserRouter as Router,
  Switch,
  Route
} from "react-router-dom";
import Login from './pages/login';
import LoginProvider from './context/loginProvider';
import Dashboard from './pages/dashboard';

function App(){
  return (
    <Router>
        <Switch>
            <Route path="/" exact>
              <LoginProvider>
                <div className="App-container-login">
                  <Login/>   
                </div>
              </LoginProvider>
            </Route>
            <Route path="/dashboard">
                <div>
                  <Dashboard/>   
                </div>
            </Route>
        </Switch>
      </Router>
  );
}

export default App;
