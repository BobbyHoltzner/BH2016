import React from 'react';

let TextInput = React.createClass({
  handleChange: function(event) {
    var text = event.target.value;
    this.props.onChange(this.props.id, text);
  },

  render: function() {
    return (
      <div className="form-group">
        <label className="col-sm-3 control-label">{this.props.label}</label>
        <div className="col-sm-6">
          <input
            name={this.props.name}
            type="text"
            placeholder={this.props.placeholder}
            className="form-control"
            onChange={this.handleChange}
            value={this.props.value} />
        </div>
      </div>
    );
  }
});
export default TextInput;
