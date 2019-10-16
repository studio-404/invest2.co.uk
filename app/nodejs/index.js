const fs = require('fs');

const privateKey = fs.readFileSync('/etc/letsencrypt/live/invest2.co.uk/privkey.pem', 'utf8');
const certificate = fs.readFileSync('/etc/letsencrypt/live/invest2.co.uk/cert.pem', 'utf8');
const ca = fs.readFileSync('/etc/letsencrypt/live/invest2.co.uk/chain.pem', 'utf8');

const credentials = {
	key: privateKey,
	cert: certificate,
	ca: ca
};

var app = require('express')();
var https = require('https').Server(credentials, app);
var io = require('socket.io')(https);
var port = process.env.PORT || 3000;

app.get('/', function(req, res){
  res.sendFile(__dirname + '/index.html');
});

io.on('connection', function(socket){
  socket.on('chat message', function(msg){
    io.emit('chat message', msg);
  });
});

https.listen(port, function(){
  console.log('listening on *:' + port);
});
