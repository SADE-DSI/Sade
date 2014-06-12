
<?php
    echo "PDF";
    $connection = Yii::app()->db;
    $query=$connection->createCommand()->select('dlDireccion')->from('dptolocal')->queryAll();

/*
foreach($query as $row) {
    $dlDireccion=$instancia['dlDireccion'];
}
    //process each item here
  
}*/
$totalRows = count($query);
/*foreach ($connection->getQuery() as $row)
{
   echo $row->dlDireccion;
*/
   echo "<br>";
   echo "Numero de columnas=";
    echo $totalRows;
?>
