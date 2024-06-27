<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <title>Inquiry Form</title>
  <style>
   body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}

.container {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border: 1px solid #ccc;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  display: block;
  width: 100%;
  padding: 10px;
  background-color:rgb(0 47 52);
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
strong{
    font-size: larger;
}
  </style>
</head>
<body>
  <div class="container">
    <form action="/submit_enquiry" method="post">
      <div class="form-group">
        <strong>Contact Seller</strong>
        <p>Fill the form just once to get faster responses. We will share your details with the seller</p>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">

        <label for="phone"> Phone number:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />
        <!-- <label for="phone">Phone No</label>
        <input type="number" id="phone" name="phone" required> -->
      </div>
    
        <!-- <input class="checkbox" type="checkbox" name="terms" required> I agree to the Terms and Conditions<br> -->
    

      <button type="submit">Enquiry Now</button>
    </form>
  </div>
</body>
</html>
