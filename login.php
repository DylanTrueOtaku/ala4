<?php include 'header.php'?>

<body>
  <div id='placement'>
    <script language="javascript">
      function pasuser(form) {
        if (form.id.value == "Hotelcal") {
          if (form.pass.value == "Calhotel") {
            location = "admin.php"
          } else {
            alert("Invalid Password")
          }
        } else {
          alert("Invalid UserID")
        }
      }

    </script>
    <center>
      <h1><b>Username:</b></h1>
      <form name="login">
        <input name="username" type="text">
        <h1><b>Password:</b></h1>
        <input name="password" type="password">
        <div id="Loginbuttons">
          <input type="button" value="Login" onClick="pasuser(this.form)">
          <input type="Reset" name="Reset">
        </div>
      </form>
    </center>
  </div>

</body>
<?php include 'footer.php'?>
