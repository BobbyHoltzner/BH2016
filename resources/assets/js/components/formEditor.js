import React from 'react';
import TextInput from './text-input.js';

var FormEditor = React.createClass({
  getInitialState: function() {
    return {};
  },
  handleFieldChange: function(fieldId, value) {
    var newState = {};
    newState[fieldId] = value;

    this.setState(newState);
  },

  render: function() {
    var fields = this.props.fields.map(function(field) {
      var props = {
        id: field,
        onChange: this.handleFieldChange,
        value: this.state[field]
      }
      return <TextInput{...props} />
    }, this);

    return (
      <div>
        {fields}
      </div>
    );
  }
});

export default FormEditor;
