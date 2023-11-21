<?

$con = conecta();

$id_producto = $_REQUEST['id_producto'];
$cantidad    = $_REQUEST['cantidad'];
$id_usuario  = $_REQUEST['id_usuario'];



if($num==0){
  $fecha = date('d-m');
}

$sql = "INSERT INTO pedidos_productos
        (id_pedido, id_producto, cantidad, costo)
        VALUES (id_pedido,ide_producto,cantidad,costo)
  echo 1;

?>
