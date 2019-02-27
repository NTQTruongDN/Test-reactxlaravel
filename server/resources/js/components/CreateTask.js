import React, {Component} from 'react'

class CreateTask extends Component {
    constructor(props) {
        super(props);
        this.state = {
            name: '',
            task: []
        };
    }

    handleChange(e) {
        this.setState({
            name: e.target.value
        });
    }

    handleSubmit(e) {
        e.preventDefault();
        axios.post('/tasks', {
            name: this.state.name
        }).then(
            response => {
                console.log('Response: ', response)
            }
        )
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Create Task</div>
                            <div className="card-body">
                                <form onSubmit={this.handleSubmit.bind(this)}>
                                    <div className="form-group">
                                    <textarea
                                        className="form-control"
                                        rows="5"
                                        placeholder="Create a new task"
                                        required
                                    />
                                    </div>
                                    <button type="submit" className="btn btn-primary">
                                        Create Task
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default CreateTask;
