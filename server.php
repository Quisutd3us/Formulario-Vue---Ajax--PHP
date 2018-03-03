<?php
$form_data = '';
foreach ( $_POST as $key => $value ) {
  $form_data .= "\$$key=$value<br>";
  $$key = $value;
}

echo $form_data;

if ( $formType == "true" ) {
  echo 'Opinión';
} else {
  echo 'Presupuesto';
}


