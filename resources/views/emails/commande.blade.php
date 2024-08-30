<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="x-apple-disable-message-reformatting">
  <title>Confirmation de Commande</title>

  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #e7e7e7;
      color: #000;
      font-family: 'Raleway', sans-serif;
    }

    table, td {
      border-collapse: collapse;
      border-spacing: 0;
    }

    .container {
      width: 100%;
      background-color: #ffffff;
      margin: 0 auto;
    }

    .content {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
    }

    .header, .footer {
      text-align: center;
      padding: 20px;
    }

    .header img {
      width: 100%;
      max-width: 469.8px;
      height: auto;
    }

    .heading {
      font-size: 26px;
      font-weight: 400;
      line-height: 140%;
      text-align: center;
      margin: 0;
    }

    .subheading {
      font-size: 22px;
      font-weight: 700;
      line-height: 140%;
      text-align: center;
      margin: 20px 0;
    }

    .details {
      font-size: 14px;
      line-height: 140%;
      text-align: center;
      padding: 10px;
    }

    .footer p {
      font-size: 14px;
      line-height: 140%;
      margin: 0;
    }

    @media (max-width: 620px) {
      .content {
        width: 100% !important;
      }
    }
  </style>
</head>
<body>
  <table class="container" cellpadding="0" cellspacing="0">
    <tr>
      <td>
        <div class="content">
          <div class="header">
            <img src="https://zupimages.net/up/24/35/279c.jpg" alt="Confirmation de Commande">
          </div>
          <div class="body">
            <h1 class="heading">Confirmation de Commande</h1>
            <h2 class="subheading">Informations de Commande</h2>
            <div class="details">
              <p>Nom complet : {{ $data['nom'] }}</p>
              <p>Email : {{ $data['email'] }}</p>
              <p>Téléphone : {{ $data['tel'] }}</p>
              <p>Nombre Commande : {{ $data['nbrCommande'] }}</p>
              <p>Montant : {{ $data['total'] }} FCFA</p>
             
            </div>
          </div>
          <div class="footer">
            <p>Nous vous remercions de votre commande.</p>
            <p>Nous vous contacterons bientôt pour la livraison.</p>
          </div>
        </div>
      </td>
    </tr>
  </table>
</body>
</html>
