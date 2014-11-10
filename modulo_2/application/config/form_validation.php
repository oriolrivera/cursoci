<?php
/**
 * Reglas de validacion para formularios
 */
$config = array(
	/**
	 * Agregar tipo de medicamento
	 */
	'add_type_medicament'
		=> array
        (
			
            array('field' => 'type_medicament','label' => 'Nombre','rules' => 'required|is_string|trim|xss_clean|max_length[100]'),
            array('field' => 'desc_type_medicament','label' => 'Descripción','rules' => 'required|is_string|trim|xss_clean'),
            
		),


		/**
		 * Agregar medicamento
		 */
		'add_medicament'
		=> array
        (
			
            array('field' => 'name','label' => 'Nombre','rules' => 'required|is_string|trim|xss_clean|max_length[100]'),
            array('field' => 'type','label' => 'Tipo de Medicamento','rules' => 'required|is_string|trim|xss_clean'),
            array('field' => 'desc','label' => 'Descripción','rules' => 'required|is_string|trim|xss_clean'),
            
		),
     


);
