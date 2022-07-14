<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chatweb | sign un</title>
    <link rel="stylesheet" href="../script&style/style.css" />
  </head>
  <body>
    <div id="navBar">
      <p id="BigTitle">ChatWeb</p>
      <a href="login.php" class="signupBTN">log in</a>
    </div>
    <div id="main">
      <form id="loginForm" autocomplete="off">
        <p>Sign Up To ChatWeb</p>
        <table>
          <tr>
            <td><input type="text" class="prompt" placeholder="first name"/></td>
            <td><input type="text" class="prompt" placeholder="last name"/></td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="radio" name="gender" id="male">
              <label for="male">Male</label>
              <input type="radio" name="gender" id="female">
              <label for="male">Female</label>
            </td>
          </tr>
        </table>



        
        
        <input type="email" class="prompt" placeholder="Email"/>

        <input type="password" class="prompt" placeholder="password" />
        <input type="password" class="prompt" placeholder="confirm password" />


        <input type="submit" id="submit" name="" value="log in" />
      </form>
    </div>
  </body>
</html>
