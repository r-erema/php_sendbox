const React = require('react');

module.exports = React.createClass({
    render : function () {
        return (
            <div>
                <h2>{this.props.title}</h2>
                <div>{this.props.text}</div>
            </div>
        );
    }
});