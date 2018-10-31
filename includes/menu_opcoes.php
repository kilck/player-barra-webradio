<?php

function pagina_opcoes_frontend(){
  require_once(DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/templates/pagina-opcoes.php');
}

function registro_pagina_opcoes(){
  add_options_page( 'Player Barra WebRadio Opcões', 'Player Barra Opções', 'manage_options', 'Player Barra', 'pagina_opcoes_frontend');
}
add_action('admin_menu','registro_pagina_opcoes');

function carregando_settings_api(){
  register_setting('playerbarra_opcoes', 'playerbarra_op');
}
add_action('admin_init','carregando_settings_api');