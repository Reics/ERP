<section>
        <form class="form-inline" method="POST" action="<?=site_url()?>/proveedores/relacionar/insertar">

        <div class="container">

<h2 align="center">Relacion de Proveedores con Contactos</h2>

        

            <table class="table tablesorter" align="center" style="margin-left: 50px; margin left:30px;float:center;">
                

                <tr>
                    <td>
                        
                        <select name="idProovedor" class="form-control">
                           <?php if ($procon1 != NULL) {
                foreach ($procon1 as $c): ?>} <option value="<?=$c['idp']?>"><?=$c['Nop']?></option><?php endforeach;
                    }?>
                        </select>
                        
                    </td>
                    
                    

                    