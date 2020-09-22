@extends('layouts.app')

@section('content')

    <div class="tab-pane fade show bg-light " role="banner">
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h4 class="text-primary">PREGUNTAS FRECUENTES</h4>
                    <div class="list-group" id="accordionOne">
                        <div class="expansion-panel list-group-item">
                            <a aria-controls="collapseOne" aria-expanded="false"
                               class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseOne"
                               id="headingOne"> 1.¿Registrarse como usuario (afiliarse) tiene algún costo?
                                <div class="expansion-panel-icon ml-3 text-black-secondary">
                                    <i class="collapsed-show material-icons">keyboard_arrow_down</i> <i
                                        class="collapsed-hide material-icons">keyboard_arrow_up</i>
                                </div>
                            </a>
                            <div aria-labelledby="headingOne" class="collapse" data-parent="#accordionOne"
                                 id="collapseOne">
                                <div class="expansion-panel-body">No, el proceso de registro como usuario
                                    es gratuito y no significará para usted costo alguno (ni en el momento de la
                                    afiliación, ni en un momento posterior).
                                </div>
                            </div>
                        </div>
                        <div class="expansion-panel list-group-item">
                            <a aria-controls="collapseTwo" aria-expanded="false"
                               class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseTwo"
                               id="headingTwo"> 2.¿Hay forma de recuperar mi clave de acceso en caso de olvido?
                                <div class="expansion-panel-icon ml-3 text-black-secondary">
                                    <i class="collapsed-show material-icons">keyboard_arrow_down</i> <i
                                        class="collapsed-hide material-icons">keyboard_arrow_up</i>
                                </div>
                            </a>
                            <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionOne"
                                 id="collapseTwo">
                                <div class="expansion-panel-body">Sí, para tal efecto debes hacer clic sobre el link
                                    "Recuperar contraseña" y la aplicación informática le solicitará registre la
                                    dirección de correo electrónico con la que se afilió a Págalo.pe a donde le enviará un código de
                                    verificación que deberá registrar junto a su nueva clave de acceso para confirmar la
                                    operación.
                                </div>
                            </div>
                        </div>
                        <div class="expansion-panel list-group-item">
                            <a aria-controls="collapseThree" aria-expanded="false"
                               class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseThree"
                               id="headingThree"> 3.¿Puedo pagar varias
                                tasas a la vez como parte de una misma transacción (compra online)?
                                <div class="expansion-panel-icon ml-3 text-black-secondary">
                                    <i class="collapsed-show material-icons">keyboard_arrow_down</i> <i
                                        class="collapsed-hide material-icons">keyboard_arrow_up</i>
                                </div>
                            </a>
                            <div aria-labelledby="headingThree" class="collapse" data-parent="#accordionOne"
                                 id="collapseThree">
                                <div class="expansion-panel-body">Sí, permite seleccionar varias tasas y
                                    agregarlas a un carrito de compras, de tal forma que finalmente se efectúa un solo
                                    cargo a su tarjeta de débito/crédito.
                                </div>
                            </div>
                        </div>
                        <div class="expansion-panel list-group-item">
                            <a aria-controls="collapseFord" aria-expanded="false"
                               class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseFord"
                               id="headingFord"> 4.¿Cuántas tasas puede agregar al carrito de compras como parte de una misma transacción (compra online)?
                                <div class="expansion-panel-icon ml-3 text-black-secondary">
                                    <i class="collapsed-show material-icons">keyboard_arrow_down</i> <i
                                        class="collapsed-hide material-icons">keyboard_arrow_up</i>
                                </div>
                            </a>
                            <div aria-labelledby="headingFord" class="collapse" data-parent="#accordionOne"
                                 id="collapseFord">
                                <div class="expansion-panel-body">Usted puede agregar un solo ítems  al carrito de compras.
                                </div>
                            </div>
                        </div>
                        <div class="expansion-panel list-group-item">
                            <a aria-controls="collapseFive" aria-expanded="false"
                               class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseFive"
                               id="headingFive"> 5.¿Puedo pagar varios servicios a la vez como parte de una misma transacción (compra online)?
                                <div class="expansion-panel-icon ml-3 text-black-secondary">
                                    <i class="collapsed-show material-icons">keyboard_arrow_down</i> <i
                                        class="collapsed-hide material-icons">keyboard_arrow_up</i>
                                </div>
                            </a>
                            <div aria-labelledby="headingFive" class="collapse" data-parent="#accordionOne"
                                 id="collapseFive">
                                <div class="expansion-panel-body">No, los pagso son unicos.
                                </div>
                            </div>
                        </div>
                        <div class="expansion-panel list-group-item">
                            <a aria-controls="collapseSix" aria-expanded="false"
                               class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseSix"
                               id="headingSix"> 6.¿Existe un importe máximo de
                                pago por cada compra online que efectúe?
                                <div class="expansion-panel-icon ml-3 text-black-secondary">
                                    <i class="collapsed-show material-icons">keyboard_arrow_down</i> <i
                                        class="collapsed-hide material-icons">keyboard_arrow_up</i>
                                </div>
                            </a>
                            <div aria-labelledby="headingSix" class="collapse" data-parent="#accordionOne"
                                 id="collapseSix">
                                <div class="expansion-panel-body">No existe importe máximo posible de pago a través de
                                    Págalo.pe. El límite lo da la línea de crédito o saldo disponible en su tarjeta
                                    (dependiendo si la tarjeta es de crédito o débito respectivamente). Por su parte, el limite para pagar
                                    por Agente Multired del BN es de S/1,000.00 por ticket.
                                </div>
                            </div>
                        </div>
                        <div class="expansion-panel list-group-item">
                            <a aria-controls="collapseSeven" aria-expanded="false"
                               class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseSeven"
                               id="headingSeven"> 7.¿Se cargará un costo o comisión
                                adicional a mi tarjeta por pagar tasas/servicios?
                                <div class="expansion-panel-icon ml-3 text-black-secondary">
                                    <i class="collapsed-show material-icons">keyboard_arrow_down</i> <i
                                        class="collapsed-hide material-icons">keyboard_arrow_up</i>
                                </div>
                            </a>
                            <div aria-labelledby="headingSeven" class="collapse" data-parent="#accordionOne"
                                 id="collapseSeven">
                                <div class="expansion-panel-body">No, solo se cargará a su tarjeta el importe de la tasa
                                    o servicios que usted ha seleccionado para pago. No se aplicarán cargos adicionales
                                    a su tarjeta por comisiones u otros gastos financieros.
                                </div>
                            </div>
                        </div>
                        <div class="expansion-panel list-group-item">
                            <a aria-controls="collapseHeight" aria-expanded="false"
                               class="expansion-panel-toggler collapsed" data-toggle="collapse" href="#collapseHeight"
                               id="headingHeight"> 8.¿A través de que medio de pago puedo efectivizar la compra?
                                <div class="expansion-panel-icon ml-3 text-black-secondary">
                                    <i class="collapsed-show material-icons">keyboard_arrow_down</i> <i
                                        class="collapsed-hide material-icons">keyboard_arrow_up</i>
                                </div>
                            </a>
                            <div aria-labelledby="headingHeight" class="collapse" data-parent="#accordionOne"
                                 id="collapseHeight">
                                <div class="expansion-panel-body">Usted puede emplear tarjetas de débito o crédito de
                                    las marcas Visa, Mastercard y American Express, emitidas por cualquier entidad
                                    financiera.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
