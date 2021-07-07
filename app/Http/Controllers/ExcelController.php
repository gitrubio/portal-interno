<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    
    public function leerArchivo(){

        # Recomiendo poner la ruta absoluta si no está junto al script
        # Nota: no necesariamente tiene que tener la extensión XLSX
        $rutaArchivo = "..\cumpleaniosNyN.xlsx";
        $documento = IOFactory::load($rutaArchivo);
        
        //return $documento;

        $this->contarRegistros($documento);
        return view('prueba', compact('celda'));

    }

    public function contarRegistros($documento){

        $indice_hoja = 0;
        $hojaActual = $documento->getSheet($indice_hoja);

        $indice_fila = 1;
        $indice_columna =1;

        $celda = $hojaActual->getCellByColumnAndRow($indice_columna, $indice_fila);
        
        while($celda != ""){
            
            //$valor_celda = $celda->getValue();
            //echo "Calculado es: <strong>$valor_celda</strong><br><br>";

            $indice_fila++;
            $celda = $hojaActual->getCellByColumnAndRow($indice_columna, $indice_fila)->getValue();
        }

        $numero_de_filas = $indice_fila - 1;

        //echo "numero de filas es: <strong>$numero_de_filas</strong><br><br>";
        return $numero_de_filas;
    }

    public function buscarCumpleanieros($numero_de_filas, $documento){
      
        $indice_hoja = 0;
        $hojaActual = $documento->getSheet($indice_hoja);
        $mes_actual =date('m');
        for ($i=1; $i <$numero_de_filas ; $i++) { 
           $celda = $hojaActual->getCellByColumnAndRow(2,$i)->getValue();
           if ($celda ==$mes_actual) {
               
           }
        }
        


    }


}
