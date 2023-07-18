<?php

include_once "./cancion.php";
include_once "./genero.php";

class mi_playlist {

    private array $listado_canciones;

public function __construct(){

    $this -> listado_canciones = array();

}
public function registrar_canciones(cancion $canciones) : void {
        $this -> listado_canciones[] = $canciones;

}

public function buscar_canciones_autor(string $autor_buscar) : void {
    
    $listado_autores = array();


    foreach($this ->listado_canciones as $autores){
        if($autores->get_autor() === $autor_buscar){
            $listado_autores = [$autores];
        }
    }
        if(empty($listado_autores)){
            echo "No hay canciones de este autor";
        }
        else {
            echo "Las canciones de este autor son:";
                foreach($listado_autores as $autores){
                    echo " ". $autores->get_nombre();
                }
        }

}

public function buscar_cancion_larga(): array  {

    //1.Para que no sea tan largo, paso la duración a segundos. 2. Creo una array que guarde si hay +1 canción con misma duración

    $cancion_b = 0;
    $canciones_largas = array();

    foreach($this ->listado_canciones as $canciones){
        $cancion_a = ($canciones-> get_duracion_minutos() * 60) + $canciones->get_duracion_segundos();
       
        if($cancion_a > $cancion_b){
            $cancion_b = $cancion_a;
            $canciones_largas = [$canciones];
        }
        else if($cancion_a === $cancion_b){
            $canciones_largas[] = $canciones;
        }

    }
    return $canciones_largas;
}

function mostrar_cancion_larga(): string {

    $listado_largas = $this->buscar_cancion_larga();

    if(!empty($listado_largas)){
        if(count($listado_largas) === 1){
            $cancion_larga = $listado_largas[0];
            return "La canción más larga es ". $cancion_larga ->get_nombre() . " de " . $cancion_larga ->get_autor() . " (". $cancion_larga ->get_duracion_minutos() . ":". $cancion_larga ->get_duracion_segundos() . ").";
        }
        else {
            return "Estas canciones tienen la misma duración: ";
            foreach($listado_largas as $canciones_largas){
                echo " ". $canciones_largas ->get_nombre() . " de " . $canciones_largas ->get_autor() . " (". $canciones_largas          ->get_duracion_minutos() . ":". $canciones_largas ->get_duracion_segundos() . ").";
            }
        }        
    }
    else {
            return  "En esta lista no hay ninguna canción.";
    
    }
}

public function clasificar(Genero $genero) : string {

    $genero_musical = array();
         
         foreach($this ->listado_canciones as $canciones) {
             if( $canciones ->get_genero() === $genero){
             $genero_musical[] = $canciones->get_nombre() . " de " . $canciones->get_autor() . ".";
             }
        }
    
         $listado_genero = implode(" <br> ", $genero_musical);
         return $listado_genero;
     }


public function busqueda_por_genero(string $genero_) : string {
    
        return match($genero_){
            "rap" => "Estas son las canciones de Rap: <br> ". $this-> clasificar(Genero::rap),
            "rock" => "Estas son las canciones de Rock: <br> ". $this->clasificar(Genero::rock),
            "pop" => "Estas son las canciones de Pop: <br> ". $this->clasificar(Genero::pop),
            "electro" => "Estas son las canciones de Electro: <br> " . $this->clasificar(Genero::electro),
            default => "No hay ninguna canción con este género"
        };

}



}
?>