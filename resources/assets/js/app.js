import React from 'react';
import { render } from 'react-dom';
import { Router, Route, IndexRoute, Link, browserHistory } from 'react-router';


import LoginHandler from './components/login.js';
import Home from './components/home.js';
import About from './components/about.js';
import CreatePost from './components/createPost.js';

const App = React.createClass({

  render(){
    return(
      <div className="nav">
        <ul>
          <li><Link to="/dashboard/home">Home</Link></li>
          <li><Link to="/dashboard/about">About</Link></li>
        </ul>

        {this.props.children}
      </div>
    )
  }
})

render((<CreatePost />), document.getElementById('createPost'));

// render((
//   <Router history={browserHistory}>
//     <Route path="/dashboard/home" component={App}>
//       <IndexRoute component={Home} />
//       <Route path="/dashboard/about" component={About} />
//     </Route>
//   </Router>
//
// ), document.body);
