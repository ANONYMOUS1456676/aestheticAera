// importing packages
const express = require('express');
const admin = require('firebase-admin');
const bcrypt = require('bcrypt');
const path = require('path');

// Firebase Admin setup
if (!process.env.FIREBASE_SERVICE_ACCOUNT) {
    throw new Error('FIREBASE_SERVICE_ACCOUNT environment variable is missing');
}

const serviceAccount = JSON.parse(process.env.FIREBASE_SERVICE_ACCOUNT);

admin.initializeApp({
    credential: admin.credential.cert(serviceAccount)
});

const db = admin.firestore();

// Declare static path
const staticPath = path.join(__dirname, 'public');

const app = express();

// Middlewares
app.use(express.static(staticPath));
app.use(express.json());

// Home route
app.get('/', (req, res) => {
    res.sendFile(path.join(staticPath, 'index.html'));
});

// Signup page
app.get('/signup', (req, res) => {
    res.sendFile(path.join(staticPath, 'signup.html'));
});

// Signup route
app.post('/signup', (req, res) => {
    const { name, email, password, number, tac, notification } = req.body;

    // Form validation
    if (!name || name.length < 3) {
        return res.json({
            alert: 'name must be 3 letters long'
        });
    }

    if (!email || !email.length) {
        return res.json({
            alert: 'enter your email'
        });
    }

    if (!password || password.length < 8) {
        return res.json({
            alert: 'password should be 8 letters long'
        });
    }

    if (!number || !number.length) {
        return res.json({
            alert: 'enter your phone number'
        });
    }

    if (!Number(number) || number.length < 10) {
        return res.json({
            alert: 'invalid number, please enter valid one'
        });
    }

    if (!tac) {
        return res.json({
            alert: 'you must agree to our terms and conditions'
        });
    }

    // Check if user already exists
    db.collection('users').doc(email).get()
        .then(user => {

            if (user.exists) {
                return res.json({
                    alert: 'email already exists'
                });
            }

            // Encrypt password
            bcrypt.genSalt(10, (err, salt) => {

                if (err) {
                    return res.json({
                        alert: 'something went wrong'
                    });
                }

                bcrypt.hash(password, salt, (err, hash) => {

                    if (err) {
                        return res.json({
                            alert: 'something went wrong'
                        });
                    }

                    req.body.password = hash;

                    db.collection('users').doc(email).set(req.body)
                        .then(() => {
                            res.json({
                                name: req.body.name,
                                email: req.body.email,
                                seller: req.body.seller
                            });
                        })
                        .catch(() => {
                            res.json({
                                alert: 'failed to create account'
                            });
                        });
                });
            });
        })
        .catch(() => {
            res.json({
                alert: 'database error'
            });
        });
});

// Login page
app.get('/login', (req, res) => {
    res.sendFile(path.join(staticPath, 'login.html'));
});

// Login route
app.post('/login', (req, res) => {

    const { email, password } = req.body;

    if (!email || !password) {
        return res.json({
            alert: 'fill all the inputs'
        });
    }

    db.collection('users').doc(email).get()
        .then(user => {

            if (!user.exists) {
                return res.json({
                    alert: 'login email does not exist'
                });
            }

            bcrypt.compare(
                password,
                user.data().password,
                (err, result) => {

                    if (err) {
                        return res.json({
                            alert: 'something went wrong'
                        });
                    }

                    if (result === true) {

                        const data = user.data();

                        return res.json({
                            name: data.name,
                            email: data.email,
                            seller: data.seller
                        });

                    } else {

                        return res.json({
                            alert: 'wrong password'
                        });
                    }
                }
            );
        })
        .catch(() => {
            res.json({
                alert: 'database error'
            });
        });
});

// 404 page
app.get('/404', (req, res) => {
    res.sendFile(path.join(staticPath, '404.html'));
});

// 404 route
app.use((req, res) => {
    res.redirect('/404');
});

// Vercel/server port
const PORT = process.env.PORT || 3000;

app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});