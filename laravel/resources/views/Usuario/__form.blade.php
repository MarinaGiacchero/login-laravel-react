<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="nome" class="control-label">Nome</label>
            <input type="text" name="nome" id="nome" value="{{isset($registro->nome) ? $registro->nome:''}}" class="form-control"/>
        </div>    
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="data_nasc" class="control-label">Data de Nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" value="{{isset($registro->data_nasc) ? $registro->data_nasc:''}}" class="form-control"/>
        </div>    
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="email" class="control-label">E-mail</label>
            <input type="string" name="email" id="email" value="{{isset($registro->email) ? $registro->email:''}}" class="form-control"/>
        </div>    
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="password" class="control-label">Senha</label>
            <input type="password" name="password" id="password" value="{{isset($registro->password) ? $registro->password:''}}" class="form-control"/>
        </div>    
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="rg" class="control-label">RG</label>
            <input type="string" name="rg" id="rg" value="{{isset($registro->rg) ? $registro->rg:''}}" class="form-control"/>
        </div>    
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="cpf" class="control-label">CPF</label>
            <input type="string" name="cpf" id="cpf" value="{{isset($registro->cpf) ? $registro->cpf:''}}" class="form-control"/>
        </div>    
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="nacionalidade" class="control-label">Nacionalidade</label>
            <input type="string" name="nacionalidade" id="nacionalidade" value="{{isset($registro->nacionalidade) ? $registro->nacionalidade:''}}" class="form-control"/>
        </div>    
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="estado_civil" class="control-label">Estado civil</label>
            <input type="string" name="estado_civil" id="estado_civil" value="{{isset($registro->estado_civil) ? $registro->estado_civil:''}}" class="form-control"/>
        </div>    
    </div>
</div>