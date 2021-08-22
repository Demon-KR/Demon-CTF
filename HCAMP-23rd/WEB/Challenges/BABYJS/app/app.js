const vm = require('vm');
const path = require("path");
const express = require('express');
const pug = require('pug');

const app = express()

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'pug');

app.get('/', function(req, res, next){
    let msg = '';
    const code = req.query.code + '';

    if(code){
        try {
            const result = vm.runInNewContext(`'use strict'; ${code}`, {}, { timeout: 100 });
            if(result && code){
                msg = "nice try!";
            }
        } catch(e) {
            msg = "err";
        }
    } else {
            msg = "err";
    }
    res.render("index", {"title": "Hello BABYJS", msg});
});

module.exports = app;