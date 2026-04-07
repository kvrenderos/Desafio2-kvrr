<?php require_once __DIR__ . '/../app/models/Producto.php'; $productos = Producto::getAll(); ?>
<a href="index.php?page=dashboard">Regresar</a>
<table>
<tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>
<?php while($row=$productos->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['nombre'] ?></td>
<td>
<a href="index.php?page=editar&id=<?= $row['id'] ?>">Editar</a>
<a href="app/controllers/ProductoController.php?delete=<?= $row['id'] ?>">Eliminar</a>
</td>
</tr>
<?php endwhile; ?>
</table>