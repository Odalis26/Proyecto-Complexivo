import{Router} from 'express'
const router = Router()


router.get('/', (req,res)=> res.render('index', { title: 'Salud & Belleza'}))

router.get('/about', (req,res)=> res.render('about', { title: 'About me'}))

router.get('/contact', (req,res)=> res.render('contact', { title: 'Contact me'}))

router.get('/zapatonino', (req,res)=> res.render('zapatonino', { title: 'Zapatos niños '}))
router.get('/zapatonino1', (req,res)=> res.render('zapatonino1', { title: 'Zapatos niños '}))
router.get('/zapatonino2', (req,res)=> res.render('zapatonino2', { title: 'Zapatos niños '}))
router.get('/zapatonino3', (req,res)=> res.render('zapatonino3', { title: 'Zapatos niños '}))
router.get('/zapatonino4', (req,res)=> res.render('zapatonino4', { title: 'Zapatos niños '}))
router.get('/zapatonino5', (req,res)=> res.render('zapatonino5', { title: 'Zapatos niños '}))
router.get('/zapatonino6', (req,res)=> res.render('zapatonino6', { title: 'Zapatos niños '}))
router.get('/zapatonino7', (req,res)=> res.render('zapatonino7', { title: 'Zapatos niños '}))


router.get('/zapatoadole', (req,res)=> res.render('zapatoadole', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadole1', (req,res)=> res.render('zapatoadole1', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadole2', (req,res)=> res.render('zapatoadole2', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadole3', (req,res)=> res.render('zapatoadole3', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadole4', (req,res)=> res.render('zapatoadole4', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadole5', (req,res)=> res.render('zapatoadole5', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadole6', (req,res)=> res.render('zapatoadole6', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadole7', (req,res)=> res.render('zapatoadole7', { title: 'Zapatos Adolescentes'}))


router.get('/zapatoadoles', (req,res)=> res.render('zapatoadoles', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadoles1', (req,res)=> res.render('zapatoadoles1', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadoles2', (req,res)=> res.render('zapatoadoles2', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadoles3', (req,res)=> res.render('zapatoadoles3', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadoles4', (req,res)=> res.render('zapatoadoles4', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadoles5', (req,res)=> res.render('zapatoadoles5', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadoles6', (req,res)=> res.render('zapatoadoles6', { title: 'Zapatos Adolescentes'}))
router.get('/zapatoadoles7', (req,res)=> res.render('zapatoadoles7', { title: 'Zapatos Adolescentes'}))


router.get('/zapatocuero', (req,res)=> res.render('zapatocuero', { title: 'Zapatos Cueros'}))
router.get('/zapatocuero1', (req,res)=> res.render('zapatocuero1', { title: 'Zapatos Cueros'}))
router.get('/zapatocuero2', (req,res)=> res.render('zapatocuero2', { title: 'Zapatos Cueros'}))
router.get('/zapatocuero3', (req,res)=> res.render('zapatocuero3', { title: 'Zapatos Cueros'}))
router.get('/zapatocuero4', (req,res)=> res.render('zapatocuero4', { title: 'Zapatos Cueros'}))
router.get('/zapatocuero5', (req,res)=> res.render('zapatocuero5', { title: 'Zapatos Cueros'}))
router.get('/zapatocuero6', (req,res)=> res.render('zapatocuero6', { title: 'Zapatos Cueros'}))
router.get('/zapatocuero7', (req,res)=> res.render('zapatocuero7', { title: 'Zapatos Cueros'}))


router.get('/zapatocuerom', (req,res)=> res.render('zapatocuerom', { title: 'Zapatos Cueros Mujer'}))
router.get('/zapatocuerom1', (req,res)=> res.render('zapatocuerom1', { title: 'Zapatos Cueros Mujer'}))
router.get('/zapatocuerom2', (req,res)=> res.render('zapatocuerom2', { title: 'Zapatos Cueros Mujer'}))
router.get('/zapatocuerom3', (req,res)=> res.render('zapatocuerom3', { title: 'Zapatos Cueros Mujer'}))
router.get('/zapatocuerom4', (req,res)=> res.render('zapatocuerom4', { title: 'Zapatos Cueros Mujer'}))
router.get('/zapatocuerom5', (req,res)=> res.render('zapatocuerom5', { title: 'Zapatos Cueros Mujer'}))
router.get('/zapatocuerom6', (req,res)=> res.render('zapatocuerom6', { title: 'Zapatos Cueros Mujer'}))
router.get('/zapatocuerom7', (req,res)=> res.render('zapatocuerom7', { title: 'Zapatos Cueros Mujer'}))


router.get('/zapatoanciano', (req,res)=> res.render('zapatoanciano', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciano1', (req,res)=> res.render('zapatoanciano1', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciano2', (req,res)=> res.render('zapatoanciano2', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciano3', (req,res)=> res.render('zapatoanciano3', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciano4', (req,res)=> res.render('zapatoanciano4', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciano5', (req,res)=> res.render('zapatoanciano5', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciano6', (req,res)=> res.render('zapatoanciano6', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciano7', (req,res)=> res.render('zapatoanciano7', { title: 'Zapatos de Adulto '}))



router.get('/zapatoanciana', (req,res)=> res.render('zapatoanciana', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciana1', (req,res)=> res.render('zapatoanciana1', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciana2', (req,res)=> res.render('zapatoanciana2', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciana3', (req,res)=> res.render('zapatoanciana3', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciana4', (req,res)=> res.render('zapatoanciana4', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciana5', (req,res)=> res.render('zapatoanciana5', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciana6', (req,res)=> res.render('zapatoanciana6', { title: 'Zapatos de Adulto '}))
router.get('/zapatoanciana7', (req,res)=> res.render('zapatoanciana7', { title: 'Zapatos de Adulto '}))


router.get('/zapatodeportivo', (req,res)=> res.render('zapatodeportivo', { title: 'Zapatos de Deportivo '}))
router.get('/zapatodeportivo1', (req,res)=> res.render('zapatodeportivo1', { title: 'Zapatos de Deportivo '}))
router.get('/zapatodeportivo2', (req,res)=> res.render('zapatodeportivo2', { title: 'Zapatos de Deportivo '}))
router.get('/zapatodeportivo3', (req,res)=> res.render('zapatodeportivo3', { title: 'Zapatos de Deportivo '}))
router.get('/zapatodeportivo4', (req,res)=> res.render('zapatodeportivo4', { title: 'Zapatos de Deportivo '}))
router.get('/zapatodeportivo5', (req,res)=> res.render('zapatodeportivo5', { title: 'Zapatos de Deportivo '}))
router.get('/zapatodeportivo6', (req,res)=> res.render('zapatodeportivo6', { title: 'Zapatos de Deportivo '}))
router.get('/zapatodeportivo7', (req,res)=> res.render('zapatodeportivo7', { title: 'Zapatos de Deportivo '}))


router.get('/zapatodeportivom', (req,res)=> res.render('zapatodeportivom', { title: 'Zapatos de Deportivo Mujer '}))
router.get('/zapatodeportivom1', (req,res)=> res.render('zapatodeportivom1', { title: 'Zapatos de Deportivo Mujer '}))
router.get('/zapatodeportivom2', (req,res)=> res.render('zapatodeportivom2', { title: 'Zapatos de Deportivo Mujer '}))
router.get('/zapatodeportivom3', (req,res)=> res.render('zapatodeportivom3', { title: 'Zapatos de Deportivo Mujer '}))
router.get('/zapatodeportivom4', (req,res)=> res.render('zapatodeportivom4', { title: 'Zapatos de Deportivo Mujer '}))
router.get('/zapatodeportivom5', (req,res)=> res.render('zapatodeportivom5', { title: 'Zapatos de Deportivo Mujer '}))
router.get('/zapatodeportivom6', (req,res)=> res.render('zapatodeportivom6', { title: 'Zapatos de Deportivo Mujer '}))
router.get('/zapatodeportivom7', (req,res)=> res.render('zapatodeportivom7', { title: 'Zapatos de Deportivo Mujer '}))



router.get('/zandalla', (req,res)=> res.render('zandalla', { title: 'Zandalla de Hombre '}))
router.get('/zandalla1', (req,res)=> res.render('zandalla1', { title: 'Zandalla de Hombre '}))
router.get('/zandalla2', (req,res)=> res.render('zandalla2', { title: 'Zandalla de Hombre '}))
router.get('/zandalla3', (req,res)=> res.render('zandalla3', { title: 'Zandalla de Hombre '}))
router.get('/zandalla4', (req,res)=> res.render('zandalla4', { title: 'Zandalla de Hombre '}))
router.get('/zandalla5', (req,res)=> res.render('zandalla5', { title: 'Zandalla de Hombre '}))
router.get('/zandalla6', (req,res)=> res.render('zandalla6', { title: 'Zandalla de Hombre '}))
router.get('/zandalla7', (req,res)=> res.render('zandalla7', { title: 'Zandalla de Hombre '}))


router.get('/zandallamujer', (req,res)=> res.render('zandallamujer', { title: 'Zandalla de Mujer '}))
router.get('/zandallamujer1', (req,res)=> res.render('zandallamujer1', { title: 'Zandalla de Mujer '}))
router.get('/zandallamujer2', (req,res)=> res.render('zandallamujer2', { title: 'Zandalla de Mujer '}))
router.get('/zandallamujer3', (req,res)=> res.render('zandallamujer3', { title: 'Zandalla de Mujer '}))
router.get('/zandallamujer4', (req,res)=> res.render('zandallamujer4', { title: 'Zandalla de Mujer '}))
router.get('/zandallamujer5', (req,res)=> res.render('zandallamujer5', { title: 'Zandalla de Mujer '}))
router.get('/zandallamujer6', (req,res)=> res.render('zandallamujer6', { title: 'Zandalla de Mujer '}))
router.get('/zandallamujer7', (req,res)=> res.render('zandallamujer7', { title: 'Zandalla de Mujer '}))


router.get('/botas', (req,res)=> res.render('botas', { title: 'Botas de Hombre '}))
router.get('/botas1', (req,res)=> res.render('botas1', { title: 'Botas de Hombre '}))
router.get('/botas2', (req,res)=> res.render('botas2', { title: 'Botas de Hombre '}))
router.get('/botas3', (req,res)=> res.render('botas3', { title: 'Botas de Hombre '}))
router.get('/botas4', (req,res)=> res.render('botas4', { title: 'Botas de Hombre '}))
router.get('/botas5', (req,res)=> res.render('botas5', { title: 'Botas de Hombre '}))
router.get('/botas6', (req,res)=> res.render('botas6', { title: 'Botas de Hombre '}))
router.get('/botas7', (req,res)=> res.render('botas7', { title: 'Botas de Hombre '}))





router.get('/tacos', (req,res)=> res.render('tacos', { title: 'Tacos para Mujer '}))
router.get('/tacos1', (req,res)=> res.render('tacos1', { title: 'Tacos para Mujer '}))
router.get('/tacos2', (req,res)=> res.render('tacos2', { title: 'Tacos para Mujer '}))
router.get('/tacos3', (req,res)=> res.render('tacos3', { title: 'Tacos para Mujer '}))
router.get('/tacos4', (req,res)=> res.render('tacos4', { title: 'Tacos para Mujer '}))
router.get('/tacos5', (req,res)=> res.render('tacos5', { title: 'Tacos para Mujer '}))
router.get('/tacos6', (req,res)=> res.render('tacos6', { title: 'Tacos para Mujer '}))
router.get('/tacos7', (req,res)=> res.render('tacos7', { title: 'Tacos para Mujer '}))




router.get('/zapatolara', (req,res)=> res.render('zapatolara', { title: 'Zapato para Hombre '}))
router.get('/zapatolara1', (req,res)=> res.render('zapatolara1', { title: 'Zapato para Hombre '}))
router.get('/zapatolara2', (req,res)=> res.render('zapatolara2', { title: 'Zapato para Hombre '}))
router.get('/zapatolara3', (req,res)=> res.render('zapatolara3', { title: 'Zapato para Hombre '}))
router.get('/zapatolara4', (req,res)=> res.render('zapatolara4', { title: 'Zapato para Hombre '}))
router.get('/zapatolara5', (req,res)=> res.render('zapatolara5', { title: 'Zapato para Hombre '}))
router.get('/zapatolara6', (req,res)=> res.render('zapatolara6', { title: 'Zapato para Hombre '}))
router.get('/zapatolara7', (req,res)=> res.render('zapatolara7', { title: 'Zapato para Hombre '}))




router.get('/zapatomujerlara', (req,res)=> res.render('zapatomujerlara', { title: 'Zapato para Mujer '}))
router.get('/zapatomujerlara1', (req,res)=> res.render('zapatomujerlara1', { title: 'Zapato para Mujer '}))
router.get('/zapatomujerlara2', (req,res)=> res.render('zapatomujerlara2', { title: 'Zapato para Mujer '}))
router.get('/zapatomujerlara3', (req,res)=> res.render('zapatomujerlara3', { title: 'Zapato para Mujer '}))
router.get('/zapatomujerlara4', (req,res)=> res.render('zapatomujerlara4', { title: 'Zapato para Mujer '}))
router.get('/zapatomujerlara5', (req,res)=> res.render('zapatomujerlara5', { title: 'Zapato para Mujer '}))
router.get('/zapatomujerlara6', (req,res)=> res.render('zapatomujerlara6', { title: 'Zapato para Mujer '}))
router.get('/zapatomujerlara7', (req,res)=> res.render('zapatomujerlara7', { title: 'Zapato para Mujer '}))



router.get('/zapatovenu', (req,res)=> res.render('zapatovenu', { title: 'Zapato para Hombre '}))
router.get('/zapatovenu1', (req,res)=> res.render('zapatovenu1', { title: 'Zapato para Hombre '}))
router.get('/zapatovenu2', (req,res)=> res.render('zapatovenu2', { title: 'Zapato para Hombre '}))
router.get('/zapatovenu3', (req,res)=> res.render('zapatovenu3', { title: 'Zapato para Hombre '}))
router.get('/zapatovenu4', (req,res)=> res.render('zapatovenu4', { title: 'Zapato para Hombre '}))
router.get('/zapatovenu5', (req,res)=> res.render('zapatovenu5', { title: 'Zapato para Hombre '}))
router.get('/zapatovenu6', (req,res)=> res.render('zapatovenu6', { title: 'Zapato para Hombre '}))
router.get('/zapatovenu7', (req,res)=> res.render('zapatovenu7', { title: 'Zapato para Hombre '}))


router.get('/zapatovenumujer', (req,res)=> res.render('zapatovenumujer', { title: 'Tacos para Mujer '}))
router.get('/zapatovenumujer1', (req,res)=> res.render('zapatovenumujer1', { title: 'Tacos para Mujer '}))
router.get('/zapatovenumujer2', (req,res)=> res.render('zapatovenumujer2', { title: 'Tacos para Mujer '}))
router.get('/zapatovenumujer3', (req,res)=> res.render('zapatovenumujer3', { title: 'Tacos para Mujer '}))
router.get('/zapatovenumujer4', (req,res)=> res.render('zapatovenumujer4', { title: 'Tacos para Mujer '}))
router.get('/zapatovenumujer5', (req,res)=> res.render('zapatovenumujer5', { title: 'Tacos para Mujer '}))
router.get('/zapatovenumujer6', (req,res)=> res.render('zapatovenumujer6', { title: 'Tacos para Mujer '}))
router.get('/zapatovenumujer7', (req,res)=> res.render('zapatovenumujer7', { title: 'Tacos para Mujer '}))



router.get('/clancla', (req,res)=> res.render('clancla', { title: 'Clancla para Hombre '}))
router.get('/clancla1', (req,res)=> res.render('clancla1', { title: 'Clancla para Hombre '}))
router.get('/clancla2', (req,res)=> res.render('clancla2', { title: 'Clancla para Hombre '}))
router.get('/clancla3', (req,res)=> res.render('clancla3', { title: 'Clancla para Hombre '}))
router.get('/clancla4', (req,res)=> res.render('clancla4', { title: 'Clancla para Hombre '}))
router.get('/clancla5', (req,res)=> res.render('clancla5', { title: 'Clancla para Hombre '}))
router.get('/clancla6', (req,res)=> res.render('clancla6', { title: 'Clancla para Hombre '}))
router.get('/clancla7', (req,res)=> res.render('clancla7', { title: 'Clancla para Hombre '}))


router.get('/clanclamujer', (req,res)=> res.render('clanclamujer', { title: 'Clancla para  Mujer '}))
router.get('/clanclamujer1', (req,res)=> res.render('clanclamujer1', { title: 'Clancla para  Mujer '}))
router.get('/clanclamujer2', (req,res)=> res.render('clanclamujer2', { title: 'Clancla para  Mujer '}))
router.get('/clanclamujer3', (req,res)=> res.render('clanclamujer3', { title: 'Clancla para  Mujer '}))
router.get('/clanclamujer4', (req,res)=> res.render('clanclamujer4', { title: 'Clancla para  Mujer '}))
router.get('/clanclamujer5', (req,res)=> res.render('clanclamujer5', { title: 'Clancla para  Mujer '}))
router.get('/clanclamujer6', (req,res)=> res.render('clanclamujer6', { title: 'Clancla para  Mujer '}))
router.get('/clanclamujer7', (req,res)=> res.render('clanclamujer7', { title: 'Clancla para  Mujer '}))


router.get('/zapato', (req,res)=> res.render('zapato', { title: 'Zapatos '}))
router.get('/zapato1', (req,res)=> res.render('zapato1', { title: 'Zapatos '}))
router.get('/zapato2', (req,res)=> res.render('zapato2', { title: 'Zapatos '}))
router.get('/zapato3', (req,res)=> res.render('zapato3', { title: 'Zapatos '}))
router.get('/zapato4', (req,res)=> res.render('zapato4', { title: 'Zapatos '}))
router.get('/zapato5', (req,res)=> res.render('zapato5', { title: 'Zapatos '}))
router.get('/zapato6', (req,res)=> res.render('zapato6', { title: 'Zapatos '}))
router.get('/zapato7', (req,res)=> res.render('zapato7', { title: 'Zapatos '}))



router.get('/mesagge', (req,res)=> res.render('mesagge', { title: 'mesagge'}))

router.get('/categorias', (req,res)=> res.render('categorias', { title: 'categorias'}))

router.get('/categorias-zapatos', (req,res)=> res.render('categorias-zapatos', { title: 'categorias-zapatos'}))
router.get('/categorias-zapatosninonina', (req,res)=> res.render('categorias-zapatosninonina', { title: 'categorias-zapatos'}))
router.get('/categorias-zapatosadolescentes', (req,res)=> res.render('categorias-zapatosadolescentes', { title: 'categorias-zapatos'}))
router.get('/categorias-zapatosadulto', (req,res)=> res.render('categorias-zapatosadulto', { title: 'categorias-zapatos'}))
router.get('/categorias-zapatosmayores', (req,res)=> res.render('categorias-zapatosmayores', { title: 'categorias-zapatos'}))
router.get('/categorias-zapatosdeportivos', (req,res)=> res.render('categorias-zapatosdeportivos', { title: 'categorias-zapatos'}))
router.get('/categorias-zapatosdeportivos', (req,res)=> res.render('categorias-zapatosdeportivos', { title: 'categorias-zapatos'}))
router.get('/categorias-sandalias', (req,res)=> res.render('categorias-sandalias', { title: 'categorias-zapatos'}))



router.get('/paleta', (req,res)=> res.render('paleta', { title: 'paleta'}))

router.get('/esmalte', (req,res)=> res.render('esmalte', { title: 'esmalte'}))

router.get('/sombras', (req,res)=> res.render('sombras', { title: 'sombras'}))

router.get('/unias', (req,res)=> res.render('unias', { title: 'unias'}))

router.get('/maquillaje', (req,res)=> res.render('maquillaje', { title: 'maquillaje'}))

router.get('/cara', (req,res)=> res.render('cara', { title: 'cara'}))

router.get('/polvo', (req,res)=> res.render('polvo', { title: 'polvo'}))

router.get('/mascarilla', (req,res)=> res.render('mascarilla', { title: 'mascarilla'}))

router.get('/corrector', (req,res)=> res.render('corrector', { title: 'corrector'}))
export default router
