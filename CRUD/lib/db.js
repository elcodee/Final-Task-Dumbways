const mysql = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : 'root1234',
  database : 'wiki_games'
});

connection.connect(function (error) {
   if (error) throw error;
   console.log('DB Connected !');
});

module.exports = connection; 