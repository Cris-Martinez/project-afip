import React from 'react';
import './App.css';
import {
  BrowserRouter as Router,
  Switch,
  Route
} from "react-router-dom";
import LoginProvider from './context/LoginProvider';
import Login from './pages/Login';
import Dashboard from './pages/Dashboard';
import Error from './common/Error';

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
            <Route path="/error"
                   render={props => 
                    <div>
                      <Error {...props} />      
                    </div> 
                  }>
            </Route>
        </Switch>
      </Router>
  );
}

export default App;
