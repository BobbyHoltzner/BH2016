import React from 'react';
import SweetAlert from 'sweetalert-react';
import DropzoneInput from './dropzone.js';
import FormEditor from './formEditor.js';

let CreatePost = React.createClass({
  getInitialState(){
    return{
        title: '',
        slug: '',
        content: '',
    };
  },
  render: function() {
    return (
      <form action="#" style={{borderRadius: 0}} className="form-horizontal group-border-dashed">
        <div className="form-group">
          <label className="col-sm-3 control-label">Title</label>
          <div className="col-sm-6">
            <input
              name="title"
              type="text"
              placeholder="Title"
              className="form-control"
              onChange={this.handleChange}
              value={this.state.title} />
          </div>
        </div>
        <div className="form-group">
          <label className="col-sm-3 control-label">Slug</label>
          <div className="col-sm-6">
            <input
              name="slug"
              type="text"
              placeholder="Slug"
              className="form-control"
              onChange={this.handleChange}
              value={this.state.slug} />
          </div>
        </div>
        <div className="form-group">
          <label className="col-sm-3 control-label">Content</label>
          <div className="col-sm-6">
            <textarea
              name="content"
              placeholder="Content"
              className="form-control"
              onChange={this.handleChange}
              value={this.state.content}>
            </textarea>
          </div>
        </div>
      </form>
    );
  }
});
export default CreatePost;
