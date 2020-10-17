import React from 'react';
import './App.css';
import Layout from '../src/components/Layout'
import appRoutes from "../src/routes/AppRoutes";
import { Router } from "react-router";
import { createBrowserHistory } from "history";

const customHistory = createBrowserHistory();

function App(){
  return (
    <div>
      <Router history={customHistory}>
        <Layout>{ appRoutes }</Layout>
      </Router>
    </div>
  );
}

export default App;
