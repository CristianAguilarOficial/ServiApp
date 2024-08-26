<form action="<?= base_url('usuarios/' . $usuario['id_usuario']); ?>" method="post" style="display:inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?');">Eliminar</button>
                        </form>