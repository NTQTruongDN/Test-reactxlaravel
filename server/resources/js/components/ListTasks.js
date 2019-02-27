import React from 'react';

class ListTasks extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            list_done: [],
            list_task: []
        };

        this.getListTask();
    }

    getListTask() {
        axios.get('/tasks')
            .then(res => {
                console.log(res);
            })
            .catch(err => {
                console.log(err);
            })
    }

    render() {
        return (
            <div className="container mt-4">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <h2>All task:</h2>
                        <div className="card">
                            <div className="card-header">
                                <p className="float-left">Task 1</p>
                                <button className="btn btn-danger float-right">Delete</button>
                                <button className="btn btn-success float-right">Resolve</button>
                            </div>
                        </div>
                    </div>

                    <div className="col-md-8 mt-4">
                        <h2>Resolve:</h2>
                        <div className="card">
                            <div className="card-header">
                                <del className="float-left font-italic">Task 1</del>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default ListTasks;
