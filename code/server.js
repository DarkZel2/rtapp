const express = require('express')
const app = express()
const port = 3000
const router = require('./app/routes/user')

app.use(router)

app.listen(port, () => {
    console.log('La pagina funciona')
})