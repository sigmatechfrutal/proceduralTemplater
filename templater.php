function templater($pagina, $dados){
    ob_start();
    include $pagina;
    $template = ob_get_clean();
    
    foreach ($dados as $key => $value) {
        $template = str_replace($key, $value, $template);
    }    
    
    return $template;
}
