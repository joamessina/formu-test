<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link type="text/css" rel="stylesheet" href="{{asset('assets/form.css')}}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<center><h2>Formulário de pagamento</h2></center>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Endereço</h3>
            <label for="fname"><i class="fa fa-user"></i> Nome</label>
            <input type="text" id="Nome" name="Nome" placeholder="Nome completo">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="....@exemplo.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Endereço</label>
            <input type="text" id="Endereço" name="Endereço" placeholder="">
            <label for="city"><i class="fa fa-institution"></i> Cidade</label>
            <input type="text" id="cidade" name="cidade" placeholder="">

            <div class="row">
              <div class="col-50">
                <label for="state">Estado</label>
                <input type="text" id="Estado" name="Estado" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="CEP">CEP</label>
                <input type="text" id="cep" name="cep" placeholder="10001">
              </div>
            </div>
          </div>
         
           <div class="col-50">
            <h3>Pagamento</h3>
            <label for="fname">Opções de cartões</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nome no cartão </label>
            <input type="text" id="nome " name="nome " placeholder=>
            <label for="ccnum">Número do cartão de crédito</label>
            <input type="text" id="Número" name="Número do cartão " placeholder="1111-2222-3333-4444">
            <label for="expmonth"> Mês de vencimento</label>
            <input type="text" id="Mês de vencimento" name="Mês de vencimento" placeholder="Setembro">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Ano de vencimento</label>
                <input type="text" id="ano" name="ano" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="">Código de segurança</label>
                <input type="text" id="Código" name="Código" placeholder="352">
              </div>
            </div>
          </div><div class="form-group">
    
  <label class="col-md-2 control-label" for="selectbasic"> <h11>Parcelamentos</h11></label>
  
  <div class="col-md-12">
    <select required id="Parcelamento" name="Parcelamento" class="form-control">
    <option value=""></option>
      <option value="1 vez sem juros">1 vez sem juros </option>
      <option value="2 vezes sem juros">2 vezes sem juros</option>
      <option value="3 vezes sem juros ">3 vezes sem juros </option>
      <option value="4 vezes sem juros">4 vezes sem juros</option>
      <option value="5 vezes sem juros">5 vezes sem juros</option>
      <option value="6 vezes sem juros">6 vezes sem juros</option>
      <option value="7 vezes sem juros">7 vezes sem juros</option>
      <option value="8 vezes sem juros">8 vezes sem juros</option>
      <option value="10 vezes sem juros">10 vezes sem juros</option>
      <option value="12 vezes sem juros ">12 vezes sem juros </option>
    </select>
  </div>
          
        </div>
        
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Cobrança no Endereço cadastrado
        </label>
        <input type="submit" value="Finalize seu pagamento " class="btn">
      </form>
    </div>
  </div>