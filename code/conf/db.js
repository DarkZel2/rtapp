const mongoose = require('mongoose');
const uri = 'mongodb+srv://sartunduaga:0369@cluster0.avxkuvc.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';

module.exports = () => {
  const connect = () => {
    mongoose.connect(
      uri, (error) => {
        if (error) {
          console.log('Error connecting to db');
        } else {
          console.log('Connecting to db')
        }
      }
    )
  }
  connect();
}