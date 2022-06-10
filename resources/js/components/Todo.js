import React, { Component } from 'react';
import {Button, FormControl, FormFloating} from "react-bootstrap";
import FormCheckInput from "react-bootstrap/FormCheckInput";

class Todo extends Component {

	state = {
		todo: {
			id: null,
			title: '',
			done: false,
		}
	}
	componentDidMount() {
		this.setState({todo: {
			id: this.props.data.id,
			title: this.props.data.title,
			done: this.props.data.done,
		}})
	}
	del = (e) => {
		e.preventDefault()
		if(confirm("Datensatz wirklich löschen?")) {
			return this.props.del(this.state.todo)
		}
	}
	change = (e) => {
		const target = e.target;
		const value = target.type === 'checkbox' ? target.checked : target.value;
		this.setState({ todo: {
//				...this.state.todo,
				[target.name]: value
			}
		}, () => this.props.update(this.state.todo));
	}
	render() {
		console.info("done", this.state.todo.done)
		return (
			<li className="p-2">
				<form className="flex-nowrap">
					<input type="checkbox" name="done"
					       checked={this.state.todo.done}
					       onChange={this.change}
					       value={this.state.todo.done}
					/>
					<input name="title" className="border-0 w-75 ms-3"
					       onChange={this.change}
					       value={this.state.todo.title}
					/>
					<button className="btn btn-sm btn-danger float-end delsoft"
					        onClick={this.del}
					>Delete</button>
				</form>
			</li>
		);
	}
}

export default Todo
