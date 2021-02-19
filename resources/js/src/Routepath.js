import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import { Route, BrowserRouter, Switch, Router, Link } from "react-router-dom";
import Welcome from "./components/Welcome";

const Routepath = () => {
    return (
        <BrowserRouter >
            <Switch>
                <Route exact path="/" component={Welcome}>
                </Route>
              
            </Switch>
        </BrowserRouter>
    );
    };
   export default Routepath;
  
ReactDOM.render(<Routepath />, document.getElementById('app'))