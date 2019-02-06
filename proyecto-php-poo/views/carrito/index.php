                <h1>Carrito de la compra</h1>

                <table>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Unidades</th>
                    <?php foreach($carrito as $indice => $elemento): 
                        $producto = $elemento['producto'];
                    ?>
                    <tr>
                        <td><?= $producto->imagen ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>