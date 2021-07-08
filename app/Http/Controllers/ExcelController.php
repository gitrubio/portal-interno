<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    

    public function leerArchivo(){

        # Recomiendo poner la ruta absoluta si no está junto al script
        # Nota: no necesariamente tiene que tener la extensión XLSX
        //$rutaArchivo = "..\cumpleaniosNyN.xlsx";
        $rutaArchivo = "//192.168.1.223/Public/Tecnologia/Aplicaciones_PBMC/portal-interno/cumpleaniosNyN.xlsx";
        $documento = IOFactory::load($rutaArchivo);
        
        //return $documento;

        //$this->contarRegistros($documento);
        //return view('prueba', compact('celda'));
        
        return $documento;
    }

    //public function contarRegistros($documento){
    public function contarRegistros(){    
       
        $documento = $this->leerArchivo();
        $indice_hoja = 0;
        $hojaActual = $documento->getSheet($indice_hoja);

        $indice_fila = 1;
        $indice_columna = 1;

        $celda = $hojaActual->getCellByColumnAndRow($indice_columna, $indice_fila);
        
        while($celda != ""){
            
            //$valor_celda = $celda->getValue();
            //echo "Calculado es: <strong>$valor_celda</strong><br><br>";

            $indice_fila++;
            $celda = $hojaActual->getCellByColumnAndRow($indice_columna, $indice_fila)->getValue();

            //echo "En <strong>$indice_fila</strong> tenemos el valor <strong>$celda</strong>. ";
           
        }

        $numero_de_filas = $indice_fila - 1;

        //echo "numero de filas es: <strong>$numero_de_filas</strong><br><br>";
        return $numero_de_filas;
    }

    //public function buscarCumpleanieros($numero_de_filas, $documento){
    public function buscarCumpleanieros(){

        $documento = $this->leerArchivo();
        $numero_de_filas = $this->contarRegistros();
        //$numero_de_filas = 6;
       
        $hoja_cero = 0;
        $hojaActual = $documento->getSheet($hoja_cero);
        $mes_actual =date('m');
        $cumpleanieros = array();

        for ($i=1; $i < $numero_de_filas ; $i++) { 
           
           $celda_mes = $hojaActual->getCellByColumnAndRow(2,$i)->getValue();
           if ($celda_mes == $mes_actual) {
            
            $dia_cumple = $hojaActual->getCellByColumnAndRow(1,$i)->getValue();
            $empleado_cumple = $hojaActual->getCellByColumnAndRow(3,$i)->getValue();
            $cumpleaniero = new class{ 
                                        public $Dia;
                                        public $Empleado;
                                    };

            $cumpleaniero->Dia = $dia_cumple;
            $cumpleaniero->Empleado = $empleado_cumple;

            //$cumpleanieros[$dia_cumple] = $empleado_cumple; 
            array_push($cumpleanieros, $cumpleaniero);
            }
          
        }
        

        return $cumpleanieros;
        //return response()->json($cumpleanieros);
    }
    
    

}
