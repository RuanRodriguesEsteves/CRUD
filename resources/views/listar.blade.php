@extends('layout')

@section('title', 'Instalação Física')

@section('content')
<div class="text-center mt-5">
    <h1 class="display-4 mb-4">Visualização</h1>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<div style="max-height: 600px; max-width: 100vw; overflow-x: auto; overflow-y: auto;">

    <table class="table table-bordered table-striped table-sm mb-0" style="min-width: 1600px;">
        <thead>
            <tr>
                <th>Opções</th>
                <th>id</th>
                <th>nomedep</th>
                <th>de</th>
                <th>mun</th>
                <th>distr</th>
                <th>codesc</th>
                <th>nomesc</th>
                <th>tipoesc</th>
                <th>tipoesc_desc</th>
                <th>codsit</th>
                <th>salas_aula</th>
                <th>salas_ed_inf</th>
                <th>salas_ed_esp</th>
                <th>salas_ed_art</th>
                <th>sala_recurso</th>
                <th>tot_salas_aula</th>
                <th>auditorio</th>
                <th>anfiteatro</th>
                <th>teatro</th>
                <th>cantina</th>
                <th>copa</th>
                <th>cozinha</th>
                <th>refeitorio</th>
                <th>deposito_alimentos</th>
                <th>despensa</th>
                <th>tot_despensa</th>
                <th>sala_leitura</th>
                <th>biblioteca</th>
                <th>tot_sala_leitura</th>
                <th>quadra_coberta</th>
                <th>quadra_descoberta</th>
                <th>ginasio</th>
                <th>tot_quadra</th>
                <th>quadra_areia</th>
                <th>quadra_grama</th>
                <th>campo_futebol</th>
                <th>gabinete_dentario</th>
                <th>consultorio_medico</th>
                <th>enfermaria</th>
                <th>ambulatorio</th>
                <th>almoxarifado</th>
                <th>arquivo</th>
                <th>reprografia</th>
                <th>sala_gremio</th>
                <th>diretoria</th>
                <th>vicediretoria</th>
                <th>sala_prof</th>
                <th>secretaria</th>
                <th>sala_orient_ed</th>
                <th>sala_coord_pedag</th>
                <th>patio_coberto</th>
                <th>patio_descoberto</th>
                <th>zeladoria</th>
                <th>vestiario_fem</th>
                <th>vestiario_masc</th>
                <th>tot_vestiario</th>
                <th>videoteca</th>
                <th>sala_tv</th>
                <th>lab_info</th>
                <th>lab_ciencias</th>
                <th>lab_fisica</th>
                <th>lab_quimica</th>
                <th>lab_biologia</th>
                <th>lab_ciencia_fisica_biologica</th>
                <th>tot_lab_ciencia</th>
                <th>lab_linguas</th>
                <th>lab_multiuso</th>
                <th>oficina</th>
                <th>playground</th>
                <th>dormitorio</th>
                <th>bercario</th>
                <th>sanitario_adeq_pre</th>
                <th>sanitario_adeq_pre_fem</th>
                <th>sanitario_adeq_pre_masc</th>
                <th>sanitario_adeq_def</th>
                <th>sanitario_adeq_def_fem</th>
                <th>sanitario_adeq_def_masc</th>
                <th>sanitario_al_masc</th>
                <th>sanitario_al_fem</th>
                <th>tot_sanitario_al</th>
                <th>sanitario_func_fem</th>
                <th>sanitario_func_masc</th>
                <th>tot_sanitario_func</th>
                <th>depend_adeq_def</th>
                <th>sala_ed_fisica</th>
                <th>piscina</th>
                <th>portaria</th>
                <th>sala_prog_esc_familia</th>
                <th>brinquedoteca</th>
                <th>fraldario</th>
                <th>lactario</th>
                <th>lavanderia</th>
                <th>solario</th>
                <th>sala_espera</th>
                <th>sala_inspetor</th>
                <th>sala_reuniao</th>
                <th>tesouraria</th>
                <th>sala_reforco</th>
                <th>sala_diretor_tecnico</th>
                <th>garagem_onibus</th>
                <th>sala_fisioterapia</th>
                <th>sala_psicologia</th>
                <th>sala_fonoaudiologia</th>
                <th>sala_eventos</th>
                <th>sala_assist_social</th>
                <th>sala_terapia_educ</th>
                <th>abatedouro</th>
                <th>alojamento_fem</th>
                <th>alojamento_masc</th>
                <th>tot_alojamento</th>
                <th>area_servico</th>
                <th>bazar</th>
                <th>casa_maquina</th>
                <th>casa_func</th>
                <th>churrasqueira</th>
                <th>depositos_cereais</th>
                <th>elevador</th>
                <th>estacionamento</th>
                <th>estufa</th>
                <th>galpao_aves_corte</th>
                <th>galpao_aves_postura</th>
                <th>galpao_bovinos_leite</th>
                <th>galpao_cunicultura</th>
                <th>galpao_maq_agricola</th>
                <th>galpao_ovinos_caprinos</th>
                <th>galpao_suino</th>
                <th>grafica</th>
                <th>horta</th>
                <th>lab_didatica</th>
                <th>lab_junior</th>
                <th>lab_enfermagem</th>
                <th>lab_estetica</th>
                <th>lab_psicopedagogia</th>
                <th>lab_turismo</th>
                <th>lavatorio</th>
                <th>mangueira</th>
                <th>minhocario</th>
                <th>packing_house</th>
                <th>pomar</th>
                <th>psicultura</th>
                <th>recepcao</th>
                <th>sala_atendimento</th>
                <th>sala_atend_psicologico</th>
                <th>sala_aux_coordenacao</th>
                <th>sala_dados</th>
                <th>sala_dep_pessoal</th>
                <th>sala_ed_religiosa</th>
                <th>sala_energia_eletrica</th>
                <th>sala_entretenimento</th>
                <th>sala_estagio</th>
                <th>sala_ginastica</th>
                <th>sala_insumo_agricola</th>
                <th>sala_insumo_veterinario</th>
                <th>sala_marketing</th>
                <th>sala_matricula</th>
                <th>sala_musica</th>
                <th>sala_pos_graduacao</th>
                <th>sala_ordenha</th>
                <th>sala_proc_prod_agropecuarios</th>
                <th>sala_seguranca</th>
                <th>sala_telefonia</th>
                <th>sala_financeiro</th>
                <th>sala_pastoral</th>
                <th>sala_reserv_agua</th>
                <th>servidor</th>
                <th>silo</th>
                <th>varanda</th>
                <th>viveiro</th>
                <th>sala_reorg_neuro</th>
                <th>sala_terapia_ocup</th>
                <th>sala_serigrafia</th>
                <th>sala_marcenaria</th>
                <th>quiosque</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dados as $item)
            <tr>
                <td style="white-space: nowrap;">

                    <!-- Botão Editar -->
                    <a href="{{ route('instalacaofisica.editar', $item->id) }}" class="btn btn-sm btn-warning" title="Editar">
                        Editar
                    </a>

                    <!-- Formulário Excluir -->
                    <form action="{{ route('instalacaofisica.deletar', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Confirma exclusão?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" title="Excluir">
                            Excluir
                        </button>
                    </form>

                </td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nomedep }}</td>
                <td>{{ $item->de }}</td>
                <td>{{ $item->mun }}</td>
                <td>{{ $item->distr }}</td>
                <td>{{ $item->codesc }}</td>
                <td>{{ $item->nomesc }}</td>
                <td>{{ $item->tipoesc }}</td>
                <td>{{ $item->tipoesc_desc }}</td>
                <td>{{ $item->codsit }}</td>
                <td>{{ $item->salas_aula }}</td>
                <td>{{ $item->salas_ed_inf }}</td>
                <td>{{ $item->salas_ed_esp }}</td>
                <td>{{ $item->salas_ed_art }}</td>
                <td>{{ $item->sala_recurso }}</td>
                <td>{{ $item->tot_salas_aula }}</td>
                <td>{{ $item->auditorio }}</td>
                <td>{{ $item->anfiteatro }}</td>
                <td>{{ $item->teatro }}</td>
                <td>{{ $item->cantina }}</td>
                <td>{{ $item->copa }}</td>
                <td>{{ $item->cozinha }}</td>
                <td>{{ $item->refeitorio }}</td>
                <td>{{ $item->deposito_alimentos }}</td>
                <td>{{ $item->despensa }}</td>
                <td>{{ $item->tot_despensa }}</td>
                <td>{{ $item->sala_leitura }}</td>
                <td>{{ $item->biblioteca }}</td>
                <td>{{ $item->tot_sala_leitura }}</td>
                <td>{{ $item->quadra_coberta }}</td>
                <td>{{ $item->quadra_descoberta }}</td>
                <td>{{ $item->ginasio }}</td>
                <td>{{ $item->tot_quadra }}</td>
                <td>{{ $item->quadra_areia }}</td>
                <td>{{ $item->quadra_grama }}</td>
                <td>{{ $item->campo_futebol }}</td>
                <td>{{ $item->gabinete_dentario }}</td>
                <td>{{ $item->consultorio_medico }}</td>
                <td>{{ $item->enfermaria }}</td>
                <td>{{ $item->ambulatorio }}</td>
                <td>{{ $item->almoxarifado }}</td>
                <td>{{ $item->arquivo }}</td>
                <td>{{ $item->reprografia }}</td>
                <td>{{ $item->sala_gremio }}</td>
                <td>{{ $item->diretoria }}</td>
                <td>{{ $item->vicediretoria }}</td>
                <td>{{ $item->sala_prof }}</td>
                <td>{{ $item->secretaria }}</td>
                <td>{{ $item->sala_orient_ed }}</td>
                <td>{{ $item->sala_coord_pedag }}</td>
                <td>{{ $item->patio_coberto }}</td>
                <td>{{ $item->patio_descoberto }}</td>
                <td>{{ $item->zeladoria }}</td>
                <td>{{ $item->vestiario_fem }}</td>
                <td>{{ $item->vestiario_masc }}</td>
                <td>{{ $item->tot_vestiario }}</td>
                <td>{{ $item->videoteca }}</td>
                <td>{{ $item->sala_tv }}</td>
                <td>{{ $item->lab_info }}</td>
                <td>{{ $item->lab_ciencias }}</td>
                <td>{{ $item->lab_fisica }}</td>
                <td>{{ $item->lab_quimica }}</td>
                <td>{{ $item->lab_biologia }}</td>
                <td>{{ $item->lab_ciencia_fisica_biologica }}</td>
                <td>{{ $item->tot_lab_ciencia }}</td>
                <td>{{ $item->lab_linguas }}</td>
                <td>{{ $item->lab_multiuso }}</td>
                <td>{{ $item->oficina }}</td>
                <td>{{ $item->playground }}</td>
                <td>{{ $item->dormitorio }}</td>
                <td>{{ $item->bercario }}</td>
                <td>{{ $item->sanitario_adeq_pre }}</td>
                <td>{{ $item->sanitario_adeq_pre_fem }}</td>
                <td>{{ $item->sanitario_adeq_pre_masc }}</td>
                <td>{{ $item->sanitario_adeq_def }}</td>
                <td>{{ $item->sanitario_adeq_def_fem }}</td>
                <td>{{ $item->sanitario_adeq_def_masc }}</td>
                <td>{{ $item->sanitario_al_masc }}</td>
                <td>{{ $item->sanitario_al_fem }}</td>
                <td>{{ $item->tot_sanitario_al }}</td>
                <td>{{ $item->sanitario_func_fem }}</td>
                <td>{{ $item->sanitario_func_masc }}</td>
                <td>{{ $item->tot_sanitario_func }}</td>
                <td>{{ $item->depend_adeq_def }}</td>
                <td>{{ $item->sala_ed_fisica }}</td>
                <td>{{ $item->piscina }}</td>
                <td>{{ $item->portaria }}</td>
                <td>{{ $item->sala_prog_esc_familia }}</td>
                <td>{{ $item->brinquedoteca }}</td>
                <td>{{ $item->fraldario }}</td>
                <td>{{ $item->lactario }}</td>
                <td>{{ $item->lavanderia }}</td>
                <td>{{ $item->solario }}</td>
                <td>{{ $item->sala_espera }}</td>
                <td>{{ $item->sala_inspetor }}</td>
                <td>{{ $item->sala_reuniao }}</td>
                <td>{{ $item->tesouraria }}</td>
                <td>{{ $item->sala_reforco }}</td>
                <td>{{ $item->sala_diretor_tecnico }}</td>
                <td>{{ $item->garagem_onibus }}</td>
                <td>{{ $item->sala_fisioterapia }}</td>
                <td>{{ $item->sala_psicologia }}</td>
                <td>{{ $item->sala_fonoaudiologia }}</td>
                <td>{{ $item->sala_eventos }}</td>
                <td>{{ $item->sala_assist_social }}</td>
                <td>{{ $item->sala_terapia_educ }}</td>
                <td>{{ $item->abatedouro }}</td>
                <td>{{ $item->alojamento_fem }}</td>
                <td>{{ $item->alojamento_masc }}</td>
                <td>{{ $item->tot_alojamento }}</td>
                <td>{{ $item->area_servico }}</td>
                <td>{{ $item->bazar }}</td>
                <td>{{ $item->casa_maquina }}</td>
                <td>{{ $item->casa_func }}</td>
                <td>{{ $item->churrasqueira }}</td>
                <td>{{ $item->depositos_cereais }}</td>
                <td>{{ $item->elevador }}</td>
                <td>{{ $item->estacionamento }}</td>
                <td>{{ $item->estufa }}</td>
                <td>{{ $item->galpao_aves_corte }}</td>
                <td>{{ $item->galpao_aves_postura }}</td>
                <td>{{ $item->galpao_bovinos_leite }}</td>
                <td>{{ $item->galpao_cunicultura }}</td>
                <td>{{ $item->galpao_maq_agricola }}</td>
                <td>{{ $item->galpao_ovinos_caprinos }}</td>
                <td>{{ $item->galpao_suino }}</td>
                <td>{{ $item->grafica }}</td>
                <td>{{ $item->horta }}</td>
                <td>{{ $item->lab_didatica }}</td>
                <td>{{ $item->lab_junior }}</td>
                <td>{{ $item->lab_enfermagem }}</td>
                <td>{{ $item->lab_estetica }}</td>
                <td>{{ $item->lab_psicopedagogia }}</td>
                <td>{{ $item->lab_turismo }}</td>
                <td>{{ $item->lavatorio }}</td>
                <td>{{ $item->mangueira }}</td>
                <td>{{ $item->minhocario }}</td>
                <td>{{ $item->packing_house }}</td>
                <td>{{ $item->pomar }}</td>
                <td>{{ $item->psicultura }}</td>
                <td>{{ $item->recepcao }}</td>
                <td>{{ $item->sala_atendimento }}</td>
                <td>{{ $item->sala_atend_psicologico }}</td>
                <td>{{ $item->sala_aux_coordenacao }}</td>
                <td>{{ $item->sala_dados }}</td>
                <td>{{ $item->sala_dep_pessoal }}</td>
                <td>{{ $item->sala_ed_religiosa }}</td>
                <td>{{ $item->sala_energia_eletrica }}</td>
                <td>{{ $item->sala_entretenimento }}</td>
                <td>{{ $item->sala_estagio }}</td>
                <td>{{ $item->sala_ginastica }}</td>
                <td>{{ $item->sala_insumo_agricola }}</td>
                <td>{{ $item->sala_insumo_veterinario }}</td>
                <td>{{ $item->sala_marketing }}</td>
                <td>{{ $item->sala_matricula }}</td>
                <td>{{ $item->sala_musica }}</td>
                <td>{{ $item->sala_pos_graduacao }}</td>
                <td>{{ $item->sala_ordenha }}</td>
                <td>{{ $item->sala_proc_prod_agropecuarios }}</td>
                <td>{{ $item->sala_seguranca }}</td>
                <td>{{ $item->sala_telefonia }}</td>
                <td>{{ $item->sala_financeiro }}</td>
                <td>{{ $item->sala_pastoral }}</td>
                <td>{{ $item->sala_reserv_agua }}</td>
                <td>{{ $item->servidor }}</td>
                <td>{{ $item->silo }}</td>
                <td>{{ $item->varanda }}</td>
                <td>{{ $item->viveiro }}</td>
                <td>{{ $item->sala_reorg_neuro }}</td>
                <td>{{ $item->sala_terapia_ocup }}</td>
                <td>{{ $item->sala_serigrafia }}</td>
                <td>{{ $item->sala_marcenaria }}</td>
                <td>{{ $item->quiosque }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<div class="d-flex justify-content-center mt-3">
    {{ $dados->links('pagination::bootstrap-5') }}
</div>

<div class="mb-3 text-end">
    <a href="{{ route('instalacaofisica.criar') }}" class="btn btn-primary">
        + Novo Registro
    </a>
</div>

@endsection
