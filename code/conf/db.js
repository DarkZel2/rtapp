const mongoose = require("mongoose");
const DB_URL = 'mongodb+srv://sartunduaga:0369@cluster0.avxkuvc.mongodb.net/cluster0?retryWrites=true&w=majority&appName=Cluster0'
const path = require('path')
 if (path) {
    console.log('init')
 }
const connect = () => {
    mongoose.connect(
        DB_URL,
        {
            keepAlive: true,
            useNewUrlParser: true,
            useUnifiedTopology: true
        },
        (err) => {
            if(err){
                console.log('DB connection error')
            }else{
                console.log('Connection established') 
            }
        }
    )
}
module.exports = connect 
