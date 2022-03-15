@extends('layouts.master')

@section('content')
<h2
class="field field--name-field-title field--type-text field--label-hidden">Donaciones recibidas</h2>
<div class="field__item even">
    <div class="entity entity-paragraphs-item paragraphs-item-numbers"
        about="" typeof=""
        class="entity entity-paragraphs-item paragraphs-item-numbers">
        <div class="content">


            <div class="paragraphs-items paragraphs-items-field-number paragraphs-items-field-number-full paragraphs-items-full"
                class="paragraphs-items paragraphs-items-field-number paragraphs-items-field-number-full paragraphs-items-full">
                <div
                    class="field field--name-field-number field--type-paragraphs field--label-hidden">
                    <div class="field__items">

                        @foreach ($donaciones as $donacion)
                        <!-- Comienzo del HTML correspondiente a 1 donación -->
                        <div class="field__item even">
                            <div class="entity entity-paragraphs-item paragraphs-item-number"
                                about="" typeof=""
                                class="entity entity-paragraphs-item paragraphs-item-number">
                                <div class="content">

                                    <div
                                        class="field field--name-field-title field--type-text field--label-hidden">
                                        <!-- Escribe aquí la cantidad donada -->
                                        {{ $donacion->partner_type_qty }} euros.
                                    </div>
                                    <div
                                        class="field field--name-field-subtitle field--type-text-long field--label-hidden">
                                        <div class="field__items">
                                            <div class="field__item even">
                                                {{ $donantes[$donacion->donante_id]->donation_personal_name}}&nbsp;
                                                {{ $donantes[$donacion->donante_id]->donation_personal_last_name1}}&nbsp;
                                                {{ $donantes[$donacion->donante_id]->donation_personal_last_name2}}
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin del HTML correspondiente a 1 donación -->
                        @endforeach



                    </div>
                </div> <span class="arrow">&nbsp;</span>
            </div>



        </div>
    </div>
</div>

@endsection
