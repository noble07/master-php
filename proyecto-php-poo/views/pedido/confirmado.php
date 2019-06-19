<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'completed'): ?>
  <h1>Tu pedido se ha confirmado</h1>
  <p>
    Tu pedido ha sido guardado con exito, una vez que realices la transferencia
    bancaria a la cuenta 734388123194123DDQ con el coste del pedido, será procesado y enviado.
  </p>
  <br>
  <?php if(isset($pedido)): ?>
    <h3>Datos del pedido:</h3>

    Número de pedido: <?php echo $pedido->id; ?> <br>
    Total a pagar: <?php echo $pedido->coste; ?> $ <br>
    Productos: <br>
      <table>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
        <?php while($producto = $productos->fetch_object()): ?>
          <tr>
            <td>
                <?php if($producto->imagen != null): ?>
                <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img-carrito" alt="">
                <?php else: ?>
                <img src="<?= base_url ?>assets/img/camiseta.png" class="img-carrito" alt="">
                <?php endif; ?>
            </td>
            <td>
                <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
            </td>
            <td>
                <?= $producto->precio ?>
            </td>
            <td>
                <?= $producto->unidades; ?>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
  <?php endif; ?>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'completed'): ?>
  <h1>Tu pedido no ha podido procesarse</h1>
<?php endif; ?>