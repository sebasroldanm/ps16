{if $save}
    <div class="bootstrap">
        <div class="module_confirmation conf confirm alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
            Url guardada correctamente
        </div>
    </div>
{/if}
<form action="" method="post">
    <div class="form-group">
        <label for="exampleUrl">URL</label>
        <input type="text" class="form-control" value="{$urlvalue}" name="exampleUrl" id="exampleUrl"
            aria-describedby="urlHelp" placeholder="Introduzca la URL">
        <small id="urlHekp" class="form-text text-muted">Introduzca una URL</small>
    </div>
    <button type="submit" name="submitCwEjemplo" class="btn btn-primary">Enviar</button>
</form>