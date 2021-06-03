const express = require('express');
const router = express.Router();
const connect = require('../lib/db');

/* GET herolist */
router.get('/', (req, res) => {
   connect.query("SELECT heroes_tb.id, heroes_tb.name, heroes_tb.photo, type_tb.name as type FROM heroes_tb INNER JOIN type_tb ON type_tb.id = type_id ORDER BY id ASC", (err, result) => {
      if (err) throw err;

      res.render('index', { app: 'Crud', result });
   })
});

/* GET hero add page */
router.get('/hero/add', (req, res) => {
   connect.query("SELECT * FROM type_tb", (err, result) => {
      if (err) throw err;

      res.render('hero/create', { app: "Add Hero", result })
   })
})

/* STORE data from hero add page */
router.post('/hero/store', (req, res) => {
   const storeData = {
      name: req.body.name,
      type_id: parseInt(req.body.type),
      photo: req.body.photo,
   }

   let errors = false; 

   if (!storeData.name.length) { 
      errors = true;
      req.flash('fail', `Fail ! <br />Name Field Cannot Be Empty`)
      res.redirect('/hero/add')
   }

   if(!storeData.type_id == null) {
      errors = true;
      req.flash('fail', `Fail ! <br />Type Field Cannot Be Empty`)
      res.redirect('/hero/add')
   }

   if (!storeData.photo.length) {
      errors = true;
      req.flash('fail', `Fail ! <br />Photo URL Field Cannot Be Empty`)
      res.redirect('/hero/add')
   }

   if (!errors) {
      connect.query('INSERT INTO heroes_tb SET ?', storeData, (err) => {
         if (err) throw err;;
   
         req.flash('successCreate', `Add Success ! <br />Added New Hero <b>${storeData.name}</b>`)
         res.redirect('/');
      })
   }
})

/* GET hero update page */
router.get('/hero/edit/:id', (req, res) => {
   connect.query(`SELECT heroes_tb.id, heroes_tb.name, heroes_tb.photo, type_tb.name as type, type_tb.id as typeID FROM heroes_tb INNER JOIN type_tb ON type_tb.id = type_id WHERE heroes_tb.id=${req.params.id}`, (err, result) => {
      if (err) throw err;
      
      res.render('hero/update', {
         app: `Update Hero ${result[0].name}`,
         id: result[0].id,
         name: result[0].name,
         type: result[0].type, 
         typeID: result[0].typeID, 
         photo: result[0].photo
      })
   })
})

/* UPDATE data from hero on modal */
router.post('/hero/update', (req, res) => {
   const updateData = {
      id: req.body.id,
      name: req.body.name,
      type_id: req.body.type,
      photo: req.body.photo
   }

   if (!updateData.name.length || !updateData.type_id.length || !updateData.photo.length) {
      req.flash('fail', `Fail ! <br />All Fields Cannot Be Empty`)
      
      connect.query(`SELECT heroes_tb.id, heroes_tb.name, heroes_tb.photo, type_tb.name as type, type_tb.id as typeID FROM heroes_tb INNER JOIN type_tb ON type_tb.id = type_id WHERE heroes_tb.id=${req.body.id}`, (err, result) => {
         if (err) throw err;
         
         res.render('hero/update', {
            app: `Update Hero ${result[0].name}`,
            id: result[0].id,
            name: result[0].name,
            type: result[0].type, 
            typeID: result[0].typeID, 
            photo: result[0].photo
         })
      })
   } else {
      connect.query(`UPDATE heroes_tb SET ? WHERE id = ${req.body.id}`, updateData, (err) => {
         if (err) throw err;
   
         req.flash('successUpdate', `Update Success ! <br />Updated Hero <b>${updateData.name}</b>`)
         res.redirect('/'); 
      })
   }
})

/* DELETE data from hero page */
router.get('/hero/delete/:id', (req, res) => {
   connect.query(`DELETE FROM heroes_tb WHERE id=${req.params.id}`, (err) => {
      if (err) throw err;

      req.flash('delete', `Delete Success ! <br />Hero Has Deleted`)
      res.redirect('/')
   })
})



module.exports = router;
