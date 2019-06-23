<h1>Detalle del pedido</h1>

<?php if(isset($pedido)): ?>
    <?php if(isset($_SESSION['admin'])): ?>
      <h3>Cambiar estado del pedido:</h3>
      <form action="<?php echo base_url; ?>pedido/estado" method="post">
        <input type="hidden" value="<?= $pedido->id ?>" name="pedido_id">
        <select name="estado">
          <option value="confirm" <?=$pedido->estado == 'confirm' ? 'selected' : '';?>>Pendiente</option>
          <option value="preparation" <?=$pedido->estado == 'preparation' ? 'selected' : '';?>>En preparación</option>
          <option value="ready" <?=$pedido->estado == 'ready' ? 'selected' : '';?>>Preparado para enviar</option>
          <option value="sended" <?=$pedido->estado == 'ready' ? 'selected' : '';?>>Enviado</option>
        </select>
        <input type="submit" value="Cambiar estado">
      </form>
      <br>
    <?php endif; ?>

    <h3>Dirección de envio</h3>
    Provincia: <?php echo $pedido->provincia; ?> <br>
    Ciudad: <?php echo $pedido->localidad; ?><br>
    Dirección: <?php echo $pedido->direccion; ?><br>
    <br>
    <h3>Datos del pedido:</h3>
    Estado: <?php echo Utils::showStatus($pedido->estado); ?> <br>
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