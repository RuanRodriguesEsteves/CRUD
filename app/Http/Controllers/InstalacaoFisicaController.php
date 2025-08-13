<?php

namespace App\Http\Controllers;

use App\Imports\InstalacaoFisicaImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\InstalacaoFisica;


class InstalacaoFisicaController extends Controller {

    public function iniciar() {
        return view('instalacaofisica');
        
    }

    public function importar(Request $request) {
        $request->validate([
            'arquivo' => 'required|file|mimes:csv,txt',
        ]);

        $arquivo = $request->file('arquivo');

        Excel::import(new InstalacaoFisicaImport, $arquivo);

        return back()->with('success', 'Importação realizada com sucesso!');
    }

    public function listar() {
        $dados = \App\Models\InstalacaoFisica::paginate(100);
        return view('listar', compact('dados'));
    }
    
    public function deletar($id) {
        try {
            $registro = InstalacaoFisica::findOrFail($id);
            $registro->delete();

            return redirect()->back()->with('success', 'Registro deletado com sucesso!');
        } catch (\Exception $e) {
            // Log do erro pode ser adicionado aqui se quiser: Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Erro ao deletar o registro. Tente novamente.');
        }
    }

    public function editar($id)
    {
        $registro = InstalacaoFisica::findOrFail($id);
        return view('editar', compact('registro'));
    }

    public function alterar(Request $request, $id)
    {
        $registro = InstalacaoFisica::findOrFail($id);

        // Validação (ajuste os campos conforme necessário)
        $validated = $request->validate([
            'nomedep' => 'required|string|max:255',
            'de' => 'required|string|max:255',
            'mun' => 'required|string|max:255',
            'distr' => 'required|string|max:255',
            'codesc' => 'required|string|max:255',
            'nomesc' => 'required|string|max:255',
            'tipoesc' => 'required|integer|min:0',
            'tipoesc_desc' => 'required|string|max:255',
            'codsit' => 'required|string|max:255',
            'salas_aula' => 'required|integer|min:0',
            'salas_ed_inf' => 'required|integer|min:0',
            'salas_ed_esp' => 'required|integer|min:0',
            'salas_ed_art' => 'required|integer|min:0',
            'sala_recurso' => 'required|integer|min:0',
            'tot_salas_aula' => 'required|integer|min:0',
            'auditorio' => 'required|integer|min:0',
            'anfiteatro' => 'required|integer|min:0',
            'teatro' => 'required|integer|min:0',
            'cantina' => 'required|integer|min:0',
            'copa' => 'required|integer|min:0',
            'cozinha' => 'required|integer|min:0',
            'refeitorio' => 'required|integer|min:0',
            'deposito_alimentos' => 'required|integer|min:0',
            'despensa' => 'required|integer|min:0',
            'tot_despensa' => 'required|integer|min:0',
            'sala_leitura' => 'required|integer|min:0',
            'biblioteca' => 'required|integer|min:0',
            'tot_sala_leitura' => 'required|integer|min:0',
            'quadra_coberta' => 'required|integer|min:0',
            'quadra_descoberta' => 'required|integer|min:0',
            'ginasio' => 'required|integer|min:0',
            'tot_quadra' => 'required|integer|min:0',
            'quadra_areia' => 'required|integer|min:0',
            'quadra_grama' => 'required|integer|min:0',
            'campo_futebol' => 'required|integer|min:0',
            'gabinete_dentario' => 'required|integer|min:0',
            'consultorio_medico' => 'required|integer|min:0',
            'enfermaria' => 'required|integer|min:0',
            'ambulatorio' => 'required|integer|min:0',
            'almoxarifado' => 'required|integer|min:0',
            'arquivo' => 'required|integer|min:0',
            'reprografia' => 'required|integer|min:0',
            'sala_gremio' => 'required|integer|min:0',
            'diretoria' => 'required|integer|min:0',
            'vicediretoria' => 'required|integer|min:0',
            'sala_prof' => 'required|integer|min:0',
            'secretaria' => 'required|integer|min:0',
            'sala_orient_ed' => 'required|integer|min:0',
            'sala_coord_pedag' => 'required|integer|min:0',
            'patio_coberto' => 'required|integer|min:0',
            'patio_descoberto' => 'required|integer|min:0',
            'zeladoria' => 'required|integer|min:0',
            'vestiario_fem' => 'required|integer|min:0',
            'vestiario_masc' => 'required|integer|min:0',
            'tot_vestiario' => 'required|integer|min:0',
            'videoteca' => 'required|integer|min:0',
            'sala_tv' => 'required|integer|min:0',
            'lab_info' => 'required|integer|min:0',
            'lab_ciencias' => 'required|integer|min:0',
            'lab_fisica' => 'required|integer|min:0',
            'lab_quimica' => 'required|integer|min:0',
            'lab_biologia' => 'required|integer|min:0',
            'lab_ciencia_fisica_biologica' => 'required|integer|min:0',
            'tot_lab_ciencia' => 'required|integer|min:0',
            'lab_linguas' => 'required|integer|min:0',
            'lab_multiuso' => 'required|integer|min:0',
            'oficina' => 'required|integer|min:0',
            'playground' => 'required|integer|min:0',
            'dormitorio' => 'required|integer|min:0',
            'bercario' => 'required|integer|min:0',
            'sanitario_adeq_pre' => 'required|integer|min:0',
            'sanitario_adeq_pre_fem' => 'required|integer|min:0',
            'sanitario_adeq_pre_masc' => 'required|integer|min:0',
            'sanitario_adeq_def' => 'required|integer|min:0',
            'sanitario_adeq_def_fem' => 'required|integer|min:0',
            'sanitario_adeq_def_masc' => 'required|integer|min:0',
            'sanitario_al_masc' => 'required|integer|min:0',
            'sanitario_al_fem' => 'required|integer|min:0',
            'tot_sanitario_al' => 'required|integer|min:0',
            'sanitario_func_fem' => 'required|integer|min:0',
            'sanitario_func_masc' => 'required|integer|min:0',
            'tot_sanitario_func' => 'required|integer|min:0',
            'depend_adeq_def' => 'required|integer|min:0',
            'sala_ed_fisica' => 'required|integer|min:0',
            'piscina' => 'required|integer|min:0',
            'portaria' => 'required|integer|min:0',
            'sala_prog_esc_familia' => 'required|integer|min:0',
            'brinquedoteca' => 'required|integer|min:0',
            'fraldario' => 'required|integer|min:0',
            'lactario' => 'required|integer|min:0',
            'lavanderia' => 'required|integer|min:0',
            'solario' => 'required|integer|min:0',
            'sala_espera' => 'required|integer|min:0',
            'sala_inspetor' => 'required|integer|min:0',
            'sala_reuniao' => 'required|integer|min:0',
            'tesouraria' => 'required|integer|min:0',
            'sala_reforco' => 'required|integer|min:0',
            'sala_diretor_tecnico' => 'required|integer|min:0',
            'garagem_onibus' => 'required|integer|min:0',
            'sala_fisioterapia' => 'required|integer|min:0',
            'sala_psicologia' => 'required|integer|min:0',
            'sala_fonoaudiologia' => 'required|integer|min:0',
            'sala_eventos' => 'required|integer|min:0',
            'sala_assist_social' => 'required|integer|min:0',
            'sala_terapia_educ' => 'required|integer|min:0',
            'abatedouro' => 'required|integer|min:0',
            'alojamento_fem' => 'required|integer|min:0',
            'alojamento_masc' => 'required|integer|min:0',
            'tot_alojamento' => 'required|integer|min:0',
            'area_servico' => 'required|integer|min:0',
            'bazar' => 'required|integer|min:0',
            'casa_maquina' => 'required|integer|min:0',
            'casa_func' => 'required|integer|min:0',
            'churrasqueira' => 'required|integer|min:0',
            'depositos_cereais' => 'required|integer|min:0',
            'elevador' => 'required|integer|min:0',
            'estacionamento' => 'required|integer|min:0',
            'estufa' => 'required|integer|min:0',
            'galpao_aves_corte' => 'required|integer|min:0',
            'galpao_aves_postura' => 'required|integer|min:0',
            'galpao_bovinos_leite' => 'required|integer|min:0',
            'galpao_cunicultura' => 'required|integer|min:0',
            'galpao_maq_agricola' => 'required|integer|min:0',
            'galpao_ovinos_caprinos' => 'required|integer|min:0',
            'galpao_suino' => 'required|integer|min:0',
            'grafica' => 'required|integer|min:0',
            'horta' => 'required|integer|min:0',
            'lab_didatica' => 'required|integer|min:0',
            'lab_junior' => 'required|integer|min:0',
            'lab_enfermagem' => 'required|integer|min:0',
            'lab_estetica' => 'required|integer|min:0',
            'lab_psicopedagogia' => 'required|integer|min:0',
            'lab_turismo' => 'required|integer|min:0',
            'lavatorio' => 'required|integer|min:0',
            'mangueira' => 'required|integer|min:0',
            'minhocario' => 'required|integer|min:0',
            'packing_house' => 'required|integer|min:0',
            'pomar' => 'required|integer|min:0',
            'psicultura' => 'required|integer|min:0',
            'recepcao' => 'required|integer|min:0',
            'sala_atendimento' => 'required|integer|min:0',
            'sala_atend_psicologico' => 'required|integer|min:0',
            'sala_aux_coordenacao' => 'required|integer|min:0',
            'sala_dados' => 'required|integer|min:0',
            'sala_dep_pessoal' => 'required|integer|min:0',
            'sala_ed_religiosa' => 'required|integer|min:0',
            'sala_energia_eletrica' => 'required|integer|min:0',
            'sala_entretenimento' => 'required|integer|min:0',
            'sala_estagio' => 'required|integer|min:0',
            'sala_ginastica' => 'required|integer|min:0',
            'sala_insumo_agricola' => 'required|integer|min:0',
            'sala_insumo_veterinario' => 'required|integer|min:0',
            'sala_marketing' => 'required|integer|min:0',
            'sala_matricula' => 'required|integer|min:0',
            'sala_musica' => 'required|integer|min:0',
            'sala_pos_graduacao' => 'required|integer|min:0',
            'sala_ordenha' => 'required|integer|min:0',
            'sala_proc_prod_agropecuarios' => 'required|integer|min:0',
            'sala_seguranca' => 'required|integer|min:0',
            'sala_telefonia' => 'required|integer|min:0',
            'sala_financeiro' => 'required|integer|min:0',
            'sala_pastoral' => 'required|integer|min:0',
            'sala_reserv_agua' => 'required|integer|min:0',
            'servidor' => 'required|integer|min:0',
            'silo' => 'required|integer|min:0',
            'varanda' => 'required|integer|min:0',
            'viveiro' => 'required|integer|min:0',
            'sala_reorg_neuro' => 'required|integer|min:0',
            'sala_terapia_ocup' => 'required|integer|min:0',
            'sala_serigrafia' => 'required|integer|min:0',
            'sala_marcenaria' => 'required|integer|min:0',
            'quiosque' => 'required|integer|min:0'
        ]);

        // Atualiza os dados
        $registro->update($validated);

        return redirect()->route('instalacaofisica.listar')
            ->with('success', 'Registro atualizado com sucesso!');
    }

}

?>