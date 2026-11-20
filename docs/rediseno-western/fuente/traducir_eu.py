"""Genera las vistas eu a partir de las es con una tabla de traducción por página.

Uso: python3 -I traducir_eu.py <raíz del proyecto>
Falla si algún texto de la tabla no aparece en la vista es.
"""
import re
import sys
from pathlib import Path

raiz = Path(sys.argv[1])
vistas = raiz / "App" / "views"

# Rutas es -> eu (misma posición en config.php)
RUTAS = {
    "/es/quienes-somos": "/eu/quienessomos",
    "/es/nuestras-hamburguesas": "/eu/servicios",
    "/es/contacto": "/eu/contacto",
    "/es": "/eu",
}

COMUN = [
    ('<html lang="es">', '<html lang="eu">'),
    ('content="es_ES"', 'content="eu_ES"'),
    ("includes/es/", "includes/eu/"),
]

PAGINAS = {
    "inicio.php": [
        (
            "El Forajido | Foodtruck de hamburguesas a la brasa de encina",
            "El Forajido | Arte-egurraren txingarretako hanburgesen foodtrucka",
        ),
        (
            "Hamburguesas a la brasa de encina con carne madurada, pan de masa madre y salsas propias. Consulta la ruta semanal del foodtruck y ven a probarlas.",
            "Arte-egurraren txingarretan erretako hanburgesak: okela ondua, ama-oreko ogia eta etxeko saltsak. Begiratu foodtruckaren asteko ibilbidea eta etorri dastatzera.",
        ),
        ("Foodtruck de hamburguesas", "Hanburgesen foodtrucka"),
        (
            'Las burgers más <span class="header01-bis__resalte">buscadas</span> del oeste',
            'Mendebaldeko burger <span class="header01-bis__resalte">bilatuenak</span>',
        ),
        (
            """Carne madurada a la brasa, pan de masa madre y salsas que guardamos bajo llave. Seguimos la ruta y
                        paramos donde haya hambre.""",
            """Txingarretan erretako okela ondua, ama-oreko ogia eta giltzapean gordetzen ditugun saltsak. Bideari
                        jarraitzen diogu eta gosea dagoen lekuan gelditzen gara.""",
        ),
        (">Ver la carta</a>", ">Ikusi karta</a>"),
        (">¿Dónde estamos hoy?</a>", ">Non gaude gaur?</a>"),
        ('<p class="artCartel01__titulo">Se busca</p>', '<p class="artCartel01__titulo">Bilatzen da</p>'),
        ('<p class="artCartel01__lema">Viva y jugosa</p>', '<p class="artCartel01__lema">Bizirik eta mamitsu</p>'),
        ("— Recompensa —", "— Saria —"),
        (
            'aria-label="Hamburguesa El Forajido con lechuga, queso, tomate, carne y cebolla"',
            'aria-label="El Forajido hanburgesa: letxuga, gazta, tomatea, okela eta tipula"',
        ),
        (" La ley de la casa ", " Etxeko legea "),
        (">Tres reglas que no se rompen<", ">Inoiz hausten ez diren hiru arau<"),
        (">Fuego de leña<", ">Egur-sua<"),
        (
            "Cada carne pasa por la parrilla de encina. Sin planchas, sin atajos, solo brasa y paciencia.",
            "Okela guztiak arte-egurrezko parrillatik pasatzen dira. Plantxarik eta lasterbiderik gabe: txingarra eta pazientzia besterik ez.",
        ),
        (">Carne de aquí<", ">Hemengo okela<"),
        (
            "Vaca madurada 30 días de ganaderías de la sierra, picada cada mañana en el propio camión.",
            "Mendiko abeltzaintzetako behi-okela, 30 egunez ondua eta goizero kamioian bertan txikitua.",
        ),
        (">Salsas de bandido<", ">Bandido-saltsak<"),
        (
            "Seis recetas propias, del chipotle ahumado a la miel con mostaza. La receta no se negocia.",
            "Sei errezeta propio, chipotle ketutik hasi eta ezti-ziape saltsaraino. Errezeta ez da negoziatzen.",
        ),
        (" Las más pedidas", " Eskatuenak"),
        (">Los más buscados<", ">Bilatuenak<"),
        (">Ver las 5 burgers</a>", ">Ikusi 5 burgerrak</a>"),
        (
            'aria-label="Hamburguesa La Diligencia con aros de cebolla, salsa barbacoa y carne"',
            'aria-label="La Diligencia hanburgesa: tipula-eraztunak, barbakoa saltsa eta okela"',
        ),
        (
            'aria-label="Hamburguesa Sheriff Picante con lechuga, queso, jalapeños, carne y salsa picante"',
            'aria-label="Sheriff Picante hanburgesa: letxuga, gazta, jalapeñoak, okela eta saltsa pikantea"',
        ),
        (
            'aria-label="Hamburguesa Fiebre del Oro con huevo, queso cheddar, carne y miel"',
            'aria-label="Fiebre del Oro hanburgesa: arrautza, cheddar gazta, okela eta eztia"',
        ),
        (">Jalapeño · Chipotle<", ">Jalapeñoa · Chipotlea<"),
        (">Cheddar · Huevo · Miel<", ">Cheddarra · Arrautza · Eztia<"),
        (" En ruta\n", " Bidean\n"),
        (">¿Dónde aparca el carro esta semana?<", ">Non aparkatuko du gurdiak aste honetan?<"),
        (
            "Cambiamos de plaza cada día. Consulta la ruta y ven antes de que se acabe el pan.",
            "Egunero aldatzen dugu plaza. Begiratu ibilbidea eta etorri ogia amaitu baino lehen.",
        ),
        (">Reservar para un evento</a>", ">Erreserbatu ekitaldi baterako</a>"),
        (">Ruta de la semana<", ">Asteko ibilbidea<"),
        (">Mar 18<", ">Ar. 18<"),
        (">Jue 20<", ">Og. 20<"),
        (">Vie 21<", ">Or. 21<"),
        (">Sáb 22<", ">Lr. 22<"),
    ],
    "servicios.php": [
        (
            "Nuestras hamburguesas a la brasa | Carta de El Forajido",
            "Gure txingarretako hanburgesak | El Forajidoren karta",
        ),
        (
            "Cinco hamburguesas a la parrilla de encina, de la clásica El Forajido a la vegetal Coyote Verde. Todas con patatas rústicas y una salsa a elegir.",
            "Arte-egurrezko parrillan egindako bost hanburgesa, El Forajido klasikotik Coyote Verde begetarianora. Denak patata rustikoekin eta aukerako saltsa batekin.",
        ),
        (" La carta ", " Karta "),
        (">Nuestras hamburguesas</h1>", ">Gure hanburgesak</h1>"),
        (
            "Cinco forajidos a la parrilla. Todas se sirven con patatas rústicas y una salsa a elegir.",
            "Bost legez kanpoko parrillan. Denak patata rustikoekin eta aukerako saltsa batekin zerbitzatzen dira.",
        ),
        (">Hamburguesas de la carta</h2>", ">Kartako hanburgesak</h2>"),
        (">Ingredientes</h4>", ">Osagaiak</h4>"),
        ('aria-label="Añadir <?= e($hamburguesa["nombre"]) ?>"', 'aria-label="Gehitu <?= e($hamburguesa["nombre"]) ?>"'),
        ("Añadir <span", "Gehitu <span"),
        (">¿Alérgenos o dudas? Pregunta al cocinero</h2>", ">Alergenoak edo zalantzak? Galdetu sukaldariari</h2>"),
        (
            ">Pan sin gluten disponible para todas las burgers (+1 €)</p>",
            ">Glutenik gabeko ogia eskuragarri burger guztietarako (+1 €)</p>",
        ),
        # Datos de la carta
        ('"etiqueta" => "Picante"', '"etiqueta" => "Pikantea"'),
        ('"etiqueta" => "La más pedida"', '"etiqueta" => "Eskatuena"'),
        ('"etiqueta" => "Veggie"', '"etiqueta" => "Begetarianoa"'),
        (
            "La clásica que empezó todo: humo de encina, queso que se derrite y el sabor de las noches junto al fuego.",
            "Dena hasi zuen klasikoa: arte-egurraren kea, urtzen den gazta eta suaren ondoko gauen zaporea.",
        ),
        (
            "Impone la ley a base de picante. Inspirada en la frontera con México: chipotle, jalapeño y ni un paso atrás.",
            "Legea pikantearen bidez ezartzen du. Mexikoko mugan inspiratua: chipotlea, jalapeñoa eta atzera pausorik ez.",
        ),
        (
            "Para el viaje largo. Barbacoa con bourbon, bacon crujiente y aros de cebolla, como en las cantinas de paso.",
            "Bidaia luzerako. Bourbon-barbakoa, bacon kurruskaria eta tipula-eraztunak, bideko kantinetan bezala.",
        ),
        (
            "Brillante como una pepita recién encontrada: cheddar fundido, huevo de yema dorada y un toque de miel y mostaza.",
            "Aurkitu berri den urre-pikor bat bezain distiratsua: cheddar urtua, gorringo urrekarako arrautza eta ezti-ziape ukitu bat.",
        ),
        (
            "La que corre libre por el desierto. Vegetal y salvaje: portobello a la brasa, guacamole y lima.",
            "Basamortuan aske dabilena. Begetala eta basatia: txingarretan erretako portobelloa, guacamolea eta lima.",
        ),
        (
            '["Vaca madurada 180 g", "Cheddar ahumado", "Lechuga", "Tomate", "Cebolla morada", "Salsa de la casa", "Pan brioche"]',
            '["Behi ondua 180 g", "Cheddar ketua", "Letxuga", "Tomatea", "Tipula morea", "Etxeko saltsa", "Brioche ogia"]',
        ),
        (
            '["Vaca 180 g", "Pepper jack", "Jalapeños asados", "Mayo de chipotle", "Lechuga", "Pan de maíz"]',
            '["Behia 180 g", "Pepper jack", "Jalapeño erreak", "Chipotle maionesa", "Letxuga", "Arto-ogia"]',
        ),
        (
            '["Doble vaca 2×120 g", "Bacon ahumado", "Aros de cebolla", "BBQ al bourbon", "Cheddar", "Pan brioche"]',
            '["Behi bikoitza 2×120 g", "Bacon ketua", "Tipula-eraztunak", "Bourbon BBQ", "Cheddarra", "Brioche ogia"]',
        ),
        (
            '["Vaca 180 g", "Doble cheddar", "Huevo frito", "Miel y mostaza", "Pepinillos", "Pan de patata"]',
            '["Behia 180 g", "Cheddar bikoitza", "Arrautza frijitua", "Eztia eta ziapea", "Pepinilloak", "Patata-ogia"]',
        ),
        (
            '["Portobello a la brasa", "Guacamole", "Tomate", "Brotes verdes", "Alioli de lima", "Pan integral"]',
            '["Txingarretako portobelloa", "Guacamolea", "Tomatea", "Kimu berdeak", "Lima-alioli", "Ogi integrala"]',
        ),
        (
            '"Hamburguesa El Forajido con lechuga, queso, tomate, carne y cebolla"',
            '"El Forajido hanburgesa: letxuga, gazta, tomatea, okela eta tipula"',
        ),
        (
            '"Hamburguesa Sheriff Picante con lechuga, queso, jalapeños, carne y salsa picante"',
            '"Sheriff Picante hanburgesa: letxuga, gazta, jalapeñoak, okela eta saltsa pikantea"',
        ),
        (
            '"Hamburguesa La Diligencia con aros de cebolla, salsa barbacoa y carne"',
            '"La Diligencia hanburgesa: tipula-eraztunak, barbakoa saltsa eta okela"',
        ),
        (
            '"Hamburguesa Fiebre del Oro con huevo, queso cheddar, carne y salsa de miel y mostaza"',
            '"Fiebre del Oro hanburgesa: arrautza, cheddar gazta, okela eta ezti-ziape saltsa"',
        ),
        (
            '"Hamburguesa vegetal Coyote Verde con brotes verdes, guacamole, portobello y tomate"',
            '"Coyote Verde hanburgesa begetarianoa: kimu berdeak, guacamolea, portobelloa eta tomatea"',
        ),
        ("// Carta: cada hamburguesa", "// Karta (euskera): cada hamburguesa"),
    ],
    "contacto.php": [
        (
            "Contacto y reservas para eventos | El Forajido Burger Wagon",
            "Kontaktua eta ekitaldietarako erreserbak | El Forajido",
        ),
        (
            "Escríbenos para reservar el foodtruck en bodas, festivales o eventos de empresa, con menú cerrado desde 40 personas. Consulta también la ruta de la semana.",
            "Idatzi iezaguzu foodtrucka ezkontza, jaialdi edo enpresa-ekitaldietarako erreserbatzeko, 40 pertsonatik gorako menu itxiarekin. Begiratu asteko ibilbidea ere.",
        ),
        (" Contacto <span", " Kontaktua <span"),
        (">Manda un telegrama</h1>", ">Bidali telegrama bat</h1>"),
        (
            """Reservas para eventos, bodas, festivales o simplemente para decirnos qué burger te ha robado el
                        corazón.""",
            """Ekitaldi, ezkontza eta jaialdietarako erreserbak, edo zein burgerrek lapurtu dizun bihotza esateko
                        besterik ez.""",
        ),
        ("Escríbenos o contrata el carro\n", "Idatzi iezaguzu edo kontratatu gurdia\n"),
        ('aria-hidden="true">Urgente</p>', 'aria-hidden="true">Presakoa</p>'),
        ('for="nombreAjax">Nombre</label>', 'for="nombreAjax">Izena</label>'),
        ('for="emailAjax">Correo</label>', 'for="emailAjax">Posta elektronikoa</label>'),
        ('placeholder="billy@correo.com"', 'placeholder="billy@posta.eus"'),
        ('for="telefonoAjax">Teléfono</label>', 'for="telefonoAjax">Telefonoa</label>'),
        ('for="fechaEventoAjax">Fecha del evento</label>', 'for="fechaEventoAjax">Ekitaldiaren data</label>'),
        ('<legend class="artForm02-bis__etiqueta">Motivo</legend>', '<legend class="artForm02-bis__etiqueta">Arrazoia</legend>'),
        ("<span>Evento privado</span>", "<span>Ekitaldi pribatua</span>"),
        ("<span>Festival</span>", "<span>Jaialdia</span>"),
        ("<span>Empresa</span>", "<span>Enpresa</span>"),
        ("<span>Otro</span>", "<span>Beste bat</span>"),
        ('for="mensajeAjax">Mensaje</label>', 'for="mensajeAjax">Mezua</label>'),
        (
            'placeholder="Necesitamos el carro para 120 forajidos hambrientos. STOP."',
            'placeholder="Gurdia behar dugu 120 legez kanpoko goseentzat. STOP."',
        ),
        (
            "Acepto que se usen mis datos para responder a este telegrama",
            "Onartzen dut nire datuak telegrama honi erantzuteko erabiltzea",
        ),
        ("Resuelve esta operación:", "Ebatzi eragiketa hau:"),
        ('value="Enviar telegrama ★"', 'value="Bidali telegrama ★"'),
        (">Telegrama enviado</h4>", ">Telegrama bidalita</h4>"),
        ("Tu mensaje se ha recibido correctamente.", "Zure mezua behar bezala jaso dugu."),
        (">Escribir otro telegrama</button>", ">Idatzi beste telegrama bat</button>"),
        ('aria-label="Enviando telegrama"', 'aria-label="Telegrama bidaltzen"'),
        (">Teléfono / WhatsApp</p>", ">Telefonoa / WhatsApp</p>"),
        ('<p class="artContacto01__etiqueta">Correo</p>', '<p class="artContacto01__etiqueta">Posta elektronikoa</p>'),
        ('<p class="artContacto01__etiqueta">Horario</p>', '<p class="artContacto01__etiqueta">Ordutegia</p>'),
        ("Mar – Dom · 13:00 a 00:00", "Ar. – Ig. · 13:00etatik 00:00etara"),
        ('<p class="artContacto01__etiqueta">Redes</p>', '<p class="artContacto01__etiqueta">Sare sozialak</p>'),
        (">Contrata el carro</h3>", ">Kontratatu gurdia</h3>"),
        (
            "Llevamos la parrilla a tu evento con menú cerrado desde 40 personas.",
            "Parrilla zure ekitaldira eramaten dugu, 40 pertsonatik gorako menu itxiarekin.",
        ),
        ("<li>Bodas y fiestas privadas</li>", "<li>Ezkontzak eta festa pribatuak</li>"),
        ("<li>Festivales y conciertos</li>", "<li>Jaialdiak eta kontzertuak</li>"),
        ("<li>Eventos de empresa</li>", "<li>Enpresa-ekitaldiak</li>"),
        (">Pedir presupuesto</a>", ">Eskatu aurrekontua</a>"),
        (">Mapa de la ruta</h2>", ">Ibilbidearen mapa</h2>"),
        ("Semana 47 · Madrid", "47. astea · Madril"),
    ],
    "quienessomos.php": [
        (
            "Quiénes somos | La historia del foodtruck El Forajido",
            "Nortzuk gara | El Forajido hanburgesa-foodtruckaren historia",
        ),
        (
            "De una furgoneta Citroën HY de 1972 a más de 60.000 km de carretera y festivales: la historia de El Forajido, el foodtruck de hamburguesas a la brasa.",
            "1972ko Citroën HY furgoneta batetik 60.000 km baino gehiagoko errepide eta jaialdietara: El Forajidoren historia, txingarretako hanburgesen foodtrucka.",
        ),
        (" Nuestra historia ", " Gure historia "),
        (">Quiénes somos</h1>", ">Nortzuk gara</h1>"),
        ("La historia de El Forajido en tres capítulos", "El Forajidoren historia hiru kapitulutan"),
        ("Scroll 1 · Origen", "Scroll 1 · Jatorria"),
        ("Scroll 2 · El camino →", "Scroll 2 · Bidea →"),
        ("Scroll 3 · Eventos · Llegada", "Scroll 3 · Ekitaldiak · Iritsiera"),
        ("★ 01 Origen", "★ 01 Jatorria"),
        ("<span>01 Origen</span>", "<span>01 Jatorria</span>"),
        ("★ 02 El camino", "★ 02 Bidea"),
        ("<span>02 El camino</span>", "<span>02 Bidea</span>"),
        ("★ 03 Eventos", "★ 03 Ekitaldiak"),
        ("<span>03 Eventos</span>", "<span>03 Ekitaldiak</span>"),
        ("2017 · El origen", "2017 · Jatorria"),
        ("2018 – 2023 · El camino", "2018 – 2023 · Bidea"),
        ("2024 – hoy · Los eventos", "2024 – gaur · Ekitaldiak"),
        (">Capítulo I</h3>", ">I. kapitulua</h3>"),
        (">Capítulo II</h3>", ">II. kapitulua</h3>"),
        (">Capítulo III</h3>", ">III. kapitulua</h3>"),
        (
            """Todo empezó con una furgoneta Citroën HY de 1972 abandonada en un rancho de
                                            Albacete y dos hermanos, Lucía y Marcos, que juraron devolverla al camino.""",
            """Dena Albaceteko arrantxo batean abandonatutako 1972ko Citroën HY furgoneta
                                            batekin hasi zen, eta hura berriro bidera itzultzeko zin egin zuten bi
                                            anai-arrebekin: Lucía eta Marcos.""",
        ),
        (
            """La pintaron de rojo, le montaron una parrilla de leña y la llamaron El Forajido:
                                            porque en la cocina de verdad, las reglas se las salta uno mismo. Primer día: 40
                                            burgers y ni una de sobra.""",
            """Gorriz margotu zuten, egur-parrilla bat muntatu zioten eta El Forajido izena jarri
                                            zioten: benetako sukaldean, arauak norberak hausten dituelako. Lehen eguna: 40
                                            burger, eta bat bera ere ez soberan.""",
        ),
        (
            """Más de 60.000 kilómetros por carreteras secundarias, de la Mancha al Cabo de
                                            Gata. Cada parada nos dejó una receta, un amigo y alguna rueda pinchada.""",
            """60.000 kilometro baino gehiago bigarren mailako errepideetan barrena, Mantxatik
                                            Cabo de Gataraino. Geldialdi bakoitzak errezeta bat, lagun bat eta gurpil
                                            zulaturen bat utzi zizkigun.""",
        ),
        (
            """Aprendimos el chipotle en Almería, la barbacoa al bourbon en un festival de
                                            country y que el mejor sitio para aparcar es siempre donde la gente se queda a
                                            charlar.""",
            """Chipotlea Almerian ikasi genuen, bourbon-barbakoa country jaialdi batean, eta
                                            aparkatzeko lekurik onena beti jendea berriketan geratzen den tokia dela.""",
        ),
        (
            """Hoy el carro se deja ver allí donde hay música, fuego y gente con hambre.
                                            Algunas de las paradas que no olvidamos:""",
            """Gaur egun, gurdia musika, sua eta jende gosetua dagoen lekuetan ikusten da.
                                            Ahaztuko ez ditugun geldialdietako batzuk:""",
        ),
        ("Madrid · 2024 y 2025", "Madril · 2024 eta 2025"),
        ("Getafe · 3 ediciones", "Getafe · 3 edizio"),
        ("Valencia · 2026", "Valentzia · 2026"),
        (">+120 bodas<", ">+120 ezkontza<"),
        (">Por toda la península<", ">Penintsula osoan<"),
        (">Premio Mejor Burger<", ">Burger Onenaren Saria<"),
        (
            'aria-label="El food truck El Forajido recorre la carretera del desierto hasta una hoguera, donde abre su ventana a un grupo de personas"',
            'aria-label="El Forajido foodtrucka basamortuko errepidean doa su baten ondoraino, eta han jende talde bati irekitzen dio leihoa"',
        ),
        ("→ Avanza con el scroll", "→ Aurrera egin scrollarekin"),
    ],
}


def cambiar_rutas(texto):
    """Pasa las rutas es a eu salvo en las líneas que deben apuntar al castellano."""
    lineas = []
    for linea in texto.split("\n"):
        if 'hreflang="es"' not in linea and 'hreflang="x-default"' not in linea:
            for es, eu in RUTAS.items():
                linea = re.sub(r'(url\(|app_url\()"' + re.escape(es) + r'"', r'\1"' + eu + '"', linea)
        lineas.append(linea)
    return "\n".join(lineas)


for nombre, tabla in PAGINAS.items():
    texto = (vistas / "es" / nombre).read_text(encoding="utf-8")
    for es, eu in COMUN + tabla:
        if es not in texto:
            raise SystemExit(f"{nombre}: no encontrado: {es[:70]!r}")
        texto = texto.replace(es, eu)
    texto = cambiar_rutas(texto)
    texto = texto.replace('"-es"', '"-eu"')
    texto = re.sub(r'(id|aria-labelledby|href)="(#?[a-z0-9-]+)-es"', r'\1="\2-eu"', texto)
    (vistas / "eu" / nombre).write_text(texto, encoding="utf-8")
    print("ok", nombre)
