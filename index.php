<?php
function izbrisi_niza($vrednost, $niza) {
  return array_diff($niza, array($vrednost));
}
  $boi = array('AliceBlue', 'AntiqueWhite', 'Aqua', 'Aquamarine', 'Azure', 'Beige', 'Bisque', 'Black', 'BlanchedAlmond', 'Blue', 'BlueViolet', 'Brown', 'BurlyWood', 'CadetBlue', 'Chartreuse', 'Chocolate', 'Coral', 'CornflowerBlue', 'Cornsilk', 'Crimson', 'Cyan', 'DarkBlue', 'DarkCyan', 'DarkGoldenRod', 'DarkGray', 'DarkGrey', 'DarkGreen', 'DarkKhaki', 'DarkMagenta', 'DarkOliveGreen', 'DarkOrange', 'DarkOrchid', 'DarkRed', 'DarkSalmon', 'DarkSeaGreen', 'DarkSlateBlue', 'DarkSlateGray', 'DarkSlateGrey', 'DarkTurquoise', 'DarkViolet', 'DeepPink', 'DeepSkyBlue', 'DimGray', 'DimGrey', 'DodgerBlue', 'FireBrick', 'FloralWhite', 'ForestGreen', 'Fuchsia', 'Gainsboro', 'GhostWhite', 'Gold', 'GoldenRod', 'Gray', 'Grey', 'Green', 'GreenYellow', 'HoneyDew', 'HotPink', 'IndianRed', 'Indigo', 'Ivory', 'Khaki', 'Lavender', 'LavenderBlush', 'LawnGreen', 'LemonChiffon', 'LightBlue', 'LightCoral', 'LightCyan', 'LightGoldenRodYellow', 'LightGray', 'LightGrey', 'LightGreen', 'LightPink', 'LightSalmon', 'LightSeaGreen', 'LightSkyBlue', 'LightSlateGray', 'LightSlateGrey', 'LightSteelBlue', 'LightYellow', 'Lime', 'LimeGreen', 'Linen', 'Magenta', 'Maroon', 'MediumAquaMarine', 'MediumBlue', 'MediumOrchid', 'MediumPurple', 'MediumSeaGreen', 'MediumSlateBlue', 'MediumSpringGreen', 'MediumTurquoise', 'MediumVioletRed', 'MidnightBlue', 'MintCream', 'MistyRose', 'Moccasin', 'NavajoWhite', 'Navy', 'OldLace', 'Olive', 'OliveDrab', 'Orange', 'OrangeRed', 'Orchid', 'PaleGoldenRod', 'PaleGreen', 'PaleTurquoise', 'PaleVioletRed', 'PapayaWhip', 'PeachPuff', 'Peru', 'Pink', 'Plum', 'PowderBlue', 'Purple', 'RebeccaPurple', 'Red', 'RosyBrown', 'RoyalBlue', 'SaddleBrown', 'Salmon', 'SandyBrown', 'SeaGreen', 'SeaShell', 'Sienna', 'Silver', 'SkyBlue', 'SlateBlue', 'SlateGray', 'SlateGrey', 'Snow', 'SpringGreen', 'SteelBlue', 'Tan', 'Teal', 'Thistle', 'Tomato', 'Turquoise', 'Violet', 'Wheat', 'White', 'WhiteSmoke', 'Yellow', 'YellowGreen');
  $broj_boi = count($boi);
  $pozadina_boja = $boi[rand(0,$broj_boi-1)];

  $text_boi = izbrisi_niza($pozadina_boja, $boi);
  $text_broj_boi = count($text_boi);
  $prva_text_boja = $text_boi[rand(0,$text_broj_boi-1)];
  $vtora_text_boja = $text_boi[rand(0,$text_broj_boi-1)];
  $treta_text_boja = $text_boi[rand(0,$text_broj_boi-1)];
  
  $prva_font_golemina = (100 + (rand(0,20) * 5));
  $vtora_font_golemina = (100 + (rand(0,20) * 5));
  $treta_font_golemina = (100 + (rand(0,20) * 5));
  
  $poramnuvanja = array('center', 'left', 'right', 'justify');
  $prvo_poramnuvanje = $poramnuvanja[rand(0,3)];
  $vtoro_poramnuvanje = $poramnuvanja[rand(0,3)];
  $treto_poramnuvanje = $poramnuvanja[rand(0,3)];
  
  $stilovi = array('bold', 'italic', 'underline', 'uppercase');
  $prv_stil = $stilovi[rand(0,3)];
  $vtor_stil = $stilovi[rand(0,3)];
  $tret_stil = $stilovi[rand(0,3)];

  $strana = $_SERVER['PHP_SELF'];
  $sec = "1.5";
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $strana?>'">
    <title>You are awesome!</title>
    <style type="text/css">
  body {
    background: <?php echo $pozadina_boja; ?>;
    margin: 0;
    padding: 0;
    border: 0;
    box-sizing: border-box;
    width: 100vw;
    height:100vh;
  }

  .prva {
    margin: 0;
    padding: 0;
   color: <?php echo $prva_text_boja; ?>;
   font-size: <?php echo $prva_font_golemina; ?>px;
   text-align: <?php echo $prvo_poramnuvanje; ?>;
   <?php
   switch($prv_stil) {
     case 'bold':
       echo "font-weight: bold;";
       break;
     case 'italic':
       echo "font-style: italic;";
       break;
     case 'underline':
       echo "text-decoration: underline;";
       break;
     case 'uppercase':
       echo "text-transform: uppercase;";
       break;
    }?>
  }
  .vtora {
    margin: 0;
    padding: 0;
     color: <?php echo $vtora_text_boja; ?>;
     font-size: <?php echo $vtora_font_golemina; ?>px;
     text-align: <?php echo $vtoro_poramnuvanje; ?>;
     <?php
     switch($vtor_stil) {
       case 'bold':
         echo "font-weight: bold;";
         break;
       case 'italic':
         echo "font-style: italic;";
         break;
       case 'underline':
         echo "text-decoration: underline;";
         break;
       case 'uppercase':
         echo "text-transform: uppercase;";
         break;
         }?>
  }
  .treta {
    color: <?php echo $treta_text_boja; ?>;
    font-size: <?php echo $treta_font_golemina; ?>px;
    text-align: <?php echo $treto_poramnuvanje; ?>;
    <?php
    switch($tret_stil) {
      case 'bold':
        echo "font-weight: bold;";
        break;
      case 'italic':
        echo "font-style: italic;";
        break;
      case 'underline':
        echo "text-decoration: underline;";
        break;
      case 'uppercase':
        echo "text-transform: uppercase;";
        break;
    }
    ?>
  }
    </style>
  </head>
  <body>
    <p class="prva">Hey Sofi</p>
    <p class="vtora">Don't Forget</p>
    <p class="treta">You are awesome!</p>
  </body>
</html>
