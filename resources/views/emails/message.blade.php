<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Notification</title>
  
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #e7e7e7;
      color: #000000;
      font-family: 'Raleway', sans-serif;
    }
    
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    .container {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      border-radius: 4px;
      overflow: hidden;
    }
    
    .header, .footer {
      background-color: #eeeeee;
      padding: 20px;
      text-align: center;
    }
    
    .header h1 {
      margin: 0;
      font-size: 26px;
      line-height: 140%;
    }
    
    .content {
      padding: 20px;
      text-align: center;
    }
    
    .content h4 {
      margin: 0;
    }
    
    .content p {
      margin: 5px 0;
      line-height: 1.4;
    }
    
    .image {
      text-align: center;
      padding: 20px;
    }
    
    .image img {
      width: 81%;
      max-width: 470px;
      height: auto;
      border: none;
      display: inline-block;
    }
    
    @media only screen and (max-width: 620px) {
      .container {
        width: 100% !important;
      }
      
      .image img {
        width: 100% !important;
        max-width: none !important;
      }
    }
  </style>
  
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
</head>
<body>
  <table class="container">
    <tr>
      <td class="header">
        <h1>ENCHANTÉE ! ICI LA CONNE</h1>
        <h4>+229 96 03 18 86 / +229 40 16 26 96</h4>
      </td>
    </tr>
    <tr>
      <td class="image">
        <img src="https://zupimages.net/up/24/35/279c.jpg" alt="image">
      </td>
    </tr>
    <tr>
      <td class="content">
        <h1><strong>Contenu du message</strong></h1>
        <p>Nom complet : {{ $data['nom'] }}</p>
        <p>Email : {{ $data['email'] }}</p>
        <p>Téléphone : {{ $data['tel'] }}</p>
        <p>Message : {{ $data['message'] }}</p>
      </td>
    </tr>
    <tr>
      <td class="footer">
      
              <p>&copy; 2024 bStepUp. Tous droits réservés.</p>
          </tr>
      </td>
    </tr>
  </table>
</body>
</html>
