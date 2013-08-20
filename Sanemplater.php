<?php

/**
 * Templater class.
 * 
 * @author Juan
 */
class Sanemplater {

    private $basePath;

    /**
     * 
     * @param String $basePath
     */
    public function __construct($basePath = "") {
        $this->basePath = $basePath;
    }
    
    /**
     * Genera la pagina a partir de una plantilla previamente marcada y valores 
     * para cambiar dichos marcadores
     * @param String $nameFile Cadena con la ruta de la plantilla 
     * @param array $dictionary arreglo asociativo con parejas clave->valor, en
     * el que las claves son los marcadores a reemplazar por los respectivos valores
     * @return String Html listo para mostrar
     */
    public function makePage($nameFile,$dictionary=""){
        $plantilla = file_get_contents($nameFile);
        if ($dictionary != null) {
            foreach ($dictionary as $clave => $valor) {
                $plantilla = str_replace('<!--' . $clave . '-->', $valor, $plantilla);
            }
        }
        return $plantilla;
        
    }

}

?>
