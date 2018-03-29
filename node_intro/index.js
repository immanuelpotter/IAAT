var express = require('express');
var app = express();
var router = require('./routes/hello.js');

app.use('/',router);

module.exports = app;
