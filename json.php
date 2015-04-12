<?php
/* ------------------------------------------------------------------
  Vastuste loomine json formaadis
  Tauno Erik
	12.02.2012
------------------------------------------------------------------ */


define('IS_AJAX_REQUEST', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');


/* ------------------------------------------------------------------
  Piltide kataloogid
------------------------------------------------------------------ */
$o = 'images/o/';   // Originaal
$m = 'images/m/';   // Keskmine
$t = 'images/thu/'; // Pisipilt


/* ------------------------------------------------------------------ 
  Data
------------------------------------------------------------------ */
$lions = array(
    "hutlemae" => array(
        "id" => "1",
        "h1" => "Hutlemäe lõvi",
        "img" => "1",
        "figcaption" => "Hutlemäe lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "kerikumae" => array(
        "id" => "2",
        "h1" => "Kerikumäe lõvi",
        "img" => "2",
        "figcaption" => "Kerikumäe lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "tati-jaani" => array(
        "id" => "3",
        "h1" => "Tati-Jaani lõvi",
        "img" => "3",
        "figcaption" => "Tati-Jaani lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "otilaane" => array(
        "id" => "4",
        "h1" => "Otilaane lõvi",
        "img" => "4",
        "figcaption" => "Otilaane lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "viupera" => array(
        "id" => "5",
        "h1" => "Viupera lõvi",
        "img" => "5",
        "figcaption" => "Viupera lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "lakimotsa" => array(
        "id" => "6",
        "h1" => "Lakimõtsa lõvi",
        "img" => "6",
        "figcaption" => "Lakimõtsa lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "tammemae" => array(
        "id" => "7",
        "h1" => "Tammemäe lõvi",
        "img" => "7",
        "figcaption" => "Tammemäe lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "kyysta" => array(
        "id" => "8",
        "h1" => "Küüsta lõvi",
        "img" => "8",
        "figcaption" => "Küüsta lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "lyysi" => array(
        "id" => "9",
        "h1" => "Lüüsi lõvi",
        "img" => "9",
        "figcaption" => "Lüüsi lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "puraski" => array(
        "id" => "10",
        "h1" => "Puraski lõvi",
        "img" => "10",
        "figcaption" => "Puraski lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "leega" => array(
        "id" => "11",
        "h1" => "Leega lõvi",
        "img" => "11",
        "figcaption" => "Leega lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. <a href=''>Iriure complectitur</a> sea ea.<br/> Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "joosu" => array(
        "id" => "12",
        "h1" => "Joosu mõisa lõvi",
        "img" => "12",
        "figcaption" => "Joosu mõisa lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "ridali" => array(
        "id" => "13",
        "h1" => "Ridali mõtsa lõvi",
        "img" => "13",
        "figcaption" => "Ridali mõtsa lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "valsi" => array(
        "id" => "14",
        "h1" => "Vana Valsi lõvi",
        "img" => "14",
        "figcaption" => "Vana Valsi lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "pallikerba" => array(
        "id" => "15",
        "h1" => "Pallikerba lõvi",
        "img" => "15",
        "figcaption" => "Pallikerba lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "vaasaka" => array(
        "id" => "16",
        "h1" => "Vaaska lõvi",
        "img" => "16",
        "figcaption" => "Vaaska lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "kerd-samo" => array(
        "id" => "17",
        "h1" => "Kerdo-Samo lõvi",
        "img" => "17",
        "figcaption" => "Kerdo-Samo lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "keerbergi" => array(
        "id" => "18",
        "h1" => "Keerbergi lõvi",
        "img" => "18",
        "figcaption" => "Keerbergi lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    ),
    "moisapollu" => array(
        "id" => "19",
        "h1" => "Mõisapõllu lõvi",
        "img" => "19",
        "figcaption" => "Mõisapõllu lõvi",
        "txt" => "Lorem ipsum dolor sit amet, consul accusata scriptorem an mei. Unum expetenda vel no. Alienum eleifend id vel. Vel ea docendi fuisset, nibh choro iuvaret ea qui. Iriure complectitur sea ea. Nam placerat oportere an, at duo veniam aliquip recusabo. Ei sed vero menandri. Id quod illum delenit vis, vel te summo ignota propriae. Novum labitur his eu, te populo suscipiantur vix. At eloquentiam complectitur ius."
    )
);




/* ----------------------------------------------------
  Avalehe thumbnailide loomine
---------------------------------------------------- */
function json_menu($lions)
{
  global $t;
  $json = ('{"menu":['); // Algus

  //Massivis olevate lovide arv
  $tk = count($lions);


  foreach ($lions as $key => $lion)
  {
    if ($lion[id] != $tk){
      $json .= ' {"menu":"'.$key.'", "h1":"'.$lion[h1].'"},';
    }else{
      // Et viimasel real ei oleks koma
      $json .=  ' {"menu":"'.$key.'", "h1":"'.$lion[h1].'"}';
    }
  }
  $json .=  (']}'); // L6pp

  return $json;
}



/* ---------------------------------------------------
  Avalehe thumbnailide loomine
--------------------------------------------------- */
function json_ava($lions)
{
  global $t;
  $json = ('{"ava":['); // Algus

  //Massivis olevate lovide arv
  $tk = count($lions);

  foreach ($lions as $key => $lion)
  {
    if ($lion[id] != $tk){
      $json .= ' {"menu":"'.$key.'", "h1":"'.$lion[h1].'", "thu":"'.$t.$lion[img].'.jpg"},';
    }else{
      // Et viimasel real ei oleks koma
      $json .=  ' {"menu":"'.$key.'", "h1":"'.$lion[h1].'", "thu":"'.$t.$lion[img].'.jpg"}';
    }
  }
  $json .=  (']}'); // L6pp

  return $json;
}



/* -----------------------------------------------------------
  Array key jargi kombineerime Yhe Lovi kohta kaiva info
----------------------------------------------------------- */
function json_lion($i)
{
global $lions;
global $m;  
$json = '
  {
  "attr":
    {
      "id":"'.$lions[$i][id].'",
      "title":"'.$lions[$i][h1].'"
    },
      "content":"<section id=\"'.$lions[$i][id].'\"> <h1>'.$lions[$i][h1].'<\/h1> <figure> <img src=\"'.$m.$lions[$i][id].'.jpg\" > <figcaption>'.$lions[$i][figcaption].'</figcaption> <\/figure>  <p>'.$lions[$i][txt].'<\/p> <\/section>"
  }
';
return $json;
}


/* ------------------------------------------------------------
  Kui id=mingi jama siis vastame sellega
------------------------------------------------------------ */
$json_default = '
	{
  "attr":
    {
      "id":"Lõvi",
      "title":"Lõvi"
    },
      "content":"L6vid on vaga ilusad loomad."
			
	}
';



/* ---------------------------------------------------
  Vastame ainult siis kui on ajax päring
--------------------------------------------------- */
//if(IS_AJAX_REQUEST) {


/* ---------------------------------------------------
  Ilma selleta ei tööta ajax json teiselt domeenilt
--------------------------------------------------- */
header('Access-Control-Allow-Origin: *');


/* ---------------------------------------------------
  Paring
--------------------------------------------------- */
$i = $_GET['id'];


/* ---------------------------------------------------
  Vastuste loomine
--------------------------------------------------- */

/*
if($i == 'menu')
  {
    print json_menu($lions);
  }
elseif ($i == 'ava')
  {
     print json_ava($lions);
  }
else
  {
    foreach ($lions as $lion) 
    {
      if ($i == $lion[id])
      {
        print json_lion($i);
      }
    }
  }
*/




if(array_key_exists($i, $lions))
  {
    print json_lion($i);
  }
  elseif ($i == 'menu') 
  {
    print json_menu($lions);
  }
  elseif ($i == 'ava') 
  {
    print json_ava($lions);
  }
  else
  {
    print $json_default;
  }

/*
}//Ajax request end
else
{
  // Kui ei ole ajaxi paring siis ....
  print ('Tere');
}
*/

?>