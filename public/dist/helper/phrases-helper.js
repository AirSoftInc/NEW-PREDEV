let newsFilter = [];
let newsFinalFilter = [];

const yearsInForce = ["2018", "2019", "2020"];

const mainDiscriminationWords = [
    "DISCRIMINACIÓN", "DISCRIMINACION", "DISCRIMINAR", "DISCRIMINA", "DISCRIMINÓ",
    "DISCRIMINO", "DISCRIMINARON", "DISCRIMINADO", "DISCRIMINADA", "DISCRIMINADOS",
    "DISCRIMINADAS", "RACISMO", "RACISTA", "RACISTAS", "BULLYNG", "CONAPRED"
];

 const mainNoDiscriminationWords = [
    "FELICIDAD", "GANAR", "FELIZ", "GANAN", "PREMIO","PREMIARON","FELICITARON", 
    "FELICITACION", "GANARON", "APOYAN", "INCLUSIÓN", "INCLUSION", "ERRADICAR"
];

//This array content newspaper of the Veracruz state
// const newspaper = [
//     "DIARIO_XALAPA","MUNDO_XALAPA", "HERALDO_COATZACOALCOS", "DIARIO_LIBERAL", "*EL_MUNDO",
//     "EL_BUEN_TONO", "NOTICIAS_PERFIL", "DIARIO_SIN_SECRETOS", "*LA_POLITICA", "*VANGUARDIA",
//     "EXCELSIOR", "SOL_MEXICO", "MILENIO", "YAHOO", "TWITTER", "GOOGLE", "BING", "IMAGEN_VERACRUZ"
// ];

const newspaper = [ "VANGUARDIA" ];

const discriminationPhrases = [
    buildRegex("CRÍMENES DE ODIO"), buildRegex("DELITOS DE ODIO"), buildRegex("COMUNIDAD GAY"),
    buildRegex("DIVERSIDAD SEXUAL SIN"), buildRegex("VIOLENCIA CONTRA LAS MUJERES"),
    buildRegex("CONTRA GAYS"), buildRegex("VIOLENCIA CONTRA MUJERES"), buildRegex("BODAS GAY"),
    buildRegex("PINCHES INDIOS")
];

const nonDiscriminationPhrases = [
    buildRegex("NO DISCRIMINACIÓN"), buildRegex("SIN DISCRIMINACIÓN"), buildRegex("PREVENIR LA DISCRIMINACIÓN"),
    buildRegex("ELIMINAR LA DISCRIMINACIÓN"), buildRegex("CONTRA DE LA DISCRIMINACIÓN"),
    buildRegex("ELIMINACIÓN DE LA DISCRIMINACIÓN"), buildRegex("COMBATE A LA DISCRIMINACIÓN"), buildRegex("EVITAR DISCRIMINACIÓN"),
    buildRegex("CONTRA LA DISCRIMINACIÓN"), buildRegex("PREVENIR DISCRIMINACIÓN"), buildRegex("CONCIENCIA SOBRE LA DISCRIMINACIÓN"),
    buildRegex("EVITAR LA DISCRIMINACIÓN"), buildRegex("NO HAY DISCRIMINACIÓN")
];
