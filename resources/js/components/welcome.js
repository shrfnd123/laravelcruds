
import React from 'react';
import {  BrowserRouter as Router,Link,Route } from 'react-router-dom';
import Routepath from '../src/Routepath';


const Welcome = () => {
    return (
      <Router>
      <div>
                 <div className="topright">
                 <div className="topnav">
                   <Link to="/Login"> Login</Link>
                   <Link to="/Register"> Register</Link>
                                   
                             </div>
                         
                </div>
                <div className="middle">
                  <h1>COMING SOON</h1>
                 <hr></hr>
                  <p>35 days left</p>
                  </div> 
                 </div></Router>
    );
    }
    export default Welcome;
