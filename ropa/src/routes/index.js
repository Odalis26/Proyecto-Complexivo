import{Router} from 'express'
const router = Router()


router.get('/', (req,res)=> res.render('index', { title: 'Salud & Belleza'}))

router.get('/about', (req,res)=> res.render('about', { title: 'About me'}))

router.get('/contact', (req,res)=> res.render('contact', { title: 'Contact me'}))

router.get('/chaqueta', (req,res)=> res.render('chaqueta', { title: 'Chaqueta'}))
router.get('/chaqueta1', (req,res)=> res.render('chaqueta1', { title: 'Chaqueta'}))
router.get('/chaqueta2', (req,res)=> res.render('chaqueta2', { title: 'Chaqueta'}))
router.get('/chaqueta3', (req,res)=> res.render('chaqueta3', { title: 'Chaqueta'}))
router.get('/chaqueta4', (req,res)=> res.render('chaqueta4', { title: 'Chaqueta'}))
router.get('/chaqueta5', (req,res)=> res.render('chaqueta5', { title: 'Chaqueta'}))
router.get('/chaqueta6', (req,res)=> res.render('chaqueta6', { title: 'Chaqueta'}))
router.get('/chaqueta7', (req,res)=> res.render('chaqueta7', { title: 'Chaqueta'}))


router.get('/chaquetamujer', (req,res)=> res.render('chaquetamujer', { title: 'Chaqueta'}))
router.get('/chaquetamujer1', (req,res)=> res.render('chaquetamujer1', { title: 'Chaqueta'}))
router.get('/chaquetamujer2', (req,res)=> res.render('chaquetamujer2', { title: 'Chaqueta'}))
router.get('/chaquetamujer3', (req,res)=> res.render('chaquetamujer3', { title: 'Chaqueta'}))
router.get('/chaquetamujer4', (req,res)=> res.render('chaquetamujer4', { title: 'Chaqueta'}))
router.get('/chaquetamujer5', (req,res)=> res.render('chaquetamujer5', { title: 'Chaqueta'}))
router.get('/chaquetamujer6', (req,res)=> res.render('chaquetamujer6', { title: 'Chaqueta'}))
router.get('/chaquetamujer7', (req,res)=> res.render('chaquetamujer7', { title: 'Chaqueta'}))



router.get('/camiseta', (req,res)=> res.render('camiseta', { title: 'Camiseta'}))
router.get('/camiseta1', (req,res)=> res.render('camiseta1', { title: 'Camiseta'}))
router.get('/camiseta2', (req,res)=> res.render('camiseta2', { title: 'Camiseta'}))
router.get('/camiseta3', (req,res)=> res.render('camiseta3', { title: 'Camiseta'}))
router.get('/camiseta4', (req,res)=> res.render('camiseta4', { title: 'Camiseta'}))
router.get('/camiseta5', (req,res)=> res.render('camiseta5', { title: 'Camiseta'}))
router.get('/camiseta6', (req,res)=> res.render('camiseta6', { title: 'Camiseta'}))
router.get('/camiseta7', (req,res)=> res.render('camiseta7', { title: 'Camiseta'}))



router.get('/camisetamujer', (req,res)=> res.render('camisetamujer', { title: 'Camiseta'}))
router.get('/camisetamujer1', (req,res)=> res.render('camisetamujer1', { title: 'Camiseta'}))
router.get('/camisetamujer2', (req,res)=> res.render('camisetamujer2', { title: 'Camiseta'}))
router.get('/camisetamujer3', (req,res)=> res.render('camisetamujer3', { title: 'Camiseta'}))
router.get('/camisetamujer4', (req,res)=> res.render('camisetamujer4', { title: 'Camiseta'}))
router.get('/camisetamujer5', (req,res)=> res.render('camisetamujer5', { title: 'Camiseta'}))
router.get('/camisetamujer6', (req,res)=> res.render('camisetamujer6', { title: 'Camiseta'}))
router.get('/camisetamujer7', (req,res)=> res.render('camisetamujer7', { title: 'Camiseta'}))



router.get('/pantalon', (req,res)=> res.render('pantalon', { title: 'Pantalón '}))
router.get('/pantalon1', (req,res)=> res.render('pantalon1', { title: 'Pantalón '}))
router.get('/pantalon2', (req,res)=> res.render('pantalon2', { title: 'Pantalón '}))
router.get('/pantalon3', (req,res)=> res.render('pantalon3', { title: 'Pantalón '}))
router.get('/pantalon4', (req,res)=> res.render('pantalon4', { title: 'Pantalón '}))
router.get('/pantalon5', (req,res)=> res.render('pantalon5', { title: 'Pantalón '}))
router.get('/pantalon6', (req,res)=> res.render('pantalon6', { title: 'Pantalón '}))
router.get('/pantalon7', (req,res)=> res.render('pantalon7', { title: 'Pantalón '}))



router.get('/pantalonmujer', (req,res)=> res.render('pantalonmujer', { title: 'Pantalón '}))
router.get('/pantalonmujer1', (req,res)=> res.render('pantalonmujer1', { title: 'Pantalón '}))
router.get('/pantalonmujer2', (req,res)=> res.render('pantalonmujer2', { title: 'Pantalón '}))
router.get('/pantalonmujer3', (req,res)=> res.render('pantalonmujer3', { title: 'Pantalón '}))
router.get('/pantalonmujer4', (req,res)=> res.render('pantalonmujer4', { title: 'Pantalón '}))
router.get('/pantalonmujer5', (req,res)=> res.render('pantalonmujer5', { title: 'Pantalón'}))
router.get('/pantalonmujer6', (req,res)=> res.render('pantalonmujer6', { title: 'Pantalón'}))
router.get('/pantalonmujer7', (req,res)=> res.render('pantalonmujer7', { title: 'Pantalón '}))






router.get('/shorts', (req,res)=> res.render('shorts', { title: 'Shorts '}))
router.get('/shorts1', (req,res)=> res.render('shorts1', { title: 'Shorts '}))
router.get('/shorts2', (req,res)=> res.render('shorts2', { title: 'Shorts '}))
router.get('/shorts3', (req,res)=> res.render('shorts3', { title: 'Shorts '}))
router.get('/shorts4', (req,res)=> res.render('shorts4', { title: 'Shorts '}))
router.get('/shorts5', (req,res)=> res.render('shorts5', { title: 'Shorts '}))
router.get('/shorts6', (req,res)=> res.render('shorts6', { title: 'Shorts '}))
router.get('/shorts7', (req,res)=> res.render('shorts7', { title: 'Shorts '}))


router.get('/shortsmujer', (req,res)=> res.render('shortsmujer', { title: 'Shorts '}))
router.get('/shortsmujer1', (req,res)=> res.render('shortsmujer1', { title: 'Shorts '}))
router.get('/shortsmujer2', (req,res)=> res.render('shortsmujer2', { title: 'Shorts '}))
router.get('/shortsmujer3', (req,res)=> res.render('shortsmujer3', { title: 'Shorts '}))
router.get('/shortsmujer4', (req,res)=> res.render('shortsmujer4', { title: 'Shorts '}))
router.get('/shortsmujer5', (req,res)=> res.render('shortsmujer5', { title: 'Shorts '}))
router.get('/shortsmujer6', (req,res)=> res.render('shortsmujer6', { title: 'Shorts '}))
router.get('/shortsmujer7', (req,res)=> res.render('shortsmujer7', { title: 'Shorts '}))




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

router.get('/categorias-ropa', (req,res)=> res.render('categorias-ropa', { title: 'categorias-ropa'}))
router.get('/categorias-ropahombre', (req,res)=> res.render('categorias-ropahombre', { title: 'categorias-ropahombre'}))
router.get('/categorias-ropamujer', (req,res)=> res.render('categorias-ropamujer', { title: 'categorias-ropamujer'}))



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
