import React, { Component } from 'react';
import {Button, Form, FormControl, FormGroup} from "react-bootstrap";

class AddTodo extends Component {

	state = {
		title: null,
	}
	onChange = (e) => {
		this.setState({title: e.target.value})
	}
	add = (e) => {
		e.preventDefault()
		this.props.add(this.state.title)
	}
	render() {
		return (
			<div className="m-3 align-content-center">
				<form>
					<input name="title" className="w-75" onChange={this.onChange} />
					<button className="btn btn-sm btn-primary ms-3" onClick={this.add}>Add Todo</button>
				</form>
			</div>
		);
	}
}

export default AddTodo
