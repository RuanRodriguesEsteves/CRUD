@extends('layout')

@section('title', 'Criar Instalação Física')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Criar nova Instalação Física</h1>

    {{-- Mensagens de erro --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Houve alguns problemas com seus dados.<br><br>
            <ul class="mb-0">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulário de criação --}}
    <form action="{{ route('instalacaofisica.salvar') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nomedep" class="form-label">nomedep</label>
            <input type="text" name="nomedep" id="nomedep" class="form-control" value="{{ old('nomedep') }}" required>
        </div>
        <div class="mb-3">
            <label for="de" class="form-label">de</label>
            <input type="text" name="de" id="de" class="form-control" value="{{ old('de') }}" required>
        </div>
        <div class="mb-3">
            <label for="mun" class="form-label">mun</label>
            <input type="text" name="mun" id="mun" class="form-control" value="{{ old('mun') }}" required>
        </div>
        <div class="mb-3">
            <label for="distr" class="form-label">distr</label>
            <input type="text" name="distr" id="distr" class="form-control" value="{{ old('distr') }}" required>
        </div>
        <div class="mb-3">
            <label for="codesc" class="form-label">codesc</label>
            <input type="text" name="codesc" id="codesc" class="form-control" value="{{ old('codesc') }}" required>
        </div>
        <div class="mb-3">
            <label for="nomesc" class="form-label">nomesc</label>
            <input type="text" name="nomesc" id="nomesc" class="form-control" value="{{ old('nomesc') }}" required>
        </div>
        <div class="mb-3">
            <label for="tipoesc" class="form-label">tipoesc</label>
            <input type="number" name="tipoesc" id="tipoesc" class="form-control" value="{{ old('tipoesc') }}" required>
        </div>
        <div class="mb-3">
            <label for="tipoesc_desc" class="form-label">tipoesc_desc</label>
            <input type="text" name="tipoesc_desc" id="tipoesc_desc" class="form-control" value="{{ old('tipoesc_desc') }}" required>
        </div>
        <div class="mb-3">
            <label for="codsit" class="form-label">codsit</label>
            <input type="text" name="codsit" id="codsit" class="form-control" value="{{ old('codsit') }}" required>
        </div>
        <div class="mb-3">
            <label for="salas_aula" class="form-label">salas_aula</label>
            <input type="number" name="salas_aula" id="salas_aula" class="form-control" value="{{ old('salas_aula') }}" required>
        </div>
        <div class="mb-3">
            <label for="salas_ed_inf" class="form-label">salas_ed_inf</label>
            <input type="number" name="salas_ed_inf" id="salas_ed_inf" class="form-control" value="{{ old('salas_ed_inf') }}" required>
        </div>
        <div class="mb-3">
            <label for="salas_ed_esp" class="form-label">salas_ed_esp</label>
            <input type="number" name="salas_ed_esp" id="salas_ed_esp" class="form-control" value="{{ old('salas_ed_esp') }}" required>
        </div>
        <div class="mb-3">
            <label for="salas_ed_art" class="form-label">salas_ed_art</label>
            <input type="number" name="salas_ed_art" id="salas_ed_art" class="form-control" value="{{ old('salas_ed_art') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_recurso" class="form-label">sala_recurso</label>
            <input type="number" name="sala_recurso" id="sala_recurso" class="form-control" value="{{ old('sala_recurso') }}" required>
        </div>
        <div class="mb-3">
            <label for="tot_salas_aula" class="form-label">tot_salas_aula</label>
            <input type="number" name="tot_salas_aula" id="tot_salas_aula" class="form-control" value="{{ old('tot_salas_aula') }}" required>
        </div>
        <div class="mb-3">
            <label for="auditorio" class="form-label">auditorio</label>
            <input type="number" name="auditorio" id="auditorio" class="form-control" value="{{ old('auditorio') }}" required>
        </div>
        <div class="mb-3">
            <label for="anfiteatro" class="form-label">anfiteatro</label>
            <input type="number" name="anfiteatro" id="anfiteatro" class="form-control" value="{{ old('anfiteatro') }}" required>
        </div>
        <div class="mb-3">
            <label for="teatro" class="form-label">teatro</label>
            <input type="number" name="teatro" id="teatro" class="form-control" value="{{ old('teatro') }}" required>
        </div>
        <div class="mb-3">
            <label for="cantina" class="form-label">cantina</label>
            <input type="number" name="cantina" id="cantina" class="form-control" value="{{ old('cantina') }}" required>
        </div>
        <div class="mb-3">
            <label for="copa" class="form-label">copa</label>
            <input type="number" name="copa" id="copa" class="form-control" value="{{ old('copa') }}" required>
        </div>
        <div class="mb-3">
            <label for="cozinha" class="form-label">cozinha</label>
            <input type="number" name="cozinha" id="cozinha" class="form-control" value="{{ old('cozinha') }}" required>
        </div>
        <div class="mb-3">
            <label for="refeitorio" class="form-label">refeitorio</label>
            <input type="number" name="refeitorio" id="refeitorio" class="form-control" value="{{ old('refeitorio') }}" required>
        </div>
        <div class="mb-3">
            <label for="deposito_alimentos" class="form-label">deposito_alimentos</label>
            <input type="number" name="deposito_alimentos" id="deposito_alimentos" class="form-control" value="{{ old('deposito_alimentos') }}" required>
        </div>
        <div class="mb-3">
            <label for="despensa" class="form-label">despensa</label>
            <input type="number" name="despensa" id="despensa" class="form-control" value="{{ old('despensa') }}" required>
        </div>
        <div class="mb-3">
            <label for="tot_despensa" class="form-label">tot_despensa</label>
            <input type="number" name="tot_despensa" id="tot_despensa" class="form-control" value="{{ old('tot_despensa') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_leitura" class="form-label">sala_leitura</label>
            <input type="number" name="sala_leitura" id="sala_leitura" class="form-control" value="{{ old('sala_leitura') }}" required>
        </div>
        <div class="mb-3">
            <label for="biblioteca" class="form-label">biblioteca</label>
            <input type="number" name="biblioteca" id="biblioteca" class="form-control" value="{{ old('biblioteca') }}" required>
        </div>
        <div class="mb-3">
            <label for="tot_sala_leitura" class="form-label">tot_sala_leitura</label>
            <input type="number" name="tot_sala_leitura" id="tot_sala_leitura" class="form-control" value="{{ old('tot_sala_leitura') }}" required>
        </div>
        <div class="mb-3">
            <label for="quadra_coberta" class="form-label">quadra_coberta</label>
            <input type="number" name="quadra_coberta" id="quadra_coberta" class="form-control" value="{{ old('quadra_coberta') }}" required>
        </div>
        <div class="mb-3">
            <label for="quadra_descoberta" class="form-label">quadra_descoberta</label>
            <input type="number" name="quadra_descoberta" id="quadra_descoberta" class="form-control" value="{{ old('quadra_descoberta') }}" required>
        </div>
        <div class="mb-3">
            <label for="ginasio" class="form-label">ginasio</label>
            <input type="number" name="ginasio" id="ginasio" class="form-control" value="{{ old('ginasio') }}" required>
        </div>
        <div class="mb-3">
            <label for="tot_quadra" class="form-label">tot_quadra</label>
            <input type="number" name="tot_quadra" id="tot_quadra" class="form-control" value="{{ old('tot_quadra') }}" required>
        </div>
        <div class="mb-3">
            <label for="quadra_areia" class="form-label">quadra_areia</label>
            <input type="number" name="quadra_areia" id="quadra_areia" class="form-control" value="{{ old('quadra_areia') }}" required>
        </div>
        <div class="mb-3">
            <label for="quadra_grama" class="form-label">quadra_grama</label>
            <input type="number" name="quadra_grama" id="quadra_grama" class="form-control" value="{{ old('quadra_grama') }}" required>
        </div>
        <div class="mb-3">
            <label for="campo_futebol" class="form-label">campo_futebol</label>
            <input type="number" name="campo_futebol" id="campo_futebol" class="form-control" value="{{ old('campo_futebol') }}" required>
        </div>
        <div class="mb-3">
            <label for="gabinete_dentario" class="form-label">gabinete_dentario</label>
            <input type="number" name="gabinete_dentario" id="gabinete_dentario" class="form-control" value="{{ old('gabinete_dentario') }}" required>
        </div>
        <div class="mb-3">
            <label for="consultorio_medico" class="form-label">consultorio_medico</label>
            <input type="number" name="consultorio_medico" id="consultorio_medico" class="form-control" value="{{ old('consultorio_medico') }}" required>
        </div>
        <div class="mb-3">
            <label for="enfermaria" class="form-label">enfermaria</label>
            <input type="number" name="enfermaria" id="enfermaria" class="form-control" value="{{ old('enfermaria') }}" required>
        </div>
        <div class="mb-3">
            <label for="ambulatorio" class="form-label">ambulatorio</label>
            <input type="number" name="ambulatorio" id="ambulatorio" class="form-control" value="{{ old('ambulatorio') }}" required>
        </div>
        <div class="mb-3">
            <label for="almoxarifado" class="form-label">almoxarifado</label>
            <input type="number" name="almoxarifado" id="almoxarifado" class="form-control" value="{{ old('almoxarifado') }}" required>
        </div>
        <div class="mb-3">
            <label for="arquivo" class="form-label">arquivo</label>
            <input type="number" name="arquivo" id="arquivo" class="form-control" value="{{ old('arquivo') }}" required>
        </div>
        <div class="mb-3">
            <label for="reprografia" class="form-label">reprografia</label>
            <input type="number" name="reprografia" id="reprografia" class="form-control" value="{{ old('reprografia') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_gremio" class="form-label">sala_gremio</label>
            <input type="number" name="sala_gremio" id="sala_gremio" class="form-control" value="{{ old('sala_gremio') }}" required>
        </div>
        <div class="mb-3">
            <label for="diretoria" class="form-label">diretoria</label>
            <input type="number" name="diretoria" id="diretoria" class="form-control" value="{{ old('diretoria') }}" required>
        </div>
        <div class="mb-3">
            <label for="vicediretoria" class="form-label">vicediretoria</label>
            <input type="number" name="vicediretoria" id="vicediretoria" class="form-control" value="{{ old('vicediretoria') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_prof" class="form-label">sala_prof</label>
            <input type="number" name="sala_prof" id="sala_prof" class="form-control" value="{{ old('sala_prof') }}" required>
        </div>
        <div class="mb-3">
            <label for="secretaria" class="form-label">secretaria</label>
            <input type="number" name="secretaria" id="secretaria" class="form-control" value="{{ old('secretaria') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_orient_ed" class="form-label">sala_orient_ed</label>
            <input type="number" name="sala_orient_ed" id="sala_orient_ed" class="form-control" value="{{ old('sala_orient_ed') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_coord_pedag" class="form-label">sala_coord_pedag</label>
            <input type="number" name="sala_coord_pedag" id="sala_coord_pedag" class="form-control" value="{{ old('sala_coord_pedag') }}" required>
        </div>
        <div class="mb-3">
            <label for="patio_coberto" class="form-label">patio_coberto</label>
            <input type="number" name="patio_coberto" id="patio_coberto" class="form-control" value="{{ old('patio_coberto') }}" required>
        </div>
        <div class="mb-3">
            <label for="patio_descoberto" class="form-label">patio_descoberto</label>
            <input type="number" name="patio_descoberto" id="patio_descoberto" class="form-control" value="{{ old('patio_descoberto') }}" required>
        </div>
        <div class="mb-3">
            <label for="zeladoria" class="form-label">zeladoria</label>
            <input type="number" name="zeladoria" id="zeladoria" class="form-control" value="{{ old('zeladoria') }}" required>
        </div>
        <div class="mb-3">
            <label for="vestiario_fem" class="form-label">vestiario_fem</label>
            <input type="number" name="vestiario_fem" id="vestiario_fem" class="form-control" value="{{ old('vestiario_fem') }}" required>
        </div>
        <div class="mb-3">
            <label for="vestiario_masc" class="form-label">vestiario_masc</label>
            <input type="number" name="vestiario_masc" id="vestiario_masc" class="form-control" value="{{ old('vestiario_masc') }}" required>
        </div>
        <div class="mb-3">
            <label for="tot_vestiario" class="form-label">tot_vestiario</label>
            <input type="number" name="tot_vestiario" id="tot_vestiario" class="form-control" value="{{ old('tot_vestiario') }}" required>
        </div>
        <div class="mb-3">
            <label for="videoteca" class="form-label">videoteca</label>
            <input type="number" name="videoteca" id="videoteca" class="form-control" value="{{ old('videoteca') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_tv" class="form-label">sala_tv</label>
            <input type="number" name="sala_tv" id="sala_tv" class="form-control" value="{{ old('sala_tv') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_info" class="form-label">lab_info</label>
            <input type="number" name="lab_info" id="lab_info" class="form-control" value="{{ old('lab_info') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_ciencias" class="form-label">lab_ciencias</label>
            <input type="number" name="lab_ciencias" id="lab_ciencias" class="form-control" value="{{ old('lab_ciencias') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_fisica" class="form-label">lab_fisica</label>
            <input type="number" name="lab_fisica" id="lab_fisica" class="form-control" value="{{ old('lab_fisica') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_quimica" class="form-label">lab_quimica</label>
            <input type="number" name="lab_quimica" id="lab_quimica" class="form-control" value="{{ old('lab_quimica') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_biologia" class="form-label">lab_biologia</label>
            <input type="number" name="lab_biologia" id="lab_biologia" class="form-control" value="{{ old('lab_biologia') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_ciencia_fisica_biologica" class="form-label">lab_ciencia_fisica_biologica</label>
            <input type="number" name="lab_ciencia_fisica_biologica" id="lab_ciencia_fisica_biologica" class="form-control" value="{{ old('lab_ciencia_fisica_biologica') }}" required>
        </div>
        <div class="mb-3">
            <label for="tot_lab_ciencia" class="form-label">tot_lab_ciencia</label>
            <input type="number" name="tot_lab_ciencia" id="tot_lab_ciencia" class="form-control" value="{{ old('tot_lab_ciencia') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_linguas" class="form-label">lab_linguas</label>
            <input type="number" name="lab_linguas" id="lab_linguas" class="form-control" value="{{ old('lab_linguas') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_multiuso" class="form-label">lab_multiuso</label>
            <input type="number" name="lab_multiuso" id="lab_multiuso" class="form-control" value="{{ old('lab_multiuso') }}" required>
        </div>
        <div class="mb-3">
            <label for="oficina" class="form-label">oficina</label>
            <input type="number" name="oficina" id="oficina" class="form-control" value="{{ old('oficina') }}" required>
        </div>
        <div class="mb-3">
            <label for="playground" class="form-label">playground</label>
            <input type="number" name="playground" id="playground" class="form-control" value="{{ old('playground') }}" required>
        </div>
        <div class="mb-3">
            <label for="dormitorio" class="form-label">dormitorio</label>
            <input type="number" name="dormitorio" id="dormitorio" class="form-control" value="{{ old('dormitorio') }}" required>
        </div>
        <div class="mb-3">
            <label for="bercario" class="form-label">bercario</label>
            <input type="number" name="bercario" id="bercario" class="form-control" value="{{ old('bercario') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_adeq_pre" class="form-label">sanitario_adeq_pre</label>
            <input type="number" name="sanitario_adeq_pre" id="sanitario_adeq_pre" class="form-control" value="{{ old('sanitario_adeq_pre') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_adeq_pre_fem" class="form-label">sanitario_adeq_pre_fem</label>
            <input type="number" name="sanitario_adeq_pre_fem" id="sanitario_adeq_pre_fem" class="form-control" value="{{ old('sanitario_adeq_pre_fem') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_adeq_pre_masc" class="form-label">sanitario_adeq_pre_masc</label>
            <input type="number" name="sanitario_adeq_pre_masc" id="sanitario_adeq_pre_masc" class="form-control" value="{{ old('sanitario_adeq_pre_masc') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_adeq_def" class="form-label">sanitario_adeq_def</label>
            <input type="number" name="sanitario_adeq_def" id="sanitario_adeq_def" class="form-control" value="{{ old('sanitario_adeq_def') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_adeq_def_fem" class="form-label">sanitario_adeq_def_fem</label>
            <input type="number" name="sanitario_adeq_def_fem" id="sanitario_adeq_def_fem" class="form-control" value="{{ old('sanitario_adeq_def_fem') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_adeq_def_masc" class="form-label">sanitario_adeq_def_masc</label>
            <input type="number" name="sanitario_adeq_def_masc" id="sanitario_adeq_def_masc" class="form-control" value="{{ old('sanitario_adeq_def_masc') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_al_masc" class="form-label">sanitario_al_masc</label>
            <input type="number" name="sanitario_al_masc" id="sanitario_al_masc" class="form-control" value="{{ old('sanitario_al_masc') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_al_fem" class="form-label">sanitario_al_fem</label>
            <input type="number" name="sanitario_al_fem" id="sanitario_al_fem" class="form-control" value="{{ old('sanitario_al_fem') }}" required>
        </div>
        <div class="mb-3">
            <label for="tot_sanitario_al" class="form-label">tot_sanitario_al</label>
            <input type="number" name="tot_sanitario_al" id="tot_sanitario_al" class="form-control" value="{{ old('tot_sanitario_al') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_func_fem" class="form-label">sanitario_func_fem</label>
            <input type="number" name="sanitario_func_fem" id="sanitario_func_fem" class="form-control" value="{{ old('sanitario_func_fem') }}" required>
        </div>
        <div class="mb-3">
            <label for="sanitario_func_masc" class="form-label">sanitario_func_masc</label>
            <input type="number" name="sanitario_func_masc" id="sanitario_func_masc" class="form-control" value="{{ old('sanitario_func_masc') }}" required>
        </div>
        <div class="mb-3">
            <label for="tot_sanitario_func" class="form-label">tot_sanitario_func</label>
            <input type="number" name="tot_sanitario_func" id="tot_sanitario_func" class="form-control" value="{{ old('tot_sanitario_func') }}" required>
        </div>
        <div class="mb-3">
            <label for="depend_adeq_def" class="form-label">depend_adeq_def</label>
            <input type="number" name="depend_adeq_def" id="depend_adeq_def" class="form-control" value="{{ old('depend_adeq_def') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_ed_fisica" class="form-label">sala_ed_fisica</label>
            <input type="number" name="sala_ed_fisica" id="sala_ed_fisica" class="form-control" value="{{ old('sala_ed_fisica') }}" required>
        </div>
        <div class="mb-3">
            <label for="piscina" class="form-label">piscina</label>
            <input type="number" name="piscina" id="piscina" class="form-control" value="{{ old('piscina') }}" required>
        </div>
        <div class="mb-3">
            <label for="portaria" class="form-label">portaria</label>
            <input type="number" name="portaria" id="portaria" class="form-control" value="{{ old('portaria') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_prog_esc_familia" class="form-label">sala_prog_esc_familia</label>
            <input type="number" name="sala_prog_esc_familia" id="sala_prog_esc_familia" class="form-control" value="{{ old('sala_prog_esc_familia') }}" required>
        </div>
        <div class="mb-3">
            <label for="brinquedoteca" class="form-label">brinquedoteca</label>
            <input type="number" name="brinquedoteca" id="brinquedoteca" class="form-control" value="{{ old('brinquedoteca') }}" required>
        </div>
        <div class="mb-3">
            <label for="fraldario" class="form-label">fraldario</label>
            <input type="number" name="fraldario" id="fraldario" class="form-control" value="{{ old('fraldario') }}" required>
        </div>
        <div class="mb-3">
            <label for="lactario" class="form-label">lactario</label>
            <input type="number" name="lactario" id="lactario" class="form-control" value="{{ old('lactario') }}" required>
        </div>
        <div class="mb-3">
            <label for="lavanderia" class="form-label">lavanderia</label>
            <input type="number" name="lavanderia" id="lavanderia" class="form-control" value="{{ old('lavanderia') }}" required>
        </div>
        <div class="mb-3">
            <label for="solario" class="form-label">solario</label>
            <input type="number" name="solario" id="solario" class="form-control" value="{{ old('solario') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_espera" class="form-label">sala_espera</label>
            <input type="number" name="sala_espera" id="sala_espera" class="form-control" value="{{ old('sala_espera') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_inspetor" class="form-label">sala_inspetor</label>
            <input type="number" name="sala_inspetor" id="sala_inspetor" class="form-control" value="{{ old('sala_inspetor') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_reuniao" class="form-label">sala_reuniao</label>
            <input type="number" name="sala_reuniao" id="sala_reuniao" class="form-control" value="{{ old('sala_reuniao') }}" required>
        </div>
        <div class="mb-3">
            <label for="tesouraria" class="form-label">tesouraria</label>
            <input type="number" name="tesouraria" id="tesouraria" class="form-control" value="{{ old('tesouraria') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_reforco" class="form-label">sala_reforco</label>
            <input type="number" name="sala_reforco" id="sala_reforco" class="form-control" value="{{ old('sala_reforco') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_diretor_tecnico" class="form-label">sala_diretor_tecnico</label>
            <input type="number" name="sala_diretor_tecnico" id="sala_diretor_tecnico" class="form-control" value="{{ old('sala_diretor_tecnico') }}" required>
        </div>
        <div class="mb-3">
            <label for="garagem_onibus" class="form-label">garagem_onibus</label>
            <input type="number" name="garagem_onibus" id="garagem_onibus" class="form-control" value="{{ old('garagem_onibus') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_fisioterapia" class="form-label">sala_fisioterapia</label>
            <input type="number" name="sala_fisioterapia" id="sala_fisioterapia" class="form-control" value="{{ old('sala_fisioterapia') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_psicologia" class="form-label">sala_psicologia</label>
            <input type="number" name="sala_psicologia" id="sala_psicologia" class="form-control" value="{{ old('sala_psicologia') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_fonoaudiologia" class="form-label">sala_fonoaudiologia</label>
            <input type="number" name="sala_fonoaudiologia" id="sala_fonoaudiologia" class="form-control" value="{{ old('sala_fonoaudiologia') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_eventos" class="form-label">sala_eventos</label>
            <input type="number" name="sala_eventos" id="sala_eventos" class="form-control" value="{{ old('sala_eventos') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_assist_social" class="form-label">sala_assist_social</label>
            <input type="number" name="sala_assist_social" id="sala_assist_social" class="form-control" value="{{ old('sala_assist_social') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_terapia_educ" class="form-label">sala_terapia_educ</label>
            <input type="number" name="sala_terapia_educ" id="sala_terapia_educ" class="form-control" value="{{ old('sala_terapia_educ') }}" required>
        </div>
        <div class="mb-3">
            <label for="abatedouro" class="form-label">abatedouro</label>
            <input type="number" name="abatedouro" id="abatedouro" class="form-control" value="{{ old('abatedouro') }}" required>
        </div>
        <div class="mb-3">
            <label for="alojamento_fem" class="form-label">alojamento_fem</label>
            <input type="number" name="alojamento_fem" id="alojamento_fem" class="form-control" value="{{ old('alojamento_fem') }}" required>
        </div>
        <div class="mb-3">
            <label for="alojamento_masc" class="form-label">alojamento_masc</label>
            <input type="number" name="alojamento_masc" id="alojamento_masc" class="form-control" value="{{ old('alojamento_masc') }}" required>
        </div>
        <div class="mb-3">
            <label for="tot_alojamento" class="form-label">tot_alojamento</label>
            <input type="number" name="tot_alojamento" id="tot_alojamento" class="form-control" value="{{ old('tot_alojamento') }}" required>
        </div>
        <div class="mb-3">
            <label for="area_servico" class="form-label">area_servico</label>
            <input type="number" name="area_servico" id="area_servico" class="form-control" value="{{ old('area_servico') }}" required>
        </div>
        <div class="mb-3">
            <label for="bazar" class="form-label">bazar</label>
            <input type="number" name="bazar" id="bazar" class="form-control" value="{{ old('bazar') }}" required>
        </div>
        <div class="mb-3">
            <label for="casa_maquina" class="form-label">casa_maquina</label>
            <input type="number" name="casa_maquina" id="casa_maquina" class="form-control" value="{{ old('casa_maquina') }}" required>
        </div>
        <div class="mb-3">
            <label for="casa_func" class="form-label">casa_func</label>
            <input type="number" name="casa_func" id="casa_func" class="form-control" value="{{ old('casa_func') }}" required>
        </div>
        <div class="mb-3">
            <label for="churrasqueira" class="form-label">churrasqueira</label>
            <input type="number" name="churrasqueira" id="churrasqueira" class="form-control" value="{{ old('churrasqueira') }}" required>
        </div>
        <div class="mb-3">
            <label for="depositos_cereais" class="form-label">depositos_cereais</label>
            <input type="number" name="depositos_cereais" id="depositos_cereais" class="form-control" value="{{ old('depositos_cereais') }}" required>
        </div>
        <div class="mb-3">
            <label for="elevador" class="form-label">elevador</label>
            <input type="number" name="elevador" id="elevador" class="form-control" value="{{ old('elevador') }}" required>
        </div>
        <div class="mb-3">
            <label for="estacionamento" class="form-label">estacionamento</label>
            <input type="number" name="estacionamento" id="estacionamento" class="form-control" value="{{ old('estacionamento') }}" required>
        </div>
        <div class="mb-3">
            <label for="estufa" class="form-label">estufa</label>
            <input type="number" name="estufa" id="estufa" class="form-control" value="{{ old('estufa') }}" required>
        </div>
        <div class="mb-3">
            <label for="galpao_aves_corte" class="form-label">galpao_aves_corte</label>
            <input type="number" name="galpao_aves_corte" id="galpao_aves_corte" class="form-control" value="{{ old('galpao_aves_corte') }}" required>
        </div>
        <div class="mb-3">
            <label for="galpao_aves_postura" class="form-label">galpao_aves_postura</label>
            <input type="number" name="galpao_aves_postura" id="galpao_aves_postura" class="form-control" value="{{ old('galpao_aves_postura') }}" required>
        </div>
        <div class="mb-3">
            <label for="galpao_bovinos_leite" class="form-label">galpao_bovinos_leite</label>
            <input type="number" name="galpao_bovinos_leite" id="galpao_bovinos_leite" class="form-control" value="{{ old('galpao_bovinos_leite') }}" required>
        </div>
        <div class="mb-3">
            <label for="galpao_cunicultura" class="form-label">galpao_cunicultura</label>
            <input type="number" name="galpao_cunicultura" id="galpao_cunicultura" class="form-control" value="{{ old('galpao_cunicultura') }}" required>
        </div>
        <div class="mb-3">
            <label for="galpao_maq_agricola" class="form-label">galpao_maq_agricola</label>
            <input type="number" name="galpao_maq_agricola" id="galpao_maq_agricola" class="form-control" value="{{ old('galpao_maq_agricola') }}" required>
        </div>
        <div class="mb-3">
            <label for="galpao_ovinos_caprinos" class="form-label">galpao_ovinos_caprinos</label>
            <input type="number" name="galpao_ovinos_caprinos" id="galpao_ovinos_caprinos" class="form-control" value="{{ old('galpao_ovinos_caprinos') }}" required>
        </div>
        <div class="mb-3">
            <label for="galpao_suino" class="form-label">galpao_suino</label>
            <input type="number" name="galpao_suino" id="galpao_suino" class="form-control" value="{{ old('galpao_suino') }}" required>
        </div>
        <div class="mb-3">
            <label for="grafica" class="form-label">grafica</label>
            <input type="number" name="grafica" id="grafica" class="form-control" value="{{ old('grafica') }}" required>
        </div>
        <div class="mb-3">
            <label for="horta" class="form-label">horta</label>
            <input type="number" name="horta" id="horta" class="form-control" value="{{ old('horta') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_didatica" class="form-label">lab_didatica</label>
            <input type="number" name="lab_didatica" id="lab_didatica" class="form-control" value="{{ old('lab_didatica') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_junior" class="form-label">lab_junior</label>
            <input type="number" name="lab_junior" id="lab_junior" class="form-control" value="{{ old('lab_junior') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_enfermagem" class="form-label">lab_enfermagem</label>
            <input type="number" name="lab_enfermagem" id="lab_enfermagem" class="form-control" value="{{ old('lab_enfermagem') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_estetica" class="form-label">lab_estetica</label>
            <input type="number" name="lab_estetica" id="lab_estetica" class="form-control" value="{{ old('lab_estetica') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_psicopedagogia" class="form-label">lab_psicopedagogia</label>
            <input type="number" name="lab_psicopedagogia" id="lab_psicopedagogia" class="form-control" value="{{ old('lab_psicopedagogia') }}" required>
        </div>
        <div class="mb-3">
            <label for="lab_turismo" class="form-label">lab_turismo</label>
            <input type="number" name="lab_turismo" id="lab_turismo" class="form-control" value="{{ old('lab_turismo') }}" required>
        </div>
        <div class="mb-3">
            <label for="lavatorio" class="form-label">lavatorio</label>
            <input type="number" name="lavatorio" id="lavatorio" class="form-control" value="{{ old('lavatorio') }}" required>
        </div>
        <div class="mb-3">
            <label for="mangueira" class="form-label">mangueira</label>
            <input type="number" name="mangueira" id="mangueira" class="form-control" value="{{ old('mangueira') }}" required>
        </div>
        <div class="mb-3">
            <label for="minhocario" class="form-label">minhocario</label>
            <input type="number" name="minhocario" id="minhocario" class="form-control" value="{{ old('minhocario') }}" required>
        </div>
        <div class="mb-3">
            <label for="packing_house" class="form-label">packing_house</label>
            <input type="number" name="packing_house" id="packing_house" class="form-control" value="{{ old('packing_house') }}" required>
        </div>
        <div class="mb-3">
            <label for="pomar" class="form-label">pomar</label>
            <input type="number" name="pomar" id="pomar" class="form-control" value="{{ old('pomar') }}" required>
        </div>
        <div class="mb-3">
            <label for="psicultura" class="form-label">psicultura</label>
            <input type="number" name="psicultura" id="psicultura" class="form-control" value="{{ old('psicultura') }}" required>
        </div>
        <div class="mb-3">
            <label for="recepcao" class="form-label">recepcao</label>
            <input type="number" name="recepcao" id="recepcao" class="form-control" value="{{ old('recepcao') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_atendimento" class="form-label">sala_atendimento</label>
            <input type="number" name="sala_atendimento" id="sala_atendimento" class="form-control" value="{{ old('sala_atendimento') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_atend_psicologico" class="form-label">sala_atend_psicologico</label>
            <input type="number" name="sala_atend_psicologico" id="sala_atend_psicologico" class="form-control" value="{{ old('sala_atend_psicologico') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_aux_coordenacao" class="form-label">sala_aux_coordenacao</label>
            <input type="number" name="sala_aux_coordenacao" id="sala_aux_coordenacao" class="form-control" value="{{ old('sala_aux_coordenacao') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_dados" class="form-label">sala_dados</label>
            <input type="number" name="sala_dados" id="sala_dados" class="form-control" value="{{ old('sala_dados') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_dep_pessoal" class="form-label">sala_dep_pessoal</label>
            <input type="number" name="sala_dep_pessoal" id="sala_dep_pessoal" class="form-control" value="{{ old('sala_dep_pessoal') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_ed_religiosa" class="form-label">sala_ed_religiosa</label>
            <input type="number" name="sala_ed_religiosa" id="sala_ed_religiosa" class="form-control" value="{{ old('sala_ed_religiosa') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_energia_eletrica" class="form-label">sala_energia_eletrica</label>
            <input type="number" name="sala_energia_eletrica" id="sala_energia_eletrica" class="form-control" value="{{ old('sala_energia_eletrica') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_entretenimento" class="form-label">sala_entretenimento</label>
            <input type="number" name="sala_entretenimento" id="sala_entretenimento" class="form-control" value="{{ old('sala_entretenimento') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_estagio" class="form-label">sala_estagio</label>
            <input type="number" name="sala_estagio" id="sala_estagio" class="form-control" value="{{ old('sala_estagio') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_ginastica" class="form-label">sala_ginastica</label>
            <input type="number" name="sala_ginastica" id="sala_ginastica" class="form-control" value="{{ old('sala_ginastica') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_insumo_agricola" class="form-label">sala_insumo_agricola</label>
            <input type="number" name="sala_insumo_agricola" id="sala_insumo_agricola" class="form-control" value="{{ old('sala_insumo_agricola') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_insumo_veterinario" class="form-label">sala_insumo_veterinario</label>
            <input type="number" name="sala_insumo_veterinario" id="sala_insumo_veterinario" class="form-control" value="{{ old('sala_insumo_veterinario') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_marketing" class="form-label">sala_marketing</label>
            <input type="number" name="sala_marketing" id="sala_marketing" class="form-control" value="{{ old('sala_marketing') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_matricula" class="form-label">sala_matricula</label>
            <input type="number" name="sala_matricula" id="sala_matricula" class="form-control" value="{{ old('sala_matricula') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_musica" class="form-label">sala_musica</label>
            <input type="number" name="sala_musica" id="sala_musica" class="form-control" value="{{ old('sala_musica') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_pos_graduacao" class="form-label">sala_pos_graduacao</label>
            <input type="number" name="sala_pos_graduacao" id="sala_pos_graduacao" class="form-control" value="{{ old('sala_pos_graduacao') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_ordenha" class="form-label">sala_ordenha</label>
            <input type="number" name="sala_ordenha" id="sala_ordenha" class="form-control" value="{{ old('sala_ordenha') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_proc_prod_agropecuarios" class="form-label">sala_proc_prod_agropecuarios</label>
            <input type="number" name="sala_proc_prod_agropecuarios" id="sala_proc_prod_agropecuarios" class="form-control" value="{{ old('sala_proc_prod_agropecuarios') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_seguranca" class="form-label">sala_seguranca</label>
            <input type="number" name="sala_seguranca" id="sala_seguranca" class="form-control" value="{{ old('sala_seguranca') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_telefonia" class="form-label">sala_telefonia</label>
            <input type="number" name="sala_telefonia" id="sala_telefonia" class="form-control" value="{{ old('sala_telefonia') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_financeiro" class="form-label">sala_financeiro</label>
            <input type="number" name="sala_financeiro" id="sala_financeiro" class="form-control" value="{{ old('sala_financeiro') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_pastoral" class="form-label">sala_pastoral</label>
            <input type="number" name="sala_pastoral" id="sala_pastoral" class="form-control" value="{{ old('sala_pastoral') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_reserv_agua" class="form-label">sala_reserv_agua</label>
            <input type="number" name="sala_reserv_agua" id="sala_reserv_agua" class="form-control" value="{{ old('sala_reserv_agua') }}" required>
        </div>
        <div class="mb-3">
            <label for="servidor" class="form-label">servidor</label>
            <input type="number" name="servidor" id="servidor" class="form-control" value="{{ old('servidor') }}" required>
        </div>
        <div class="mb-3">
            <label for="silo" class="form-label">silo</label>
            <input type="number" name="silo" id="silo" class="form-control" value="{{ old('silo') }}" required>
        </div>
        <div class="mb-3">
            <label for="varanda" class="form-label">varanda</label>
            <input type="number" name="varanda" id="varanda" class="form-control" value="{{ old('varanda') }}" required>
        </div>
        <div class="mb-3">
            <label for="viveiro" class="form-label">viveiro</label>
            <input type="number" name="viveiro" id="viveiro" class="form-control" value="{{ old('viveiro') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_reorg_neuro" class="form-label">sala_reorg_neuro</label>
            <input type="number" name="sala_reorg_neuro" id="sala_reorg_neuro" class="form-control" value="{{ old('sala_reorg_neuro') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_terapia_ocup" class="form-label">sala_terapia_ocup</label>
            <input type="number" name="sala_terapia_ocup" id="sala_terapia_ocup" class="form-control" value="{{ old('sala_terapia_ocup') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_serigrafia" class="form-label">sala_serigrafia</label>
            <input type="number" name="sala_serigrafia" id="sala_serigrafia" class="form-control" value="{{ old('sala_serigrafia') }}" required>
        </div>
        <div class="mb-3">
            <label for="sala_marcenaria" class="form-label">sala_marcenaria</label>
            <input type="number" name="sala_marcenaria" id="sala_marcenaria" class="form-control" value="{{ old('sala_marcenaria') }}" required>
        </div>
        <div class="mb-3">
            <label for="quiosque" class="form-label">quiosque</label>
            <input type="number" name="quiosque" id="quiosque" class="form-control" value="{{ old('quiosque') }}" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('instalacaofisica.listar') }}" class="btn btn-secondary">
                Voltar
            </a>
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
        </div>
    </form>
</div>
@endsection
