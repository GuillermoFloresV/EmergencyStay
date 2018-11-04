<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/thank_you.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>
        Thank You
    </title>
    </head>
      <body>
    <h1 style="color:red;">We apologize for any problems you have experienced using our service. Please fill out the form below.</h1>
  


<form method="post" action="/ThankYou">
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="user_name">
  </div>

  <div>
    <label for="mail">E-mail:</label>
    <input type="email" id="mail" name="user_email">
  </div>

  <div>
    <label for="msg">Comments & Concerns:</label>
    <textarea id="msg" name="user_message"></textarea>
   </div>
 
  <div class="button">
    <button type="submit">Send your message</button>
  </div>
</form>
</body>
</html>