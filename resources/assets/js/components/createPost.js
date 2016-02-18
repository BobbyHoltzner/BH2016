import React from 'react';
import SweetAlert from 'sweetalert-react';
import DropzoneInput from './dropzone.js';

let CreatePost = React.createClass({
  getInitialState(){
    return {
      show: true,
    }
  },
  render(){
    return (
      <div>
      <button onClick={() => this.setState({ show: true })}>Alert</button>
      <SweetAlert
        show={this.state.show}
        title="Demo"
        text="SweetAlert in React"
        animation= "slide-from-top"
        onConfirm={() => this.setState({ show: false })}
      />
      <DropzoneInput />
    </div>
    );
  }
});
export default CreatePost;
