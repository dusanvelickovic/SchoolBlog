<?php include "includes/init.php"?>
<?php include "includes/header.php"?>
<?php include "includes/navigation.php"?>
<!-- Contact -->
<section class="contact">
  <div class="container">
    <div class="contact__outline">
      <div class="contact__left">
        <h2 class="contact__h2">Kontaktirajte nas</h2>
         <?php
          if(isset($_POST['message'])){
            $nameSurname = $_POST['nameSurname'];
            $nameSurname = mysqli_real_escape_string($connection, $nameSurname);
            $email = $_POST['email'];
            $email = mysqli_real_escape_string($connection, $email);
            $message = $_POST['poruka'];
            $message = mysqli_real_escape_string($connection, $message);

            $query = "INSERT INTO `messages`(`messagesNameSurname`, `messagesEmail`, `messagesContent`, `messageTime`) 
            VALUES ('{$nameSurname}','{$email}','{$message}',now())";

            $result = mysqli_query($connection, $query);
          }
        ?> 
        <form action="contact.php" class="contact__form" method="post">
          <label for="fname" class="contact__label" >Ime i prezime</label>
          <input type="text" class="input" name="nameSurname" required/>
          <label for="email" class="contact__label">Email</label>
          <input type="email" name="email" class="input" required />
          <textarea
            required
            name="poruka"
            id="textarea"
            cols="30"
            rows="12"
            placeholder="Unesite poruku koju želite da nam pošaljete"
          ></textarea>
          <input type="submit" value="Submit" name="message" class="contact__submit" />
        </form>
      </div>
      <div class="contact__right">
        <iframe
          class="map"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d46442.92188627853!2d21.902457!3d43.320903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc3bba6c30903752f!2z0JPQuNC80L3QsNC30LjRmNCwIOKAntCR0L7RgNCwINCh0YLQsNC90LrQvtCy0LjRm-KAnQ!5e0!3m2!1ssr!2srs!4v1645380456179!5m2!1ssr!2srs"
          width="100%"
          height="100%"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </div>
  </div>
</section>
<!-- Footer --> 
<?php include "includes/footer.php"?>
