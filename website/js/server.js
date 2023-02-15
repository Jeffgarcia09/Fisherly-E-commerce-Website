const express = require('express');
const admin = require('firebase-admin');
const bcrypt = require('bcrypt');
const path = require('path');

//intializing express.js

//firebase admin setup
let serviceAccount = require("./fish-market-31c83-firebase-adminsdk-4odex-a85542715b.json");

admin.initializeApp({
  credential: admin.credential.cert(serviceAccount)
});

let db = admin.firebase();

const app = express();

//routes
//home route
app.get("/", (req, res) => {
	res.sendFile(path.join(__dirname, "public", "index.html"));
})

app.listen(3000, () => {
	console.log('listening on port 3000......'); 
})

//signup route
app.get('/signup', (req, res) => {
	res.sendFile(path.join(staticPath, "signup.html"));
})

//store user in db
db.collection('users').doc(email).get()
.then(user => {
	if(user.exists){
		return res.json({'alert': 'email already exists'});
	} else {
		// encrypt the password before storing it.
		bcrypt.genSalt(10, (err, salt) => {
			bcrypt.hash(password, salt, (err, hash) =>)
				req.body.password = hash;
				db.collection('users').doc(email).set(req.body)
				.then(data => {
					res.json({
						name: req.body.name,
						email: req.body.name,
						seller: req.body.name,
					})
				})
		})
	}
})