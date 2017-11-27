<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- custome CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  </head>
  <body>
    <section id="logo">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="img/my-logo.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>

    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>We're working hard, we'll be ready to launch in...</p>
          </div>
        </div>
      </div>
    </section>

    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="countdown">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="icons">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="list-inline">
              <a href="http://www.twitter.com/Shawnxxy" target="_blank">
                <li class="list-inline-item"><i class="fa fa-twitter-square fa-4x twitter" aria-hidden="true"></i></li>
              </a>
              <a href="http://www.facebook.com/shawnxxy" target="_blank">
                <li class="list-inline-item"><i class="fa fa-facebook-square fa-4x facebook" aria-hidden="true"></i></li>
              </a>
              <a href="http://www.linkedin.com/in/shawnxxy" target="_blank">
                <li class="list-inline-item"><i class="fa fa-linkedin-square fa-4x linkedin" aria-hidden="true"></i></li>
              </a>
            </ul>

          </div>
        </div>
      </div>
    </section>

    <section id="signup">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <form class="form-inline" role="form" method="post" action="index.php">
                <?php
                  if (isset($_POST['submit'])) {
                    $from = $_POST['email'];
                    $to = 'shawnxxy@hotmail.com';
                    $subject = 'Email singup';
                    $body = 'Please sign me up to the mailing list';

                    if (!$_POST['email']) {
                      $emailError = "Please enter a valid email address!";
                    }
                    if (!$emailError) {
                      if(mail($to, $subject, $body, $from)) {
                        $result = 'Thank you! We will keep you updated!';
                      } else {
                        $result = 'Sorry! There has been an error, please try again!';
                      }
                    }
                  }
                ?>
              <input type="email" class="form-control form-control-sm" name="email" placeholder="enter your email">
              <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">find out more</button>
            </form>

            <?php echo $emailError; ?>
            <?php echo $result; ?>

          </div>
        </div>
      </div>
    </section>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!--jQuery Countdown-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.countdown.js"></script>
    <script type="text/javascript">
        $(function() {
          $('.countdown').countdown({
              date: "June 7, 2087 15:03:26"
          });
        });
    </script>
  </body>
</html>
