<?php

/*
Plugin Name: WooCommerce – Comunas para Santiago de Chile
Description: A short plugin that adds current Municipies of Santiago de Chile to WooCommerce's list of states.
Version: 0.1
Author: Pablo Anttila
Author URI: http://www.clickyeah.cl
*/

/**
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

function  wc_cl_comunas_de_santiago( $states ) {

    $states['SCL'] = array(
                            'CE' => 'Cerrillos',
                            'LR' => 'La Reina',
                            'PU' => 'Pudahuel',
                            'CN' => 'Cerro Navia',
                            'LC' => 'Las Condes',
                            'QU' => 'Quilicura',
                            'CO' => 'Conchalí',
                            'LB' => 'Lo Barnechea',
                            'QN' => 'Quinta Normal',
                            'BQ' => 'El Bosque',
                            'LE' => 'Lo Espejo',
                            'RA' => 'Recoleta',
                            'EC' => 'Estación Central',
                            'LP' => 'Lo Prado',
                            'RE' => 'Renca',
                            'HU' => 'Huechuraba',
                            'ML' => 'Macul',
                            'SM' => 'San Miguel',
                            'IN' => 'Independencia',
                            'MU' => 'Maipú',
                            'SJ' => 'San Joaquín',
                            'CI' => 'La Cisterna',
                            'NN' => 'Ñuñoa',
                            'SR' => 'San Ramón',
                            'FL' => 'La Florida',
                            'AG' => 'Pedro Aguirre Cerda',
                            'SA' => 'Santiago',
                            'PI' => 'La Pintana',
                            'PE' => 'Peñalolén',
                            'VI' => 'Vitacura',
                            'GR' => 'La Granja',
                            'PR' => 'Providencia',
                            'LA' => 'Lampa',
							
                           );
    return $states;

}							

/**
 * Source: Wikipedia, Es
 * https://es.wikipedia.org/wiki/Anexo:Comunas_de_Santiago_de_Chile#Lista_de_comunas
 * 
     Cerrillos
     La Reina
     Pudahuel
     Cerro Navia
     Las Condes
     Quilicura
     Conchalí
     Lo Barnechea
     Quinta Normal
     El Bosque
     Lo Espejo
     Recoleta
     Estación Central
     Lo Prado
     Renca
     Huechuraba
     Macul
     San Miguel
     Independencia
     Maipú
     San Joaquín
     La Cisterna
     Ñuñoa
     San Ramón
     La Florida
     Pedro Aguirre Cerd
     Santiago
     La Pintana
     Peñalolén
     Vitacura
     La Granja
     Providencia
     Lampa
  *
  */

add_filter( 'woocommerce_states', ' wc_cl_comunas_de_santiago' );
