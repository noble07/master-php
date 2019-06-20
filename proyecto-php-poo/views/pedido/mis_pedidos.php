<h1>Mis pedidos</h1>

<table>
    <th>N° Pedido</th>
    <th>Coste</th>
    <th>Fecha</th>
    <?php while($ped = $pedidos->fetch_object()): 
    ?>
    <tr>
        <td>
            <a href="<?= base_url ?>pedido/detalle&id=<?= $ped->id ?>"><?= $ped->id ?></a>
        </td>
        <td>
            <?= $ped->coste ?> $
        </td>
        <td>
            <?= $ped->fecha ?>
        </td>
    </tr>
    <?php endwhile; ?>
</table>