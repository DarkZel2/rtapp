const express = require('express');
const controller = require('../controllers/user')
const router = express.Router();
const path = 'user'
/**
 * Ruta: /user GET
 */
router.get(
    `/code/app/routes/user.js${path}`,
    controller.getData
)

module.exports = router;