<?php
session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/assets/database/database.php";
    $sql = "SELECT * FROM user WHERE id={$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if ($user['email'] == "admin@gmail.com") {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];

            // Use prepared statement to prevent SQL injection
            $stmt = $mysqli->prepare("SELECT * FROM user WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user_mail = $result->fetch_assoc();

            if ($result->num_rows > 0) {

                if(is_null($user_mail['kit'])){
                    // If the email exists in the database
                    $updateSql = "UPDATE user SET kit = NOW() WHERE email = ?";
                    $stmt = $mysqli->prepare($updateSql);
                    $stmt->bind_param("s", $email);
                    $stmt->execute(); 
                    
                    echo '<p class="mensagem">Sucesso :)</p>';
                }
                else{
                    echo '<p class="mensagem">Este utilizador já levantou o seu kit: ' . $user_mail['kit'] . '</p>';
                }
            } else {
                // If the email does not exist in the database or the 'cv' is already set
                echo '<p class="mensagem"> Este mail não foi encontrado na base de dados :(</p>';
            }
        }
?>

<head>
    <title>Job2Be - Semana da Biomédica</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/styles/style_geral.css">
    <meta charset="UTF-8">
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src=".email-autocomplete/dist/email-autocomplete-min.js"></script>
    <style>
        .pagina{
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
        }
        
        .mensagem{
            font-family: 'League Spartan', sans-serif;
            color: #3F165B;
            text-align: center;
            margin: 5px;
        }

        .kit-form {
            display: flex;
            flex-direction: column;
            width: 60%; /* Ensure the form takes full width */
        }

        .titulo-kit {
            margin-right: 5px;
            font-family: 'League Spartan', sans-serif;
            color: #3F165B;
        }

        .input-field{
            display: flex;
        }

        .kit-input {
            width: 100%; /* Ensure the input field expands to full width */
        }

        #email {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            outline: none; /* Remove default outline */
        }

        .titulo{
            margin-top: 150px;
            margin-bottom: 70px;
        }

        .submit-button{
            color: #fff;
            background-color: #3F165B;
            border: none;
            border-radius: 5px;
            margin-left: 8px;
        }

        .submit-button:hover{
            scale: 1.02;
            cursor: pointer;
        }


        #suggester,
        #plugin {
        width: 40%;
        border: 2px solid;
        border-radius: 3px;
        margin-right: 20px;
        display: inline-block;
        vertical-align: top;
        padding: 10px;
        }

        .email-block {
        margin-bottom: 10px;
        }

        /* style the suggestion text color */
        .email-autocomplete {
        color: darkgrey;
        }

    </style>
</head>
<body>
    <div class="pagina">
        <div class="titulo-roxo titulo">Confirmar Entrega de Kit</div>
        <form class="kit-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email" class="titulo-kit">Email do Participante:</label>
            <div class="input-field">
                <input type="text" name="email" id="email" class="kit-input" required>
                <button type="submit" class="submit-button">SUBMIT</button>
            </div>
        </form>

        <section id="suggester">
        <h2>Suggest email domains via dropdown element.</h2>
        
        <div class="email-block">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="your@email.com">
        </div>
        
        <div class="email-block">
            <label for="confirm_email">Confirm Email</label>
            <input id="confirm_email" 
                name="confirm_email"
                placeholder="your@email.com" >
            </div>
        </section>

        <section id="plugin">
        <h2>Suggest email domains inling, using jQuery plugin: email-autocomplete by Low Yong Zhen.
            <a href="https://github.com/yongzhenlow/email-autocomplete">email-autocomplete</a></h2>
        
        <div class="email-block">
            <label for="plugin-email"
                class="email-label">Email</label>
            <input id="plugin-email" 
                name="plugin-email" 
                type="email" 
                placeholder="your@email.com">
        </div>
        
        <div class="email-block">
            <label for="plugin-confirm-email"
                class="confirm-email-label">Confirm Email</label>
            <input id="plugin-confirm-email" 
                name="plugin-confirm-email"
                type="email"
                placeholder="your@email.com" >
            </div>
        </section>
        
        
    </div>
    <script>
        var domains = ["yahoo.com", "gmail.com", "google.com", "hotmail.com", "me.com", "aol.com", "mac.com", "live.com", "comcast.com", "googlemail.com", "msn.com", "hotmail.co.uk", "yahoo.co.uk", "facebook.com", "verizon.net", "att.net", "gmz.com", "mail.com"];
  
  // Using Low Yong Zhen's jQuery plugin
  var $pluginEmailElem = $('#plugin-email').emailautocomplete({
    suggClass: 'email-autocomplete',
    labelClass: 'email-label',
    domains: domains
  });
  var $pluginConfirmEmailElem = $('#plugin-confirm-email').emailautocomplete({
    suggClass: 'email-autocomplete',
    labelClass: 'confirm-email-label',
    domains: domains
  });
  
  
  // Using DropDown element to suggest static list of domains
  var EmailDomainSuggester = function ($bindTo) {	
    var datalist = null;  
    
    var init = function () {    
        addElements();
      bindEvents();
    };
    
    var addElements = function () {
      var datalistId = 'email_options_' + $bindTo.attr('id');
      
        //create empty datalist
          datalist = $("<datalist />", {
              id: datalistId
          }).insertAfter($bindTo);    
      
      // correlate to input
          $bindTo.attr("list", datalistId);
    };
    
    var bindEvents = function () {
        $bindTo.on("keyup", testValue);
    };
    
    var testValue = function (event) {
      var el = $(this),
              value = el.val();
              
      // email has @
      if (value.indexOf("@") != -1) {
          value = value.split("@")[0];
        
        addDatalist(value);
      } else {
          // empty list
        emptyDatalist();
      }
    };
    
    var emptyDatalist = function () {
      datalist.empty();
    };
    
    var addDatalist = function (value) {
        var i,
              newOptionsString = '';
          
      // loop over all the domains in our array
      for (i=0; i<domains.length; i++) {
          newOptionsString += "<option value='" +
                                                        value + "@" +
                                domains[i] + 
                             "'>";
      }
      
      // add all the <option>s to the datalist
      datalist.html(newOptionsString);
    };  
    
    init();
  };
  
  var edsEmail = new EmailDomainSuggester($('#email'));
  var edsConfirmEmail = new EmailDomainSuggester($('#confirm_email'));
    </script>
</body>
        
<?php
    } else {
        echo '<p style="font-family: \'League Spartan\', sans-serif; color: #3F165B; text-align: center; margin: 20px;">This page is not available for you :)</p>';
    }
}
?>
