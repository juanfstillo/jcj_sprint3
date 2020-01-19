<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <form action="{{ route('order') }}" method="post">
          {{ csrf_field() }}
          <div>
            <label>Apellido y Nombre</label>
            <input required type="text" id="cname" name="cname" placeholder="Tu Nombre">
          </div>

          <div>
            <select class="" name="cbrand">
              <option value="Mastercard">Mastercard</option>
              <option value="Visa">Visa</option>
              <option value="Maestro">Maestro</option>
              <option value="American Express">American Express</option>
            </select>
          </div>

          <div>
            <label class="form-label">Número de tarjeta</label>
            <input required type="number" min="16" id="cnumber" name="cnumber" placeholder="1111-2222-3333-4444">
            <input required type="string" min="5" id="cexpirate" name="cexp" placeholder="Expiración MM/AA">
            <input required type="number" min="3" id="cvv" name="cvv" placeholder="CVV">
          </div>

          <button class="btn btn-secondary btn-lg btn-block" type="submit">Comprar</button>
        </form>
      </div>
    </div>
  </div>
</div>