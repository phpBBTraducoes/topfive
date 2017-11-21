<?php
/**
*
* topfive [Brazilian Portuguese [pt_br]]
*
* @package language Top Five
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.1.1] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'TF_ACTIVE'		=> 'Ativar',
	'TF_AVATARS'	=> 'Avatars',
	'TF_AVATARS_EXPLAIN'	=> 'Escolha sim ou não para exibir os avatares dos usuários',
	'TF_TITLE'		=> 'Configurações da extensão Top Five',
	'TOPFIVE_MOD'	=> 'Top Five',
	'TF_CONFIG'		=> 'Configurações',
	'TF_SAVED'		=> 'Alterações salvas',
	'TF_HOWMANY'	=> 'Quantos',
	'TF_EXCLUDED'	=> 'Fóruns excluídos',
	'TF_EXCLUDED_EXPLAIN'	=> 'Use CTRL/CMD e clique com o mouse para escolher ou abrir vários fóruns<br><em>Se você não deseja excluir um fórum, não selecione nenhum ou desmarque os que você escolheu</em >',

	'TF_HOWMANY_EXPLAIN'	=> 'Quantos você gostaria de exibir? O mínimo necessário é 5, o máximo é 100',
	'TF_IGNORE_USERS'		=> 'Ignorar usuários inativos',
	'TF_IGNORE_USERS_EXPLAIN'	=> 'Excluirá os usuários inativos da exibição nos melhores postadores e usuários novos',
	'TF_IGNORE_FOUNDER'		=> 'Ignorar Fundador(es)',
	'TF_IGNORE_FOUNDER_EXPLAIN'	=> 'Excluirá os fundadores da exibição nos melhores postadores e usuários novos',
	'TF_LOCATION'	=> 'Localização no fórum',
	'TF_LOCATION_EXPLAIN'	=> 'Onde você deseja que o mod seja exibido na página de índice',
	'TF_SHOW_ADMINS_MODS'	=> 'Incluir Admins e Mods',
	'TF_SHOW_ADMINS_MODS_EXPLAIN'	=> 'Exibirá administradores e mods nos melhores postadores',
	'TOO_SMALL_TOP_FIVE_HOW_MANY'	=> 'O número para exibir o valor é muito pequeno.',
	'TOO_LARGE_TOP_FIVE_HOW_MANY'	=> 'O número para exibir o valor é muito grande.',
	'TOP_OF_FORUM'	=> 'Topo do Forum',
	'BOTTOM_OF_FORUM'	=> 'Inferior do Forum',
));
