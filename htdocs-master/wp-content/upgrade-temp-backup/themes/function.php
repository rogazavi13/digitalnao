// Filtro para agregar contenido a una página de WordPress
add_filter('the_content', 'dcms_add_custom_content');

// Agregamos contenido sólo a la página con el título "Contenido Vinos"
function dcms_add_custom_content($content){

	if ( ! is_page('cart') ) return $content;

	$html = get_data_api();
	return $content.$html;
}

// Función que se encarga de recuperar los datos de la API externa
function get_data_api(){
	$url = 'https://api.sampleapis.com/wines/reds';
	$response = wp_remote_get($url);

	if (is_wp_error($response)) {
		error_log("Error: ". $response->get_error_message());
		return false;
	}

	$body = wp_remote_retrieve_body($response);

	$data = json_decode($body);

	$template = '<table class="table-data">
					<tr>
						<th></th>
						<th>Bodega</th>
						<th>Vino</th>
						<th>Calificacion</th>
						<th>País</th>
					</tr>
					{data}
				</table>';

	if ( $data ){
		$str = '';
		foreach ($data as $wine) {
			$str .= "<tr>";
			$str .= "<td><img src='{$wine->image}' width='20'/></td>";
			$str .= "<td>{$wine->winery}</td>";
			$str .= "<td>{$wine->wine}</td>";
			$str .= "<td>{$wine->rating->average}</td>";
			$str .= "<td>{$wine->location}</td>";
			$str .= "</tr>";
		}
	}

	$html = str_replace('{data}', $str, $template);

	return $html;
}