var express = require('express');
var app = express();
var router = require('./routes/hello.js');

var port = 3000;
app.listen(port,function(){
  console.log('Listening on port 3000...');
});
app.use('/',router);

module.exports = createServer;
