require('./bootstrap');

import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import CreateTask from './components/CreateTask';
import ListTasks from "./components/ListTasks";

if (document.getElementById('root')) {
    ReactDOM.render(
        <div>
            <CreateTask />
            <ListTasks/>
        </div>,
        document.getElementById('root')
    );
}
