// Iniciamos el modulo con el fin de dar inicio al servidor, evitando varias configuraciones
const express = require('express'); // importamos el paquete
const app = express();
const mongoose = require('mongoose');
const bodyParser = require('body-parser');

// llamar al body-parser
app.use(bodyParser.json());
// Importar las rutas
const postRoute = require('./routes/post');
app.use('/servicios', postRoute);
//Middlewares: Es la llamada a una funcion cuando se presenta un evento en una ruta especifica
/*app.use('/servicios', () => {
    console.log('Corriendo la middleware');
});
*/
/* SE CREAN LAS RUTAS*/

app.get('/', (req, res) => {
    res.send('prueba 1 respuesta del servidor'); // Ruta por defecto
});
/*
app.get('/servicios', (req, res) => {
    res.send('prueba servicios');//Ruta por defecto
});
*/
//Conexión a la DB
mongoose.connect('mongodb+srv://sartunduaga:0369@cluster0.avxkuvc.mongodb.net/cluster0?retryWrites=true&w=majority', { useNewUrlParser: true }, () => {
    console.log('Si hay conexcion a la DB');
});
// Primero se configura cómo va escuchar el servidor las peticiones
app.listen(1000);