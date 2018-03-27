var express = require('express');
var router = express.Router();

router.get('/',function(req,res){
  res.send('Hello, World!');
});

router.post('/',function(req,res){
  res.statusCode = 405;
  res.send();
});

module.exports = router;
