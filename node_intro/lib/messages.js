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
          if (typeof newMessage.username === 'string' && typeof newMessage.text === 'string') {
            var cleanName = sanitizeHTML(newMessage.username,{allowedTags: []});
            var cleanText = sanitizeHTML(newMessage.text,{allowedTags: []});
            var message = new Message({username:cleanName,text:cleanText});
          }
            else{
                return callback('Bad type of username or text');
            }
        } catch(exception) {
        return callback('Cannot create Message.');
      }
      message.save(callback);
     // }
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
