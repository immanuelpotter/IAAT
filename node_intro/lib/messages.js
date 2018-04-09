const sanitizeHTML = require('sanitize-html');

module.exports = function(url,callback){
  const mongoose = require('mongoose');
  mongoose.connect(url,callback);

  const messagesSchema = new mongoose.Schema(
      {
          username:{
              type:String,
              required:true
          },
          text:{
              type:String,
              required:true
          }
      },
      {strict:'throw'}
  );

  const Message = mongoose.model(
    'messages',
    messagesSchema
  );

  return {
    create:function(newMessage,callback){
      try {
        var message = new Message(newMessage);
        } catch(exception){
      return callback('Cannot create Message.');
    }
    message.save(callback);
    },
    read:function(id,callback){
      Message.findById(id).exec(callback);
    },
    readUsername:function(username,callback){
      Message.find({username}).exec(callback);
    },
    readAll:function(callback){
      Message.find({}).exec(callback);
    },
    update:function(id,updatedMessage,callback){
      Message.findByIdAndUpdate(id, updatedMessage).exec(callback);
    },
    delete:function(id,callback){
      Message.findByIdAndRemove(id).exec(callback);
    },
    deleteAll:function(callback){
      Message.remove({},callback);
    },
    disconnect:function(){
      mongoose.disconnect();
    }
  };
};
