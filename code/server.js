const express = require('express')
const app = express()
const port = 3000
const router = require('./app/routes/user')
const Initdb = require('./conf/db')
const { connect } = require('mongoose')

app.use(router)

app.listen(port, () => {
    console.log('La pagina funciona')
})

Initdb(connect);