<div class="container">
        <form action="/action_page.php">
          <label for="name">Nombre</label>
          <input type="text" id="name" name="name" required minlength="3">
          <span class="error" aria-live="polite"></span>
          <label for="mail">Nombre</label>
          <input type="text" id="name" name="name" required minlength="3">
          <span class="error" aria-live="polite"></span>
          <label for="mail">Mail</label>
          <input type="email" id="mail" name="mail" required minlength="8">
          <span class="error" aria-live="polite"></span>
          <label for="psw">Password</label>
          <input type="password" id="psw" name="psw" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          <input type="submit" value="Submit">



        </form>
      </div>
      <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div>
