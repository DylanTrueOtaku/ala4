<?php include 'header.php'?>

<body>
  <div id='placement'>
    <script language="javascript">
      //
      /*This Script allows people to enter by using a form that asks for a
UserID and Password*/
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
      //

    </script>
    <center>
      <h1><b>Username:</b></h1>
      <form name="login"><input name="id" type="text">
        <h1><b>Password:</b></h1>
        <input name="pass" type="password"><br><br>
        <input type="button" value="Login" onClick="pasuser(this.form)">
      </form>
    </center>
  </div>

</body>
<?php include 'footer.php'?>
