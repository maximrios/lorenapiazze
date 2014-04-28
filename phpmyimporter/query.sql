
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_agenda`
--

CREATE TABLE IF NOT EXISTS `en_agenda` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `fecha2` date NOT NULL,
  `desc` text collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `en_agenda`
--

INSERT INTO `en_agenda` (`id`, `titulo`, `fecha`, `fecha2`, `desc`) VALUES
(1, 'probando', '2014-04-11', '0000-00-00', 'desc'),
(2, 'reunion en consejo deliberante', '2014-04-15', '2014-04-15', 'reunion a las 20 horas'),
(3, 'Actividad 2', '2014-05-01', '2014-05-03', 'Detalle de la actividad'),
(4, 'probando paginador', '2014-04-16', '0000-00-00', 'probando paginador'),
(5, 'probando paginador', '2014-04-26', '0000-00-00', 'probando paginador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_capacitaciones`
--

CREATE TABLE IF NOT EXISTS `en_capacitaciones` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `domicilio` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `email` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `link` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `en_capacitaciones`
--

INSERT INTO `en_capacitaciones` (`id`, `nombre`, `domicilio`, `email`, `link`, `fecha`) VALUES
(3, 'Jornadas de prueba', 'Colon 2071', 'jornadas@gmail.com', 'http://www.vocesvitales.com.ar/', '2014-04-10'),
(4, 'Encuentro â€œExpandir la empresa a nivel internacional Â¿CÃ³mo dar el salto?â€', 'Continuamos con el ciclo de encuentros de la Red de Mujeres Empresarias. El martes 22 de abril nos visitarÃ¡ Sandra Slavkis, General Manager Business Development Danone, quiÃ©n brindarÃ¡ herramientas para expandir la empresa a nivel internacional.  Inscri', 'vva@vva.com.ar', 'http://www.vocesvitales.com.ar/', '2014-04-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_galeria`
--

CREATE TABLE IF NOT EXISTS `en_galeria` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `texto` text collate utf8_spanish2_ci NOT NULL,
  `video` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `en_galeria`
--

INSERT INTO `en_galeria` (`id`, `nombre`, `texto`, `video`, `fecha`, `categoria`) VALUES
(5, 'texto', 'texto', '', '2014-04-14', 1),
(6, 'ddd', 'ddd', '', '2014-04-14', 1),
(7, 'sss', 'sss', '', '2014-04-14', 1),
(8, 'dd', 'ddd', '', '2014-04-14', 1),
(9, 'sss', 'sss', '7xQ-24_tN_k', '2014-04-14', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_galeria_categorias`
--

CREATE TABLE IF NOT EXISTS `en_galeria_categorias` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(255) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `en_galeria_categorias`
--

INSERT INTO `en_galeria_categorias` (`id`, `nombre`) VALUES
(1, 'Home');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_galeria_imagenes`
--

CREATE TABLE IF NOT EXISTS `en_galeria_imagenes` (
  `id` int(11) NOT NULL auto_increment,
  `idr` int(11) NOT NULL,
  `imagen` varchar(255) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `en_galeria_imagenes`
--

INSERT INTO `en_galeria_imagenes` (`id`, `idr`, `imagen`) VALUES
(18, 5, '01gr.jpg'),
(19, 6, '02gr.jpg'),
(20, 7, '03gr.jpg'),
(21, 8, '20606gr.jpg'),
(22, 9, '08gr.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_instituciones`
--

CREATE TABLE IF NOT EXISTS `en_instituciones` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `domicilio` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `email` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `link` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `en_instituciones`
--

INSERT INTO `en_instituciones` (`id`, `nombre`, `domicilio`, `email`, `link`, `fecha`) VALUES
(2, 'Voces Vitales Argentina', 'Buenos Aires', 'vva@vva.com.ar', 'http://www.vocesvitales.com.ar/', '2014-04-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_mujeres`
--

CREATE TABLE IF NOT EXISTS `en_mujeres` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `texto` text collate utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `en_mujeres`
--

INSERT INTO `en_mujeres` (`id`, `nombre`, `texto`, `fecha`) VALUES
(2, 'Maira Lopez', 'mairalopes@yahoo.com', '2014-04-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_mujeren_imagenes`
--

CREATE TABLE IF NOT EXISTS `en_mujeren_imagenes` (
  `id` int(11) NOT NULL auto_increment,
  `idr` int(11) NOT NULL,
  `imagen` varchar(255) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_noticias`
--

CREATE TABLE IF NOT EXISTS `en_noticias` (
  `id` int(11) NOT NULL auto_increment,
  `titulo` varchar(255) collate utf8_spanish2_ci NOT NULL,
  `epigrafe` text collate utf8_spanish2_ci NOT NULL,
  `texto` text collate utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `activo` int(11) NOT NULL,
  `ub1` int(11) NOT NULL,
  `ub2` int(11) NOT NULL,
  `ub3` int(11) NOT NULL,
  `ub4` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `en_noticias`
--

INSERT INTO `en_noticias` (`id`, `titulo`, `epigrafe`, `texto`, `fecha`, `activo`, `ub1`, `ub2`, `ub3`, `ub4`) VALUES
(1, 'Empresarias: La nueva generaciÃ³n', 'QuÃ© piensan, quÃ© las angustia, cÃ³mo negocian y llevan adelante la empresa y el hogar empresarias de todo el paÃ­s.', '<p>En un contexto en el que las mujeres son m&aacute;s del 50% de la poblaci&oacute;n mundial y cada vez ganan mayor visibilidad, en nuestro pa&iacute;s comienza a asomar una nueva generaci&oacute;n de empresarias, obligando a los hombres a replantearse su rol dentro y fuera de la familia. Los casos reunidos en el informe de tapa de la <strong>revista Pymes</strong> de enero confirman esta tendencia y dejan planteados los desaf&iacute;os que hoy deben enfrentar las emprendedoras. Mientras que seis empresarios revelan c&oacute;mo es negociar con ellas.</p>\r\n\r\n<p>Si bien son pocas a&uacute;n las mujeres que lideran una empresa, ya no copian el estilo de gesti&oacute;n de los hombres sino que buscan un modo propio que les permita congeniar trabajo y familia, y se animan a emprender en sectores no tradicionales para ellas.</p>\r\n\r\n<p>Atr&aacute;s parecen haber quedado situaciones extremas como las que relata Mar&iacute;a Cristobal, ingeniera civil y due&ntilde;a de Buenos Aires Planning: &ldquo;Optaba por disfrazarme de hombre para que no pensaran que me hab&iacute;an ascendido o hab&iacute;a conseguido determinado negocio por haberme acostado con uno de ellos. Es decir, me vest&iacute;a tratando de que olvidaran que era una mujer. Reci&eacute;n hace unos cuatro a&ntilde;os que me permito vestir informal, sin tapar lo que soy&rdquo;.</p>\r\n\r\n<p>Aunque a&uacute;n siguen enfrentando resabios de esa mirada machista. De hecho, la cordobesa Lorena Piazze, 37 a&ntilde;os, directora comercial de la empresa familiar Vidpia, que fund&oacute; su abuelo, todav&iacute;a recuerda detalles de la primera misi&oacute;n comercial de la que particip&oacute; y que la llev&oacute; a Sud&aacute;frica. &ldquo;Eramos 120 empresarios, entre los que hab&iacute;a s&oacute;lo cuatro mujeres. Una era yo, de 22 a&ntilde;os. Durante la primera presentaci&oacute;n, escucho tres filas m&aacute;s atr&aacute;s que un empresario le dice a otro: &lsquo;Y la rubiecita, &iquest;la amante de qui&eacute;n es?&rsquo;. A lo que el otro responde: &lsquo;No, es la hija de un empresario que viene a hacer un safari&rsquo;. Me dio mucha bronca. Sobre todo porque de los 120 que fuimos s&oacute;lo tres cerramos negocio y una era yo&rdquo;.</p>\r\n\r\n<p>Pero, tambi&eacute;n hay barreras internas a vencer. Una es la angustia que genera en ellas el tironeo entre el trabajo y la vida personal. Sobre todo porque no quieren resignar el rol dom&eacute;stico. Por eso, los especialistas afirman que se puede tener todo, siempre y cuando no se espere que todo sea perfecto. Y enumeran una serie de aspectos que las mujeres deben tener en cuenta a la hora de emprender o ponerse al frente de una empresa en marcha.</p>\r\n\r\n<p>En tanto, para quienes gestionan empresas en crecimiento, una investigaci&oacute;n revela por qu&eacute; emprendedores de todo el pa&iacute;s y del extranjero apuestan a desarrollar sus negocios en C&oacute;rdoba. Y no s&oacute;lo les ha ido bien, sino que han aprovechado la condici&oacute;n de &ldquo;centro del pa&iacute;s&rdquo; que tiene esta zona para, desde all&iacute;, salir a vender a otras provincias y, m&aacute;s a&uacute;n, al mundo. Adem&aacute;s, los que se animaron alertan sobre los errores a evitar y describen las caracter&iacute;sticas de los consumidores cordobeses.</p>\r\n\r\n<p>Mientras que el dossier de esta edici&oacute;n revela las &uacute;ltimas tendencias de una industria nueva y en expansi&oacute;n en el pa&iacute;s, la de los videojuegos. El sector ya exporta a tres continentes, en especial desarrollos para smartphones y tablets. Al tiempo que a nivel global, un estudio de PwC estima en US$259.000 millones los ingresos por Internet m&oacute;vil para 2014, m&aacute;s de la mitad del gasto total en accesos a la Red. En este contexto, el mercado de los videojuegos no es la excepci&oacute;n, ya que enfrenta la posibilidad de crecer al 6,5% anual, de ac&aacute; al 2017, hasta alcanzar ingresos por US$87.000 millones. Es decir, la tendencia favorece a los desarrolladores independientes que en esta investigaci&oacute;n encontrar&aacute;n toda la informaci&oacute;n necesaria para proyectar sus negocios.</p>\r\n\r\n<p>Fuente:<a href="http://www.ieco.clarin.com/economia/nuevas-empresarias_0_1060694326.html">http://www.ieco.clarin.com/economia/nuevas-empresarias_0_1060694326.html</a></p>\r\n', '2014-04-10', 1, 1, 0, 1, 0),
(2, 'DistinciÃ³n en el Concejo Deliberante de CÃ³rdoba', 'El Concejo Deliberante homenageÃ³ a un grupo de mujeres', '<p>El Concejo Deliberante tribut&oacute; un sentido benepl&aacute;cito a un grupo de mujeres en el marco del D&iacute;a Internacional de la Mujer, cuyo d&iacute;a es el 8 de marzo. El homenaje, propuesto por la presidenta de la Comisi&oacute;n de G&eacute;nero del Concejo y presidido por el Viceintendente Marcelo Cossar, se realiz&oacute; posterior a la cuarta sesi&oacute;n del per&iacute;odo ordinario y tuvo un cierre de lujo con la presencia ad honorem de Los Modernos, quienes brindaron un show breve y altamente efectivo.<br />\r\nEl proyecto acerca del reconocimiento a mujeres que se destacan en su profesi&oacute;n o en la prestaci&oacute;n de un servicio en diferentes &aacute;mbitos de la sociedad cordobesas se aprob&oacute; por unanimidad.<br />\r\nMiriam Acosta, presidenta de la mencionada comisi&oacute;n, afirm&oacute; al presentar la iniciativa: &ldquo;En el D&iacute;a de la Mujer y con sobradas razones, recordamos a muchas mujeres cuyos nombres nos resulten conocidos o no, porque ellas merecen nuestro respeto y agradecimiento ya que con fortaleza y perseverancia han defendido su lugar en busca de una vida digna yen muchos de los que casos que hoy est&aacute;n ac&aacute; dedican horas de su vida a mejorar alg&uacute;n aspecto de la sociedad, potenciar otros o reflejar lo que en ella ocurre&rdquo;.<br />\r\nAdem&aacute;s, Acosta agreg&oacute; que a pesar de lo logrado en materia de derechos e igualdad entre g&eacute;nero &ldquo;Hoy miles de mujeres salen a las calles para reclamar nuevos derechos, defender los ya conquistados y luchar contra aquellas situaciones que discriminan o rechazan el principio de equidad de sexos y de oportunidades&rdquo; y finaliz&oacute; se&ntilde;alando: &ldquo;Igualdad para las mujeres: progreso para tod@s&rdquo;, es el lema dispuesto por las Organizaci&oacute;n de las Naciones Unidas para el a&ntilde;o en curso y en ese sentido tenemos que apuntar el esfuerzo y el compromiso de todo este cuerpo legislativo&rdquo;.<br />\r\n<br />\r\nRecibieron la distinci&oacute;n las siguientes mujeres:<br />\r\nM&oacute;nica Reviglio: periodista de Canal 10, especializada y comprometida con la tem&aacute;tica de la mujer.<br />\r\nSilvana Da Gracca: productora general de El show de la ma&ntilde;ana. programa con mayor audiencia televisiva de las ma&ntilde;anas de C&oacute;rdoba.<br />\r\nLorena Piazze: destacada empresaria, y presidenta de Voces Vitales C&oacute;rdoba.<br />\r\nTamara Sternberg: directora y editora de El emporio ediciones<br />\r\nPatricia Beatriz Oron&aacute;: presidenta del Centro Vecinal Arg&ucirc;ello Norte<br />\r\nValeria L&oacute;pez: presidenta grupo Un litro de leche por mes.<br />\r\nCarolina Balzaretti: motorista en la Polic&iacute;a de tr&aacute;nsito de la Municipalidad de C&oacute;rdoba<br />\r\nNorma Pons: coordinadora del apoyo escolar de la parroquia Santa Ana y San Joaqu&iacute;n<br />\r\nNoelia del Valle Garella: docente del jard&iacute;n maternal municipal Capullito, de barrio Villa Corn&uacute;<br />\r\nAdriana Rivarosa: periodista y productora de Canal 8, con m&aacute;s de 25 a&ntilde;os de trayectoria ininterrumpida en el medio.<br />\r\nPaula Soledad Urquiza: cuida coche, naranjita, en el Parque Sarmiento<br />\r\nMar&iacute;a Guadalupe Irusta: capitana del equipo femenino de rugby de C&oacute;rdoba Rugby Club<br />\r\nAntonella Chanqu&iacute;a: integrante del seleccionado nacional Sub 17 de la AFA<br />\r\nMar&iacute;a Jos&eacute; Baz&aacute;n: cabo miembro de la Direcci&oacute;n de bomberos de la Polic&iacute;a de la Provincia de C&oacute;rdoba<br />\r\nMar&iacute;a Bel&eacute;n Garetto: suboficial de la Polic&iacute;a de la Provincia de C&oacute;rdoba<br />\r\nMar&iacute;a Florencia Ripoll: periodista que cubre diariamente los temas locales en el Concejo Deliberante de la ciudad de C&oacute;rdoba para el peri&oacute;dico D&iacute;a a D&iacute;a<br />\r\nClelia Mar&iacute;a Riera: investigadora cient&iacute;fica del Conicet en el &aacute;rea de inmunolog&iacute;a, destacada a nivel nacional e internacional<br />\r\nMar&iacute;a Teresa Maccelo: periodista. Movilera con 31 a&ntilde;os de trayectoria ininterrumpidos en Canal 10 cubriendo los temas de nuestra realidad.<br />\r\nMargarita Rosa Minu&eacute;: socia fundadora del club Rugby Villa Libertador<br />\r\nLaura Igarz&aacute;bal: presidenta de la fundaci&oacute;n Peque&ntilde;os gigantes.<br />\r\nSandra Meyer: presidenta de la fundaci&oacute;n Relevando peligro.</p>\r\n', '2014-04-11', 1, 1, 0, 1, 0),
(3, 'MÃœV Talks | Mujeres Emprendedoras', 'El viernes 07 de marzo, se realizÃ³ la primer ediciÃ³n de MÃœV Talks en CÃ³rdoba. ', '<p>El viernes 07 de marzo, se realiz&oacute; la primer edici&oacute;n de M&Uuml;V Talks en C&oacute;rdoba. Fue una edici&oacute;n especial en conmemoraci&oacute;n al D&iacute;a de la Mujer y tuvo el apoyo de Emprendedores web, Santex y Secretar&iacute;a Pyme y Desarrollo Emprendedor.<br />\r\n<br />\r\nEl evento consisti&oacute; en un set de 7 charlas de 7 minutos sobre experiencias y puntos de vista de acad&eacute;micos, investigadores, empresarios, emprendedores e inversionistas seguido de actividades y networking. Esta jornada cont&oacute; con la presencia de 7 mujeres emprendedoras exitosas en sus rubros: Romina Gleria (@Boutique Boutique du Sens), Annett Koegler (Santex), Lorena Piazze (VIDPIA / Voces Vitales Cordoba), M&oacute;nica Benjam&iacute;n (Swiss Medical Group Argentina / Maternidad Suizo Argentina), Paula Betania Luna (The Look), Julieta Kohan (Patitas de Perros) y Natalia Yubel (Fundaci&oacute;n e+e).<br />\r\nParticiparon adem&aacute;s, 65 emprendedores y prestigiosos referentes del emprendedorismo en la ciudad de C&oacute;rdoba compartiendo una tarde llena de historias, inspiraci&oacute;n y networking.</p>\r\n', '2014-04-11', 1, 1, 0, 1, 0),
(4, 'Primer encuentro Red de Mujeres Empresarias', 'El 25 de Marzo se realizÃ³ el  Primer encuentro Red de Mujeres Empresarias', '<p>Voces Vitales Argentina comenz&oacute; los encuentros que la Red de Mujeres Empresarias de Voces Vitales Argentina, el primero se realiz&oacute; en Buenos Aires</p>\r\n', '2014-04-11', 1, 0, 0, 0, 1),
(5, '4ta Caminata Mentoreo Voces Vitales CÃ³rdoba', 'El 8 de marzo se realizÃ³ la 4ta Caminata Mentoreo Voces Vitales CÃ³rdoba', '<p>Para promover la nueva generaci&oacute;n de mujeres l&iacute;deres, se realiz&oacute; la 4&deg; Caminata de Mentoreo de Voces Vitales en C&oacute;rdoba.<br />\r\n<em>La actividad de nivel internacional cont&oacute; con el apoyo del Banco de Am&eacute;rica. 124 mujeres caminaron por el liderazgo femenino y otras 200 participaron en el ciclo de talleres paralelos</em>.</p>\r\n\r\n<p style="text-align:justify"><strong>C&oacute;rdoba, 10 de marzo de 2014.</strong> El s&aacute;bado 8 de marzo, en el marco del D&iacute;a Internacional de la Mujer, 124 mujeres se unieron en el country Las Delicias, en la ciudad de C&oacute;rdoba, para participar de la <strong>4</strong><strong>&ordf;</strong><strong> Caminata de Mentoreo de Voces Vitales Argentina Delegaci&oacute;n C&oacute;rdoba</strong>, formando parte, as&iacute;, de un movimiento mundial para inspirar a una nueva generaci&oacute;n de potenciales mujeres l&iacute;deres a trav&eacute;s del mentoreo. Este a&ntilde;o, la actividad, fue patrocinada internacionalmente por el Banco de Am&eacute;rica.</p>\r\n\r\n<p style="text-align:justify">De esta manera, durante toda una ma&ntilde;ana, las 62 duplas integradas por prestigiosas mujeres l&iacute;deres de diferentes &aacute;mbitos (mentoras) y j&oacute;venes con potencial de liderazgo (mentoreadas), compartieron su experiencia profesional y personal con el objetivo de conversar sobre sus retos profesionales y las oportunidades que ofrece el establecer una relaci&oacute;n de tutor&iacute;a o mentoreo.</p>\r\n\r\n<p style="text-align:justify">La <strong>4</strong>&ordf;<strong> Caminata de Mentoreo</strong> en C&oacute;rdoba fue una de las m&aacute;s de 40 caminatas similares que se llevaron a cabo el mismo d&iacute;a en diferentes pa&iacute;ses del mundo impulsados por <strong>Vital Voices Global Partnership</strong> con el fin de poner de relieve la importancia del liderazgo de las mujeres y para acelerar el impacto de las mujeres l&iacute;deres a trav&eacute;s del mentoreo.</p>\r\n\r\n<p style="text-align:justify">En esta ocasi&oacute;n, mujeres destacadas de C&oacute;rdoba como <strong>Gloria Radik, M&oacute;nica Zornberg, Vanesa Dur&aacute;n, Marta Moraschi, Mery Lunge, Andrea Ravich, Rosana Guerra, Ivana Alochis, Elizabeth Lambertini, Mar&iacute;a Valdes Quintana, Mar&iacute;a Montironi, Myriam Mart&iacute;nez e Isabel Mart&iacute;nez</strong> fueron algunas de las mentoras que participaron en esta 4&ordf; edici&oacute;n de la actividad.</p>\r\n\r\n<p style="text-align:justify"><strong><em>&ldquo;La Caminata de Mentoreo es una oportunidad para que las mujeres de nuestra comunidad se unan en torno a un prop&oacute;sito com&uacute;n. Juntas vamos a preparar el camino para la pr&oacute;xima generaci&oacute;n de mujeres l&iacute;deres&rdquo;</em></strong>, se&ntilde;al&oacute; Lorena Piazze, representante de Voces Vitales Argentina Delegaci&oacute;n C&oacute;rdoba.</p>\r\n\r\n<p style="text-align:justify">Este a&ntilde;o, en Argentina, la caminata tambi&eacute;n se desarroll&oacute; en el marco del D&iacute;a de la Mujer en la ciudad de Salta. Adem&aacute;s, a nivel mundial se llev&oacute; a cabo en pa&iacute;ses como Brasil, Camboya, Camer&uacute;n, costa Rica, Ecuador, Ghana, Guyana, Hait&iacute;, Honduras, India, Kenia, L&iacute;bano, Liberia, Malasia, M&eacute;xico, Namibia, Nigeria, Pakist&aacute;n, Per&uacute;, Polonia, Serbia, Sud&aacute;frica, Santa Luc&iacute;a, Tanzania, Tailandia, Togo, Uganda y Zimbabwe.</p>\r\n\r\n<p style="text-align:justify"><strong>Ciclo de talleres paralelo</strong></p>\r\n\r\n<p style="text-align:justify">Este a&ntilde;o, como novedad en el marco de la caminata, la delegaci&oacute;n C&oacute;rdoba de Voces Vitales Argentina organiz&oacute; un ciclo de talleres que se desarrollaron en forma paralela a la actividad central.</p>\r\n\r\n<p style="text-align:justify">De esta manera, m&aacute;s de 200 mujeres llegaron tambi&eacute;n al country Las Delicias para participar de los 11 talleres que se dictaron en esta ocasi&oacute;n.</p>\r\n\r\n<p style="text-align:justify">En este sentido, Mariana Zapata, Mercedes Delgado y Mar&iacute;a Fernanda Barr desarrollaron el curso &ldquo;C&oacute;mo lookearte divina en 40 minutos&rdquo; y Tatiana Bregi y Lorena Gallardo se encargaron de brindar tips para &ldquo;Enamorarnos de nuestra imagen&rdquo;.</p>\r\n\r\n<p style="text-align:justify">Mientras tanto, Anal&iacute;a Fantini realiz&oacute; diagn&oacute;sticos de biotipos cut&aacute;neos para que las mujeres conozcan mejor su piel y Florencia Glaser brind&oacute; un taller sobre &ldquo;C&oacute;mo lucir una piel perfecta, con un maquillaje natural&rdquo;.</p>\r\n\r\n<p style="text-align:justify">Por otra parte, Paola Spaletti estuvo a cargo de la experiencia sensorial &ldquo;La Pacha Mama, es mujer&rdquo;, que se centr&oacute; en estimular la creatividad femenina y el arte de simplificar la vida; y Maru Bonaudo brind&oacute; una clase de yoga para &ldquo;Despertar la conciencia corporal&rdquo;.</p>\r\n\r\n<p style="text-align:justify">La coordinaci&oacute;n de la vida laboral con la maternidad tambi&eacute;n estuvo presente en el ciclo de talleres. As&iacute;, el escritor Fernando Evangelisti brind&oacute; algunas claves para ayudar a la &ldquo;Mujer Orquesta&rdquo; a equilibrar sus diferentes roles; en tanto, la bioqu&iacute;mica Adriana Baretta, present&oacute; su m&eacute;todo de preselecci&oacute;n natural del sexo del beb&eacute;, a trav&eacute;s de una dieta determinada y el conocimiento de los ciclos de la mujer.</p>\r\n\r\n<p style="text-align:justify">El coaching y la programaci&oacute;n neurling&uuml;&iacute;stica tambi&eacute;n formaron parte de esta nueva propuesta. En este sentido, Julieta Bulgheroni desarroll&oacute; el taller &ldquo;Herramientas de PNL para el logro de objetivos&rdquo; y Valeria Hein estuvo a cargo del curso &ldquo;Desarrollando al m&aacute;ximo mi potencial, est&aacute;s funcionando al 100%&rdquo;.</p>\r\n\r\n<p style="text-align:justify">Por &uacute;ltimo, desde Cura T&eacute; Alma, Bel&eacute;n Avico invit&oacute; a todas las mujeres presentes a un encuentro sensorial para degustar blends de t&eacute;s.</p>\r\n\r\n<p style="text-align:justify">En C&oacute;rdoba, la <strong>delegaci&oacute;n local de Voces Vitales Argentina</strong> est&aacute; integrada por Lorena Piazze, Romina Gleria, Mar&iacute;a Laura Far&iacute;a, Romina Piazze, Ivana Medina, Florencia Moyano Carranza, Valeria Hein, Sandra Ponce, Victoria Aguiar, Irene Presti, Ileana Gionco y Mariana Caruncho.</p>\r\n\r\n<p>&iexcl;Te invitamos a escuchar testimonios de las protagonistas en este <a href="https://www.youtube.com/watch?v=akJIWo_9K7w" target="_blank">video</a>!</p>\r\n', '2014-04-11', 1, 0, 0, 0, 1),
(6, 'Encuentro â€œExpandir la empresa a nivel internacional Â¿CÃ³mo dar el salto?â€', 'Continuamos con el ciclo de encuentros de la Red de Mujeres Empresarias. El martes 22 de abril nos visitarÃ¡ Sandra Slavkis, General Manager Business Development Danone, quiÃ©n brindarÃ¡ herramientas para expandir la empresa a nivel internacional.', '<p><a href="https://docs.google.com/forms/d/1BN_yGTNMloVc5TYBNnAalbokzlACw353W3-cg6XpqVU/viewform" target="_blank">Inscripci&oacute;n previa obligatoria</a></p>\r\n\r\n<p>Costo de la actividad:<br />\r\n- Socias de la Red: sin cargo<br />\r\n- No socias:</p>\r\n\r\n<ul>\r\n	<li>Pago en el lugar $200</li>\r\n	<li><a href="https://www.mercadopago.com/mla/checkout/pay?pref_id=145206673-adcdacda-92ed-4285-ba6c-84e77b377d87" target="_blank">Pago online anticipado $150</a></li>\r\n</ul>\r\n\r\n<p style="text-align:left"><a href="https://www.mercadopago.com/mla/checkout/pay?pref_id=145206673-5c744e75-a202-4468-b479-67f3f835acd4" target="_blank">Beneficio 50% de descuento para ex aprendices del Programa de Mentoreo</a><br />\r\n<a href="http://https://www.mercadopago.com/mla/checkout/pay?pref_id=145206673-953d1103-333f-4297-818d-006233ebada0" target="_blank">Beneficio 50% de descuento para&nbsp;donantes individuales</a></p>\r\n', '2014-04-15', 1, 0, 1, 0, 0),
(7, 'Vidpia lanzÃ³ su red para negocios y profesionales', 'Red Vidpia serÃ¡ su nombre y proyecta reunir a 500 socios en un aÃ±o. SumarÃ¡ tecnologÃ­a para producir mÃ¡s vidrio que permite ahorro energÃ©tico.', '<p><strong>Vidrios Piazze (Vidpia) </strong>lanz&oacute; ayer una red de fidelizaci&oacute;n que espera reunir a 500 clientes, entre negocios y profesionales, en el plazo de un a&ntilde;o.</p>\r\n\r\n<p>La f&aacute;brica cordobesa de vidrios y cristales procesados para la construcci&oacute;n realiz&oacute; este anuncio en el marco de la primera edici&oacute;n de Vidpia Educa, un evento que reuni&oacute; a clientes de todo el pa&iacute;s, en el cual present&oacute; novedades de sus productos y las marcas que comercializa y capacit&oacute; en las nuevas tendencias en materia de obras y herramientas de gesti&oacute;n.</p>\r\n\r\n<p>El evento estuvo encabezado por el presidente de la firma, Osvaldo Piazze; su vicepresidente, Hugo Piazze, y su directora Comercial y de Marketing, Lorena Piazze.</p>\r\n\r\n<p>La empresa cuenta en el pa&iacute;s con aproximadamente mil clientes, de los cuales intentar&aacute; fidelizar a la mitad en el primer a&ntilde;o, seg&uacute;n adelant&oacute; Lorena Piazze.</p>\r\n\r\n<p>La Red Vidpia no tendr&aacute; costos y apunta a vidrieros, carpinter&iacute;as, estudios de arquitectura y empresas constructoras, sin que estas pierdan su identidad.</p>\r\n\r\n<p>A ellos les ofrecer&aacute; servicios y beneficios con instituciones con las cuales Vidpia tiene acuerdos o convenios, como el Banco Galicia (que ofrecer&aacute; operatoria bancaria y financiaci&oacute;n en condiciones m&aacute;s ventajosas), Seguros La Segunda y Corcam (que brindar&aacute; <em>leasing</em> para sus camiones).</p>\r\n\r\n<p>La red ofrecer&aacute; una tarjeta de fidelizaci&oacute;n y, dejaron trascender sus organizadores, podr&iacute;a incluir en un futuro pr&oacute;ximo tambi&eacute;n una tarjeta de cr&eacute;dito.</p>\r\n\r\n<p>Adem&aacute;s, el programa incluye comunicaci&oacute;n de todos los productos; formaci&oacute;n en <em>marketing</em> , finanzas, administraci&oacute;n y atenci&oacute;n al cliente, como tambi&eacute;n sus productos y complementos.</p>\r\n\r\n<p><strong>Inversi&oacute;n</strong></p>\r\n\r\n<p>La empresa fue creada en 1945 por Jorge Piazze, quien lleg&oacute; a convertirse en el principal proveedor de los vidrios redondos que ten&iacute;an las antiguas cajas de lata para galletas. En la actualidad, est&aacute; dirigida por la segunda y tercera generaci&oacute;n. Tiene una planta de 13 mil metros cuadrados en Circunvalaci&oacute;n (entre Camino a San Carlos y Camino a San Antonio) y cinco centros de distribuci&oacute;n en esta ciudad y en Corrientes, Mendoza, San Juan y Villa Mercedes (San Luis).</p>\r\n\r\n<p>Cuenta adem&aacute;s con 280 empleados y procesa entre 1.200 y 1.500 toneladas de vidrio por mes, utilizando m&aacute;s del 70 por ciento de su capacidad productiva. Puede procesar 45 mil metros cuadrados de vidrio templado y 54 mil metros cuadrados de doble vidriado herm&eacute;tico.</p>\r\n\r\n<p>La firma ha colocado sus productos en Chile, Paraguay y Miami. Ha participado de obras como el Teatro Sol&iacute;s de Uruguay. En Buenos Aires, aport&oacute; vidrios para edificios como la &uacute;ltima filial de los bancos Ciudad de Buenos Aires y Galicia y ahora se sumar&aacute; a un proyecto del desarrollista Eduardo Constantini.</p>\r\n\r\n<p>Seg&uacute;n destac&oacute; Hugo Piazze, las grandes obras exigen ahora utilizar vidrios para ahorro energ&eacute;tico, que reducen la entrada de fr&iacute;o-calor a m&aacute;s de la mitad y permiten un mayor uso de luz natural.</p>\r\n\r\n<p>Para no perder terreno en este mercado, en estos d&iacute;as est&aacute;n importando un nuevo horno PRO-E &ldquo;&uacute;nico en el pa&iacute;s&rdquo; de templado horizontal para procesar vidrios de baja emisividad, lo que permite producir vidrios de simple, doble y triple capa de plata.</p>\r\n\r\n<p>La inversi&oacute;n es financiada con un cr&eacute;dito del Bicentenario y se instrumentar&aacute; desde el a&ntilde;o pr&oacute;ximo.</p>\r\n\r\n<p><strong>Inflaci&oacute;n, un problema</strong></p>\r\n\r\n<p>Para Hugo Pia&shy;zze, el principal problema del sector es la inflaci&oacute;n, que redujo al m&iacute;nimo las exportaciones y achic&oacute; la rentabilidad. Este a&ntilde;o, los salarios del sector aumentaron 28 a 30 por ciento, cuando los precios de sus productos subieron 16%.</p>\r\n', '2014-04-15', 1, 1, 0, 0, 1),
(8, 'Con el objetivo puesto en el desarrollo', 'SoÃ±aron con dar a luz un proyecto y, para concretarlo, apostaron fuertemente a', '<p>Si la inspiraci&oacute;n llega,que me encuentre trabajando&rdquo;, sentenci&oacute; Pablo Picasso. La inspiraci&oacute;n encontr&oacute; al artista<br />\r\nmalague&ntilde;o trabajando en cada uno de sus per&iacute;odos (Azul,Rosa, Cubista). Y no fue el &uacute;nico sorprendido. Hay emprendedores que so&ntilde;aron con un<br />\r\nproyecto y hoy cuentan c&oacute;mo fue empezar sin saber qu&eacute; pasar&iacute;a el d&iacute;a de ma&ntilde;ana.<br />\r\nCarlos Paolucci, presidente de Graficus; Alberto Baldocini, director, junto a su hermano Gustavo, de AG Group; y Lorena Piazze, directora de<br />\r\nVidpia, coincidieron en el segundo Seminario Pyme C&oacute;rdoba, organizado por El Cronista Comercial, revista Apertura y<br />\r\nla Fundaci&oacute;n Mediterr&aacute;nea.<br />\r\n&ldquo;Lo que siempre ponderamos fue el producto. Dijimos:tenemos que tener el mejor producto de la mejor calidad&rdquo;,explic&oacute; Piazze, cuya empresa<br />\r\nse especializa en el multiprocesado de cristales para la construcci&oacute;n, al inicio del panel, moderado por Hern&aacute;n De Go&ntilde;i, subdirector period&iacute;stico deEl Cronista Comercial.Por su parte, Paolucci, al<br />\r\nfrente de una imprenta proveedora de piezas comerciales y promocionales, asegur&oacute;:&ldquo;Nosotros decidimos posicionarnos en un segmento de va-<br />\r\nlor; nuestro producto apunt&oacute; siempre a la diferenciaci&oacute;n&rdquo;<br />\r\n<a href="http://www.ieral.org/imagen_db/noticias_archivos/2521-Suplemente%20Pyme.pdf">SEGUIR LEYENDO LA NOTA COMPLETA: http://www.ieral.org/imagen_db/noticias_archivos/2521-Suplemente%20Pyme.pdf</a></p>\r\n', '2014-04-15', 1, 1, 0, 1, 0),
(9, 'Ejecutiva para todo, mujer imparable', 'QuÃ© mejor manera de celebrar el 8 de marzo que con la historia inspiradora de una destacada', '<p>profesional, reconocida empresaria, incansable emprendedora, relacionista p&uacute;blica y pr&oacute;xima mam&aacute; primeriza de mellizos. Ella es Lorena Piazze, residente del Country Las Delicias.</p>\r\n\r\n<p><a href="http://www.coterranea.com/Descargas/RevistaCountryMarzo2009.pdf">SEGUIR LEYENDO ESTA NOTA EN:http://www.coterranea.com/Descargas/RevistaCountryMarzo2009.pdf</a></p>\r\n', '2014-04-15', 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_noticias_categorias`
--

CREATE TABLE IF NOT EXISTS `en_noticias_categorias` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(255) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `en_noticias_categorias`
--

INSERT INTO `en_noticias_categorias` (`id`, `nombre`) VALUES
(1, 'Lorena'),
(2, 'Voces Vitales'),
(3, 'Home destacada '),
(4, 'Home listado\r\n\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `en_noticias_imagenes`
--

CREATE TABLE IF NOT EXISTS `en_noticias_imagenes` (
  `id` int(11) NOT NULL auto_increment,
  `idr` int(11) NOT NULL,
  `imagen` varchar(255) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `en_noticias_imagenes`
--

INSERT INTO `en_noticias_imagenes` (`id`, `idr`, `imagen`) VALUES
(3, 2, '749concejo02.jpg'),
(4, 2, '675concejo01.jpg'),
(6, 1, '04gr.jpg'),
(7, 1, '05gr.jpg'),
(8, 3, '06gr.jpg'),
(9, 3, '07gr.jpg'),
(12, 4, '448encuentro1.jpg'),
(13, 5, 'about01.jpg'),
(17, 7, '177noticia2.jpg'),
(18, 8, 'cronista.jpg'),
(20, 9, 'ejecutiva.jpg');
