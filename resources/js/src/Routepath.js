import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import { Route, BrowserRouter, Switch, Router, Link } from "react-router-dom";
import Welcome from "../components/Welcome";

const Routepath = () => {
    return (
        <Router className="Route_container">
            <Switch>
                <Route exact path="/">
                <Welcome />
                </Route>
                <Route  path="/login">
                <Login />
                </Route>
                <Route  path="/register">
                <Register />
                </Route>
            </Switch>
        </Router>
    );
    };
    export default Routepath;
  
ReactDOM.render(<Welcome />, document.getElementById('app'))