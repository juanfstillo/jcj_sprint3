@extends('layout')

@section('title')
JCJ Tenis | Preguntas Frecuentes
@endsection

@section('main')
  <div class="main-content">
    <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
      <div class="container">
        <h2>Preguntas Frecuentes </h2>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


          <!-- Arrancan las preguntas -->

          <div class="panel panel-default">
            <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
              <h4 class="panel-title">
                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                  ¿Cuáles son las formas de pago disponibles?
                </a>
              </h4>
            </div>

            <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
              <div class="panel-body px-3 mb-4">
                <ul>
                  <li class="faq">Tarjeta de crédito - a través de MercadoPago</li>
                  <li class="faq">Contra reembolso (sin recargo)</li>
                  <li class="faq">Tranferencia Bancaria</li>
                </ul>
              </div>
            </div>
          </div>


          <div class="panel panel-default">
            <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
              <h4 class="panel-title">
                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                  ¿Quién puede recibir mi pedido?
                </a>
              </h4>
            </div>

            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
              <div class="panel-body px-3 mb-4">
                <p id='respuestasfaq'>Cualquier persona en el domicilio de entregar, mayor de 18 años podrá recibir tu compra. Debe presentar DNI al momento de entrega de la compra.</p>
              </div>
            </div>
          </div>


          <div class="panel panel-default">
            <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
              <h4 class="panel-title">
                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                  ¿Dónde encuentro el código de seguridad, al abonar con tarjeta de crédito?
                </a>
              </h4>
            </div>

            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
              <div class="panel-body px-3 mb-4">
                <p id='respuestasfaq'>El código de seguridad se encuentra en el dorso de la tarjeta. Son 3 (tres) dígitos expresados en números adicionales que siguen el número de la tarjeta de crédito; a excepción de American Express, que posee 4 (cuatro) dígitos y está en el frente de dicha tarjeta. El mismo es utilizado para verificar que el comprador sea el propietario de la misma.</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
  </div>
@endsection
