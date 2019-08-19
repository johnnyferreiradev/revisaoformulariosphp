<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body >
    <div id="wrap">
        <form method="post" action='pedido/mostrar.php' id="delivery-form" >
        <div>
            <div class="cont_order">
               <fieldset>
                    <legend>Monte sua refeição</legend>
                    <div class='field_container'>
                        <label >Acompanhamento</label>
                        <label class='radiolabel'><input class="acomp" type="radio"  value="Arroz"  name="acomp" />Arroz branco</label><br/>
                        <label class='radiolabel'><input class="acomp" type="radio"  value="Macarrao" name="acomp" />Macarrão alho-e-óleo</label><br/>
                        <label class='radiolabel'><input class="acomp" type="radio"  value="Farofa" name="acomp" />Farofa de calabreza</label><br/>
                        <label class='radiolabel'><input class="acomp" type="radio"  value="Salada" name="acomp" />Salada de folhas</label><br/>
                    </div>
                    
                    <div class='field_container'>
                        <label for="flavor">Prato principal:</label >
                        <select id="flavor" name='prato_principal' >
                            <option value="">Escolha uma opção</option>
                            <option value="bife">Bife à parmegiana</option>
                            <option value="frango">Frango à parmegiana</option>
                            <option value="lasanha">Lasanha de brócolis</option>
                            <option value="peixe">Peixe frito</option>
                        </select>
                    </div>
                    <div class='field_container'>
                        <label >Adicionais:</label>
                        <label><input type="checkbox" value="Batata-frita" name="adicionais[bf]" />Batata-frita</label>
                        <label><input type="checkbox" value="Batata-palha" name="adicionais[bp]" />Batata-palha</label>
                        <label><input type="checkbox" value="Oregano" name="adicionais[or]" />Orégano</label>
                        <label><input type="checkbox" value="Vinagrete" name="adicionais[vn]" />Vinagrete</label>
                        <label><input type="checkbox" value="Tomate" name="adicionais[tm]" />Tomate</label>
                        <label><input type="checkbox" value="Cebola" name="adicionais[cb]" />Cebola</label>
                    </div>
                    <div class='field_container'>
                        <label class="inlinelabel"><input type="checkbox" id="agree" name="confirm" /> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
                    </div>
                </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                    <legend>Informações do cliente</legend>
                    <label for='name'>Nome completo</label>
                    <input type="text" id="name" name="name"/>
                    <br/>
                    <label for='address'>Endereço de entrega</label>
                    <input type="text" id="address" name="address"/>
                    <br/>
                    <label for='phonenumber'>Telefone</label>
                    <input type="text"  id="phonenumber" name="phonenumber"/>
                    <br/>
                </fieldset>
            </div>
            <input type='submit' id='submit' value='Realizar pedido'  />
        </div>  
       </form>
	</div>

</body>
</html>