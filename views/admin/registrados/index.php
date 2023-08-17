<h2 class="dashboad__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor">
    <?php if(!empty($registros)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Nombre</th>
                    <th scope="col" class="table__th">Emal</th>
                    <th scope="col" class="table__th">Plan</th>
                    <th scope="col" class="table__th">ID Pago Paypal</th>
                </tr>
            </thead>

            <tbody class="table__tbody
                <?php foreach($registros as $registro) { ?>
                    <tr class="table__tr">
                      <td class="table__td">
                        <?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?>
                      </td>

                      <td class="table__td">
                        <?php echo $registro->usuario->email; ?>
                      </td> 

                      <td class="table__td">
                        <?php echo $registro->paquete->nombre ?>
                      </td>

                      <td class="table__td">
                        <?php echo $registro->pago_id; ?>
                      </td>
                    </tr>  

                <?php } ?>    
            </tbody>
        </table>
    <?php } else { ?>    
        <p class="text-center">No Hay Registros Aún</p>
    <?php } ?>
</div>

<?php
    echo $paginacion;
?>