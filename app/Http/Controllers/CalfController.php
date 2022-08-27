<?php

namespace App\Http\Controllers;

class CalfController extends Controller
{
    /**
     * Obtener clasificación de la cría.
     * @param double $weight Peso de la cría.
     * @param integer $muscleColor Color musculo de la cría.
     * @param integer $marbling Marmoleo calidad de la cría.
     *
     * @return integer $meatType Tipo de clasificacion de carne.
     */
    public static function getMeatClassification($weight, $muscleColor, $marbling)
    {
        $meatType = 0;
        // Clasificación de carne GRASA TIPO 1.
        if ($weight >= 15 && $weight <= 25 && $muscleColor >= 3 && $muscleColor <= 5 && $marbling <= 2) {
            $meatType = 1;
            return $meatType;
        }

        // Clasificación de carne GRASA TIPO 2.
        $meatType = 2;
        return $meatType;
    }

    /**
     * Verificar que la cria este saludable.
     * @param double $temperature Temperatura de la cría.
     * @param integer $heartRate Frecuencia cardiaca de la cría.
     * @param integer $breathingRate Frecuencia respiratoria de la cría.
     * @param integer $bloodRate Frecuencia sanguinea de la cría.
     *
     * @return boolean.
     */
    public static function isCalfHealthy($temperature, $heartRate, $breathingRate, $bloodRate)
    {
        if ($temperature >= 37.5 && $temperature <= 39.5 && $heartRate >= 70 && $heartRate <= 80 && $breathingRate >= 15 && $breathingRate <= 20 && $bloodRate >= 8 && $bloodRate <= 10) {
            return true;
        }

        return false;
    }
}
