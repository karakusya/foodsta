const nodemailer = require('nodemailer');

const transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'your-email@gmail.com',
    pass: 'your-password'
  }
});

app.post('/email', (req, res) => {
  const name = req.body.name;
  const email = req.body.email;
  const message = req.body.message;

  const mailOptions = {
    from: email,
    to: 'katty67kuc@gmail.com',
    subject: 'тема листа',
    text: 'Ім`я: ${name}\nEmail: ${email}\nПовідомлення: ${message}'
    };
    
    transporter.sendMail(mailOptions, function(error, info){
    if (error) {
    console.log(error);
    res.status(500).send('Помилка відправки повідомлення!');
    } else {
    console.log('Email відправлено: ' + info.response);
    res.send('Повідомлення відправлено!');
    }
    });
    });