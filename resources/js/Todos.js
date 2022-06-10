import React, { Component, useState } from 'react';
import Axios from "axios";
import AddTodo from "./components/AddTodo";
import Todo from "./components/Todo";

class Todos extends Component {
	apiURL = "http://localhost:8000/api/todos";
	constructor(props) {
		super(props);
		this.state = {
			todos: [],
		}
	}
	componentDidMount() {
		Axios.get(this.apiURL)
			.then(resp => {
				this.setState({todos: resp.data})
			})
			.catch(err => console.error(err));
	}
	add = (text) => {
		const todo = {
			title: text,
			done: false,
		}
		Axios.post(this.apiURL, todo)
			.then(resp => {
				let items = this.state.todos
				items.push(resp.data)
				this.setState({todos: items}, () => console.info("add", this.state.todos))
			})
			.catch(err => console.error(err));
	}
	update = (todo) => {
		Axios.put(this.apiURL + "/" + todo.id, todo)
			.then(resp => {
				let items = this.state.todos.map(t => t.id === todo.id ? todo : t)
				this.setState({todos: items}, () => console.info("update", this.state.todos))
			})
			.catch(err => console.error(err));
	}
	del = (todo) => {
		Axios.delete(this.apiURL + "/" + todo.id, todo)
			.then(resp => {
				console.info("del", this.todos)
				let items = this.state.todos.filter(t => t !== todo)
				this.setState({todos: items}, () => console.info("del", this.state.todos))
			})
			.catch(err => console.error(err));
	}
	render() {
		console.info("render", this.state.todos)
		const rows = this.state.todos.map(item => <Todo
			key={item.id}
			data={item}
			update={this.update}
			del={this.del}
		/>);
		return (
			<div>
				<h3>My Todos</h3>
				<AddTodo add={this.add} />
				<ul className="list-unstyled">
					{rows}
				</ul>
			</div>
		);
	}
}

export default Todos
