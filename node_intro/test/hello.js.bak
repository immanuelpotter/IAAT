const chai = require('chai');
const expect = chai.expect;
const request = require('superagent');
const status = require('http-status');

const apiRoot = 'http://localhost:3000/';

describe('Server-side HTTP request testing',function(){
  it('Returns "hello world" when request type is GET',function(done){
    request.get(apiRoot)
    .end(
      function(err,res){
        expect(err).to.not.be.an('error');
	expect(res.statusCode).to.equal(status.OK);
	expect(res.text).to.equal('Hello, World!');
	done();
     });
  });

    it('Returns an error when request type is POST',function(done){
      request.post(apiRoot)
      .end(
        function(err,res){
	  expect(err).to.be.an('error');
	  expect(res.statusCode).to.equal(status.METHOD_NOT_ALLOWED);
	  done();
        });
     });
});
