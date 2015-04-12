
                    
                    <td>
                        
                        <select name="idContacto" class="form-control">
                          <?php if ($procon2 != NULL) {
                foreach ($procon2 as $e): ?>}  <option value="<?=$e['idc']?>"><?=$e['Noc']?></option><?php endforeach;
                    }?>
                        </select>
                        
                    </td>
                </tr>
                    
                </table>

                <div class="col-sm-offset-8 col-sm-10">
<button type="submit" class="btn btn-success">Guardar</button>
<a type="button" class="btn btn-danger" href="<?=site_url()?>/menu/proveedores">Cancelar</a>
</div>
                    </form> 

                    <br>
                    <br>
                    <div style="float:center;" class="col-sm-offset-8 col-sm-10">
                                        <a role="button" class="btn btn-success" href="<?=site_url()?>/menu/proveedores">Ir a página principal de Proveedores</a>
                </div>