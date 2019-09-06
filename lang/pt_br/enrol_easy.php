<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Allows course enrolment via a simple text code.
 *
 * @package   enrol_easy
 * @copyright 2017 Dearborn Public Schools
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$string['pluginname'] = 'Easy enrollments';
$string['pluginname_desc'] = 'Permite inscrição simplificada apartir de um código de texto';

$string['enrolform_course_code'] = 'Código de inscrição';
$string['enrolform_submit'] = 'Increver-se';
$string['enrolform_heading'] = 'Increver-se em um curso';
$string['enrolform_pagetitle'] = 'Increver-se em um curso';

$string['header_coursecodes'] = 'Código de inscrição';

$string['status'] = 'Ativado';
$string['status_help'] = 'Selecione "Sim" para habilitar a inscrição. Selecione "Não" para desativar a inscrição.';
$string['enrolstartdate'] = 'Inscrição ativada';
$string['enrolstartdate_help'] = 'Não é possivel se inscrever antes desta data.';

$string['enrolenddate'] = 'Inscrição desativada';
$string['enrolenddate_help'] = 'Não é possivel se inscrever depois desta data.';

$string['regenerate_codes'] = 'Recriar códigos';
$string['regenerate_codes_help'] = 'Marque esta opção e clique em "Salvar alterações" para recriar todos os códigos de inscrição acima.';

$string['number_of_codes'] = 'Número do código';
$string['number_of_codes_help'] = 'Insira o número de códigos de string que você deseja gerar';

$string['qrenabled'] = 'Permitir inscrição via QR Code';
$string['qrenableddesc'] = 'Permitir inscrição via QR Code';

$string['easy:unenrolself'] = 'Cancelar a inscriçao deste curso';
$string['easy:config'] = 'Configurar as instâncias de inscrição fácil';
$string['easy:delete'] = 'Excluir as instâcias de inscrição fácil';
$string['easy:manage'] = 'Administração das instâncias de inscrição fácil';
$string['easy:unenrol'] = 'Cancelar a inscrição das instâncias de inscrição fácil';
$string['unenrolselfconfirm'] = 'Você realmente quer sair do curso "{$a}"?';

$string['error_disabled_global'] = 'A inscrição fácil está desativada para toda a página.';
$string['error_disabled_global'] = 'A inscriçãofácil está desativada para este curso.';
$string['error_enrolstartdate'] = 'A inscrição para este curso ainda não começou.';
$string['error_enrolenddate'] = 'A inscrição para este curso foi encerrada.';
$string['error_invalid_code'] = 'Código de inscrição inválido.';
$string['error_code_used'] = 'Código já usado.';
