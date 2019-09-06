<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <!-- IMG: ICON -->
    <link rel="shortcut icon" href="img/me_icon.gif">
    <title>Volume of parallelepiped</title>

    <!-- CSS -->
    <style>

      div.teachers{
        background-color : lightgrey;
      }

      div.pm{
        background-color : lightgreen;
      }

      .bg-green{
        background-color: lightgreen;
        color: white;
        /* text-transform: uppercase; */
        font-size: 21px;
      }

      .bg-grey{
        background-color: lightgrey;
        color: white;
        /* text-transform: uppercase; */
        font-size: 21px;
      }
    
    </style>

    <!-- DICHIARAZIONE VARIABILI PHP -->
    <?php 

      $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
      ];

    ?>
    
  </head>

  <!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

  <!-- BODY -->
  <body>

    <!-- DIV CREATO CON html, CHIAVE CONUSCIUTA,
    VALORE ESTRAPOLATO  -->
    <div class="teachers">
      <h1>TEACHERS</h1>
      <?php 
        
        foreach ($db as $type => $name_lastname) {
                
          if ($type == "teachers") {
            
            foreach ($name_lastname as $name_lastname) {
              
              echo '<p>'. '<strong>Nome: </strong>'. $name_lastname["name"] . "<br> <strong>Cognome:</strong>". $name_lastname["lastname"] . '</p>';
            }

          }
          
        }
      
      ?>
    </div>

    <!-- DIV CREATO CON html, CHIAVE E VALORE ESTRAPOLATA DAL CICLO -->
    <div class="pm">
      <h1>PM</h1>

      <?php 

        foreach ($db as $type => $name_lastname) {
                
          if ($type == "pm") {
            
            foreach ($name_lastname as $name_lastname) {
      
              foreach ($name_lastname as $key => $value) {
              
                echo '<p><strong>'. $key . ': </strong>'. $value. '</p>';
              }
              echo '<br>';
              
            }

          }
          
        }

      ?>

    </div>


    <!-- DIV CREATO CON PHP, CHIAVE CONOSCIUTA -->    
    <?php 

      foreach ($db as $key => $value) {
        
        if ($key == "teachers") {
          
          echo '<div class="'. $key .'"><h1>'. $key .'</h1>';

          foreach ($value as $value) {
            
            echo '<p>'. '<strong>Nome e Cognome: </strong>'. $value["name"] . " " . $value["lastname"]. '</p>';
          }

          echo '</div>';
        }

        if ($key == "pm") {
          
          echo '<div class="'. $key .'"><h1>'. $key .'</h1>';

          foreach ($value as $value) {
            
            echo '<p>'. '<strong>Nome e Cognome: </strong>'. $value["name"] . " " . $value["lastname"]. '</p>';
          }

          echo '</div>';
        }
      }
    
    ?>

        
    <!-- Ciclo Array in PhP ed in base al tipo stampo la stringa verde e grigia -->    
    <?php 

      foreach ($db as $type => $name_lastname) {
        
        if ($type == "teachers") {
          
          foreach ($name_lastname as $name_lastname) {
            
            echo '<p class="bg-grey"><strong>'.'TEACHERS '. $name_lastname["name"] . " " . $name_lastname["lastname"].'</strong></p>';
          } 
        }

        if ($type == "pm") {
          
          foreach ($name_lastname as $name_lastname) {
            
            echo '<p class="bg-green"><strong>'. 'PM '. $name_lastname["name"] . " " . $name_lastname["lastname"].'</strong></p>';
          } 
        }
      }  

    ?>



            

  
  </body>
</html>