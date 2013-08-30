<?php

/**
 * Templater class.
 * 
 * @author Juan
 */
class Sanemplater {

    /* @var $basePath string */
    private $basePath="";

    /**
     * 
     * @param String $basePath ruta de la carpeta
     */
    public function __construct($basePath = "") {
        if ($basePath!="") {
            $this->basePath="$basePath/";
        }
    }

    /**
     * Genera la pagina a partir de una plantilla previamente marcada y valores 
     * para cambiar dichos marcadores
     * @param String $templateName Cadena con la ruta de la plantilla 
     * @param array $dictionary arreglo asociativo con parejas clave->valor, en
     * el que las claves son los marcadores a reemplazar por los respectivos valores
     * @return String Html listo para mostrar
     */
    public function makePage($templateName, $dictionary = "") {
        //gets the template file
        $template = file_get_contents($this->basePath.$templateName);
        
        if ($dictionary != null) {
            foreach ($dictionary as $clave => $valor) {
                $template = str_replace('<!--' . $clave . '-->', $valor, $template);
            }
        }
        return $template;
    }

}

?>
