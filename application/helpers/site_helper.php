<?php

/**
 * @return mixed
 */
function Distributers() {
	$distributerArray = array('0' => 'grupo saesa', '22' => 'frontel', '23' => 'saesa', '39' => 'luz-osorno', '24' => 'edelaysen');

	return $distributerArray;
}

/**
 * @param $selected
 */
function distributer_selectList($selected = '') {
	if (count(Distributers()) > 0):
		foreach (Distributers() as $distributers_key => $distributers_value):
			if ($distributers_key != 0): ?>
        <option value="<?php echo $distributers_key; ?>" <?php echo (isset($selected) && $selected == $distributers_value) ? 'selected' : ''; ?> ><?php echo ucfirst($distributers_value); ?></option>
    	<?php
	endif;
	endforeach;
	endif;
}

/**
 * @param $url
 * @return mixed
 */
function distributer_url($url) {
	$uri_path     = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$uri_segments = explode('/', $uri_path);

	$return_url = '';
	if (in_array($uri_segments[1], array_values(Distributers()))) {
		$return_url .= base_url($uri_segments[1] . '/' . $url);
	} else {
		$return_url .= base_url('/' . $url);
	}

	return $return_url;
}

/**
 * [comuna]
 * @return [type] complete array of comuna
 */
function comuna() {
	$arrComuna = array(
		''  => 'Todas las comuna',
		1   => 'ALTO BIOBÍO',
		97  => 'ANCUD',
		39  => 'ANGOL',
		17  => 'ANTUCO',
		33  => 'ARAUCO',
		111 => 'AYSÉN',
		11  => 'BULNES',
		15  => 'CABRERO',
		90  => 'CALBUCO',
		36  => 'CAÑETE',
		64  => 'CARAHUE',
		96  => 'CASTRO',
		106 => 'CHAITÉN',
		113 => 'CHILE CHICO',
		13  => 'CHILLAN',
		3   => 'CHOLCHOL',
		103 => 'CHONCHI',
		89  => 'COCHAMÓ',
		115 => 'COCHRANE',
		41  => 'COLLIPULLI',
		37  => 'CONTULMO',
		31  => 'CORONEL',
		73  => 'CORRAL',
		110 => 'COYHAIQUE',
		54  => 'CUNCO',
		43  => 'CURACAUTÍN',
		100 => 'CURACO DE VÉLEZ',
		34  => 'CURANILAHUE',
		99  => 'DALCAHUE',
		8   => 'EL CARMEN',
		44  => 'ERCILLA',
		27  => 'FLORIDA',
		57  => 'FREIRE',
		93  => 'FRESIA',
		95  => 'FRUTILLAR',
		108 => 'FUTALEUFÚ',
		72  => 'FUTRONO',
		66  => 'GALVARINO',
		59  => 'GORBEA',
		107 => 'HUALAIHUÉ',
		28  => 'HUALQUI',
		76  => 'LA UNIÓN',
		79  => 'LAGO RANCO',
		4   => 'LAGO VERDE',
		24  => 'LAJA',
		70  => 'LANCO',
		51  => 'LAUTARO',
		32  => 'LEBU',
		94  => 'LLANQUIHUE',
		60  => 'LONCOCHE',
		42  => 'LONQUIMAY',
		35  => 'LOS ÁLAMOS',
		14  => 'LOS ÁNGELES',
		71  => 'LOS LAGOS',
		92  => 'LOS MUERMOS',
		49  => 'LOS SAUCES',
		30  => 'LOTA',
		47  => 'LUMACO',
		74  => 'MÁFIL',
		69  => 'MARIQUINA',
		91  => 'MAULLÍN',
		55  => 'MELIPEUCO',
		21  => 'MULCHÉN',
		23  => 'NACIMIENTO',
		22  => 'NEGRETE',
		65  => 'NUEVA IMPERIAL',
		5   => 'OHIGGINIS',
		80  => 'OSORNO',
		67  => 'PADRE LAS CASAS',
		77  => 'PAILLACO',
		109 => 'PALENA',
		75  => 'PANGUIPULLI',
		10  => 'PEMUCO',
		52  => 'PERQUENCO',
		6   => 'PINTO',
		58  => 'PITRUFQUÉN',
		112 => 'PUERTO CISNES',
		87  => 'PUERTO MONTT',
		83  => 'PUERTO OCTAY',
		63  => 'PUERTO SAAVEDRA',
		88  => 'PUERTO VARAS',
		102 => 'PUQUELDÓN',
		48  => 'PURÉN',
		84  => 'PURRANQUE',
		82  => 'PUYEHUE',
		104 => 'QUEILÉN',
		105 => 'QUELLÓN',
		98  => 'QUEMCHI',
		20  => 'QUILACO',
		18  => 'QUILLECO',
		12  => 'QUILLÓN',
		101 => 'QUINCHAO',
		2   => 'RANQUIL',
		40  => 'RENAICO',
		78  => 'RÍO BUENO',
		114 => 'RÍO IBÁÑEZ',
		85  => 'RÍO NEGRO',
		7   => 'SAN IGNACIO',
		86  => 'SAN JUAN DE LA COSTA',
		81  => 'SAN PABLO',
		25  => 'SAN ROSENDO',
		19  => 'SANTA BÁRBARA',
		29  => 'SANTA JUANA',
		50  => 'TEMUCO',
		62  => 'TEODORO SCHMIDT',
		38  => 'TIRÚA',
		61  => 'TOLTÉN',
		46  => 'TRAIGUÉN',
		16  => 'TUCAPEL',
		68  => 'VALDIVIA',
		45  => 'VICTORIA',
		53  => 'VILCÚN',
		56  => 'VILLARRICA',
		26  => 'YUMBEL',
		9   => 'YUNGAY',
	);

	return $arrComuna;
}

/**
 * @param $selected
 * @return  option list of comuna array
 */
function comuna_selectList($selected = '') {
	if (count(comuna()) > 0):
		foreach (comuna() as $comuna_key => $comuna_value):
			// if ($comuna_key != 0): 
			?>
	        <option value="<?php echo $comuna_key; ?>" <?php echo (isset($selected) && $selected == $comuna_value) ? 'selected' : ''; ?> ><?php echo ucfirst($comuna_value); ?></option>
			<?php
			// endif;
	endforeach;
	endif;
}

/**
 * @return mixed
 */
function client_percentage() {

	$arrClientPercentage = array(
		0   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8102', 'COMUNA' => 'Coronel', 'CLIENTES' => '253'),
		1   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8104', 'COMUNA' => 'Florida', 'CLIENTES' => '2876'),
		2   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8105', 'COMUNA' => 'Hualqui', 'CLIENTES' => '1896'),
		3   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8106', 'COMUNA' => 'Lota', 'CLIENTES' => '15793'),
		4   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8109', 'COMUNA' => 'Santa Juana', 'CLIENTES' => '6461'),
		5   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8111', 'COMUNA' => 'Tomé', 'CLIENTES' => '72'),
		6   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8201', 'COMUNA' => 'Lebu', 'CLIENTES' => '9570'),
		7   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8202', 'COMUNA' => 'Arauco', 'CLIENTES' => '14892'),
		8   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8203', 'COMUNA' => 'Cañete', 'CLIENTES' => '13900'),
		9   => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8204', 'COMUNA' => 'Contulmo', 'CLIENTES' => '2534'),
		10  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8205', 'COMUNA' => 'Curanilahue', 'CLIENTES' => '11147'),
		11  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8206', 'COMUNA' => 'Los Alamos', 'CLIENTES' => '8276'),
		12  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8207', 'COMUNA' => 'Tirúa', 'CLIENTES' => '3706'),
		13  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8301', 'COMUNA' => 'Los Ángeles', 'CLIENTES' => '1982'),
		14  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8302', 'COMUNA' => 'Antuco', 'CLIENTES' => '1949'),
		15  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8303', 'COMUNA' => 'Cabrero', 'CLIENTES' => '7563'),
		16  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8304', 'COMUNA' => 'Laja', 'CLIENTES' => '9078'),
		17  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8305', 'COMUNA' => 'Mulchén', 'CLIENTES' => '10751'),
		18  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8306', 'COMUNA' => 'Nacimiento', 'CLIENTES' => '10205'),
		19  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8307', 'COMUNA' => 'Negrete', 'CLIENTES' => '3754'),
		20  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8308', 'COMUNA' => 'Quilaco', 'CLIENTES' => '1851'),
		21  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8309', 'COMUNA' => 'Quilleco', 'CLIENTES' => '2238'),
		22  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8310', 'COMUNA' => 'San Rosendo', 'CLIENTES' => '1496'),
		23  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8311', 'COMUNA' => 'Santa Barbara', 'CLIENTES' => '3472'),
		24  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8312', 'COMUNA' => 'Tucapel', 'CLIENTES' => '6015'),
		25  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8313', 'COMUNA' => 'Yumbel', 'CLIENTES' => '6936'),
		26  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '8314', 'COMUNA' => 'Alto Biobio', 'CLIENTES' => '642'),
		27  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9101', 'COMUNA' => 'Temuco', 'CLIENTES' => '5491'),
		28  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9102', 'COMUNA' => 'Carahue', 'CLIENTES' => '9613'),
		29  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9103', 'COMUNA' => 'Cunco', 'CLIENTES' => '7853'),
		30  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9105', 'COMUNA' => 'Freire', 'CLIENTES' => '7432'),
		31  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9106', 'COMUNA' => 'Galvarino', 'CLIENTES' => '3615'),
		32  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9107', 'COMUNA' => 'Gorbea', 'CLIENTES' => '4647'),
		33  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9108', 'COMUNA' => 'Lautaro', 'CLIENTES' => '11004'),
		34  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9110', 'COMUNA' => 'Melipeuco', 'CLIENTES' => '2535'),
		35  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9111', 'COMUNA' => 'Nueva Imperial', 'CLIENTES' => '11763'),
		36  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9112', 'COMUNA' => 'Padre Las Casas', 'CLIENTES' => '2303'),
		37  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9113', 'COMUNA' => 'Perquenco', 'CLIENTES' => '2484'),
		38  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9114', 'COMUNA' => 'Pitrufquén', 'CLIENTES' => '3172'),
		39  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9116', 'COMUNA' => 'Saavedra', 'CLIENTES' => '4499'),
		40  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9117', 'COMUNA' => 'Teodoro Schmidt', 'CLIENTES' => '6299'),
		41  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9118', 'COMUNA' => 'Toltén', 'CLIENTES' => '3637'),
		42  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9119', 'COMUNA' => 'Vilcún', 'CLIENTES' => '6840'),
		43  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9120', 'COMUNA' => 'Villarrica', 'CLIENTES' => '184'),
		44  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9121', 'COMUNA' => 'Cholchol', 'CLIENTES' => '4204'),
		45  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9201', 'COMUNA' => 'Angol', 'CLIENTES' => '20733'),
		46  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9202', 'COMUNA' => 'Collipulli', 'CLIENTES' => '9247'),
		47  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9203', 'COMUNA' => 'Curacautín', 'CLIENTES' => '8062'),
		48  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9204', 'COMUNA' => 'Ercilla', 'CLIENTES' => '2679'),
		49  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9205', 'COMUNA' => 'Lonquimay', 'CLIENTES' => '4309'),
		50  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9206', 'COMUNA' => 'Los Sauces', 'CLIENTES' => '2964'),
		51  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9207', 'COMUNA' => 'Lumaco', 'CLIENTES' => '3134'),
		52  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9208', 'COMUNA' => 'Purén', 'CLIENTES' => '4912'),
		53  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9209', 'COMUNA' => 'Renaico', 'CLIENTES' => '3838'),
		54  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9210', 'COMUNA' => 'Traiguén', 'CLIENTES' => '7650'),
		55  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '9211', 'COMUNA' => 'Victoria', 'CLIENTES' => '11940'),
		56  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '16102', 'COMUNA' => 'Bulnes', 'CLIENTES' => '5307'),
		57  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '16103', 'COMUNA' => 'Chillán Viejo', 'CLIENTES' => '8'),
		58  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '16104', 'COMUNA' => 'El Carmen', 'CLIENTES' => '4010'),
		59  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '16105', 'COMUNA' => 'Pemuco', 'CLIENTES' => '2369'),
		60  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '16106', 'COMUNA' => 'Pinto', 'CLIENTES' => '35'),
		61  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '16107', 'COMUNA' => 'Quillón', 'CLIENTES' => '4492'),
		62  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '16108', 'COMUNA' => 'San Ignacio', 'CLIENTES' => '3714'),
		63  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '16109', 'COMUNA' => 'Yungay', 'CLIENTES' => '5319'),
		64  => array('EMPRESA_ID' => '22', 'COMUNA_ID' => '16206', 'COMUNA' => 'Ránquil', 'CLIENTES' => '12'),
		65  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '2104', 'COMUNA' => 'Taltal', 'CLIENTES' => '1'),
		66  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '9107', 'COMUNA' => 'Gorbea', 'CLIENTES' => '933'),
		67  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '9109', 'COMUNA' => 'Loncoche', 'CLIENTES' => '8612'),
		68  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '9118', 'COMUNA' => 'Toltén', 'CLIENTES' => '1758'),
		69  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '9120', 'COMUNA' => 'Villarrica', 'CLIENTES' => '6284'),
		70  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10101', 'COMUNA' => 'Puerto Montt', 'CLIENTES' => '84642'),
		71  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10102', 'COMUNA' => 'Calbuco', 'CLIENTES' => '13174'),
		72  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10103', 'COMUNA' => 'Cochamó', 'CLIENTES' => '1563'),
		73  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10104', 'COMUNA' => 'Fresia', 'CLIENTES' => '2905'),
		74  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10105', 'COMUNA' => 'Frutillar', 'CLIENTES' => '7113'),
		75  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10106', 'COMUNA' => 'Los Muermos', 'CLIENTES' => '4549'),
		76  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10107', 'COMUNA' => 'Llanquihue', 'CLIENTES' => '5212'),
		77  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10108', 'COMUNA' => 'Maullín', 'CLIENTES' => '6028'),
		78  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10109', 'COMUNA' => 'Puerto Varas', 'CLIENTES' => '13994'),
		79  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10201', 'COMUNA' => 'Castro', 'CLIENTES' => '20949'),
		80  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10202', 'COMUNA' => 'Ancud', 'CLIENTES' => '18657'),
		81  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10203', 'COMUNA' => 'Chonchi', 'CLIENTES' => '6558'),
		82  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10204', 'COMUNA' => 'Curaco de Vélez', 'CLIENTES' => '2021'),
		83  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10205', 'COMUNA' => 'Dalcahue', 'CLIENTES' => '6721'),
		84  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10206', 'COMUNA' => 'Puqueldón', 'CLIENTES' => '1870'),
		85  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10207', 'COMUNA' => 'Queilén', 'CLIENTES' => '2681'),
		86  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10208', 'COMUNA' => 'Quellón', 'CLIENTES' => '10304'),
		87  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10209', 'COMUNA' => 'Quemchi', 'CLIENTES' => '3254'),
		88  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10210', 'COMUNA' => 'Quinchao', 'CLIENTES' => '2616'),
		89  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10301', 'COMUNA' => 'Osorno', 'CLIENTES' => '62059'),
		90  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10302', 'COMUNA' => 'Puerto Octay', 'CLIENTES' => '924'),
		91  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10303', 'COMUNA' => 'Purranque', 'CLIENTES' => '5258'),
		92  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10304', 'COMUNA' => 'Puyehue', 'CLIENTES' => '317'),
		93  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10305', 'COMUNA' => 'Río Negro', 'CLIENTES' => '3554'),
		94  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10306', 'COMUNA' => 'San Juan de la Costa', 'CLIENTES' => '831'),
		95  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10307', 'COMUNA' => 'San Pablo', 'CLIENTES' => '1528'),
		96  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '10403', 'COMUNA' => 'Hualaihué', 'CLIENTES' => '3927'),
		97  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14101', 'COMUNA' => 'Valdivia', 'CLIENTES' => '63951'),
		98  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14102', 'COMUNA' => 'Corral', 'CLIENTES' => '2487'),
		99  => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14103', 'COMUNA' => 'Lanco', 'CLIENTES' => '7078'),
		100 => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14104', 'COMUNA' => 'Los Lagos', 'CLIENTES' => '4997'),
		101 => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14105', 'COMUNA' => 'Máfil', 'CLIENTES' => '2225'),
		102 => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14106', 'COMUNA' => 'Mariquina', 'CLIENTES' => '7833'),
		103 => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14107', 'COMUNA' => 'Paillaco', 'CLIENTES' => '5058'),
		104 => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14108', 'COMUNA' => 'Panguipullí', 'CLIENTES' => '15751'),
		105 => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14201', 'COMUNA' => 'La Unión', 'CLIENTES' => '11754'),
		106 => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14202', 'COMUNA' => 'Futrono', 'CLIENTES' => '5294'),
		107 => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14203', 'COMUNA' => 'Lago Ranco', 'CLIENTES' => '4193'),
		108 => array('EMPRESA_ID' => '23', 'COMUNA_ID' => '14204', 'COMUNA' => 'Río Bueno', 'CLIENTES' => '9172'),
		109 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '10401', 'COMUNA' => 'Chaitén', 'CLIENTES' => '1059'),
		110 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '10402', 'COMUNA' => 'Futaleufú', 'CLIENTES' => '1356'),
		111 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '10404', 'COMUNA' => 'Palena', 'CLIENTES' => '1076'),
		112 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '11101', 'COMUNA' => 'Coihaique', 'CLIENTES' => '24576'),
		113 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '11102', 'COMUNA' => 'Lago Verde', 'CLIENTES' => '204'),
		114 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '11201', 'COMUNA' => 'Aisén', 'CLIENTES' => '9810'),
		115 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '11202', 'COMUNA' => 'Cisnes', 'CLIENTES' => '1206'),
		116 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '11301', 'COMUNA' => 'Cochrane', 'CLIENTES' => '1639'),
		117 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '11401', 'COMUNA' => 'Chile Chico', 'CLIENTES' => '2711'),
		118 => array('EMPRESA_ID' => '24', 'COMUNA_ID' => '11402', 'COMUNA' => 'Río Ibáñez', 'CLIENTES' => '1564'),
		119 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '10105', 'COMUNA' => 'Frutillar', 'CLIENTES' => '930'),
		120 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '10109', 'COMUNA' => 'Puerto Varas', 'CLIENTES' => '11'),
		121 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '10301', 'COMUNA' => 'Osorno', 'CLIENTES' => '4866'),
		122 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '10302', 'COMUNA' => 'Puerto Octay', 'CLIENTES' => '2577'),
		123 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '10303', 'COMUNA' => 'Purranque', 'CLIENTES' => '2063'),
		124 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '10304', 'COMUNA' => 'Puyehue', 'CLIENTES' => '4322'),
		125 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '10305', 'COMUNA' => 'Río Negro', 'CLIENTES' => '1754'),
		126 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '10306', 'COMUNA' => 'San Juan de la Costa', 'CLIENTES' => '3993'),
		127 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '10307', 'COMUNA' => 'San Pablo', 'CLIENTES' => '2376'),
		128 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '14201', 'COMUNA' => 'La Unión', 'CLIENTES' => '902'),
		129 => array('EMPRESA_ID' => '39', 'COMUNA_ID' => '14204', 'COMUNA' => 'Río Bueno', 'CLIENTES' => '70'),
	);

	return $arrClientPercentage;
}

/**
 * @param array $uri_segment
 * @return mixed
 */
function breadcrumbs($uri_segment = array()) {
	if (count($uri_segment) > 0) {
		$output         = 'Usted este en: <a href="' . base_url('/') . '">inicio</a>';
		$url_array_keys = array_keys($uri_segment);
		$end            = end($url_array_keys);
		foreach ($uri_segment as $key => $crumb) {
			$output .= ' > ';
			if ($end == $key) {
				$output .= '<span>' . $crumb . '</span>';
			} else {
				$output .= '<a href="' . base_url($crumb) . '">' . $crumb . '</a>';
			}
		}

		return $output . ' ' . PHP_EOL;
	}

	return '';
}