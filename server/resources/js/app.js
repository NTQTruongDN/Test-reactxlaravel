/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

import React, {Component} from 'react';
import ReactDOM from 'react-dom';

import CreateTask from './components/CreateTask';

if (document.getElementById('root')) {
    ReactDOM.render(
        <CreateTask />,
        document.getElementById('root')
    );
}
