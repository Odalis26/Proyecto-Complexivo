import { Router } from 'express'
const router = Router()


router.get('/', (req, res) => res.render('index', { title: 'FASHION BEAUTY' }))

router.get('/about', (req, res) => res.render('about', { title: 'About me' }))

router.get('/categorias-resalta-labios', (req, res) => res.render('categorias-resalta-labios', { title: 'Resalta tus labios' }))

router.get('/brillo-labial', (req, res) => res.render('brillo-labial', { title: 'Brillo Labial' }))

router.get('/brillos-labiales', (req, res) => res.render('brillos-labiales', { title: 'Brillos Labiales' }))

router.get('/brillo-labial-publicidad', (req, res) => res.render('brillo-labial-publicidad', { title: 'Publicidad de Brillos Labiales' }))

router.get('/labiales', (req, res) => res.render('labiales', { title: 'Labiales Mate' }))

router.get('/labiales-descripcion', (req, res) => res.render('labiales-descripcion', { title: 'Información de Labiales Mate' }))

router.get('/labiales-publicidad', (req, res) => res.render('labiales-publicidad', { title: 'Publicidad de Labiales Mate' }))

router.get('/labiales-publicidad-2', (req, res) => res.render('labiales-publicidad-2', { title: 'Publicidad de Labiales Mate' }))

router.get('/labial-hidratante', (req, res) => res.render('labial-hidratante', { title: 'Labiales Hidratantes' }))

router.get('/labiales-hidratantes', (req, res) => res.render('labiales-hidratantes', { title: 'Labiales Hidratantes' }))

router.get('/labial-hidratante-publicidad', (req, res) => res.render('labial-hidratante-publicidad', { title: 'Publicidad de Labiales Hidratantes' }))

router.get('/categorias-paleta-sombras', (req, res) => res.render('categorias-paleta-sombras', { title: 'Paleta de sombras' }))

router.get('/paleta', (req, res) => res.render('paleta', { title: 'paleta' }))

router.get('/paleta-publicidad', (req, res) => res.render('paleta-publicidad', { title: 'Publicidad de Paletas de sombras' }))

router.get('/categorias-esmalte', (req, res) => res.render('categorias-esmalte', { title: 'Esmate para uñas' }))

router.get('/esmalte', (req, res) => res.render('esmalte', { title: 'esmalte' }))

router.get('/esmalte-publicidad', (req, res) => res.render('esmalte-publicidad', { title: 'Publicidad de esmaltes' }))

router.get('/categorias-match-perfecto', (req, res) => res.render('categorias-match-perfecto', { title: 'El match perfecto' }))

router.get('/polvo-publicidad', (req, res) => res.render('polvo-publicidad', { title: 'Publicidad de polvo' }))

router.get('/polvo', (req, res) => res.render('polvo', { title: 'polvo' }))

router.get('/maquillaje-publicidad', (req, res) => res.render('maquillaje-publicidad', { title: 'Publicidad de maquillaje' }))

router.get('/maquillaje', (req, res) => res.render('maquillaje', { title: 'maquillaje' }))

router.get('/corrector-publicidad', (req, res) => res.render('corrector-publicidad', { title: 'Publicidad de corrector' }))

router.get('/corrector', (req, res) => res.render('corrector', { title: 'corrector' }))

router.get('/categorias-matifica-retoca-sella-maquillaje', (req, res) => res.render('categorias-matifica-retoca-sella-maquillaje', { title: 'El match perfecto' }))

router.get('/polvo-traslucido-publicidad', (req, res) => res.render('polvo-traslucido-publicidad', { title: 'Publicidad del polvo traslúcido' }))

router.get('/polvo-traslucido', (req, res) => res.render('polvo-traslucido', { title: 'Polvo traslúcido' }))

router.get('/categorias-dale-vida-rostro-toque-color', (req, res) => res.render('categorias-dale-vida-rostro-toque-color', { title: 'El match perfecto' }))

router.get('/rubor-compacto-publicidad', (req, res) => res.render('rubor-compacto-publicidad', { title: 'Publicidad del rubor compacto' }))

router.get('/rubor-compacto', (req, res) => res.render('rubor-compacto', { title: 'Rubor compacto' }))

router.get('/categorias-define-tu-mirada', (req, res) => res.render('categorias-define-tu-mirada', { title: 'El match perfecto' }))

router.get('/delineador-liquido-publicidad', (req, res) => res.render('delineador-liquido-publicidad', { title: 'Publicidad del delineador líquido' }))

router.get('/delineador-liquido', (req, res) => res.render('delineador-liquido', { title: 'Delineador líquido' }))

router.get('/delineador-penliner-publicidad', (req, res) => res.render('delineador-penliner-publicidad', { title: 'Publicidad del delineador penliner' }))

router.get('/delineador-penliner', (req, res) => res.render('delineador-penliner', { title: 'Delineador penliner' }))

router.get('/lapiz-delineador-ojos-publicidad', (req, res) => res.render('lapiz-delineador-ojos-publicidad', { title: 'Publicidad del lapiz delineador ojos' }))

router.get('/lapiz-delineador-ojos', (req, res) => res.render('lapiz-delineador-ojos', { title: 'Lapiz delineador ojos' }))

router.get('/categorias-cejas-perfectas', (req, res) => res.render('categorias-cejas-perfectas', { title: 'categorias de accesorios' }))

router.get('/set-delineador-compacto-cejas-publicidad', (req, res) => res.render('set-delineador-compacto-cejas-publicidad', { title: 'Publicidad Set de delineador compacto cejas' }))

router.get('/set-delineador-compacto-cejas', (req, res) => res.render('set-delineador-compacto-cejas', { title: 'Set de delineador compacto cejas' }))

router.get('/lapiz-cejas-publicidad', (req, res) => res.render('lapiz-cejas-publicidad', { title: 'Publicidad de lápiz para cejas' }))

router.get('/lapiz-cejas', (req, res) => res.render('lapiz-cejas', { title: 'Publicidad de lápiz para cejas' }))

router.get('/categorias-mirada-impacto', (req, res) => res.render('categorias-mirada-impacto', { title: 'categorias de mirada impacto' }))

router.get('/mascara-pestanas-publicidad', (req, res) => res.render('mascara-pestanas-publicidad', { title: 'Publicidad de la máscara para pestañas' }))

router.get('/mascara-pestanas', (req, res) => res.render('mascara-pestanas', { title: 'Publicidad de la máscara para pestañas' }))

router.get('/rimel-agua-publicidad', (req, res) => res.render('rimel-agua-publicidad', { title: 'Publicidad del rimel agua' }))

router.get('/rimel-agua', (req, res) => res.render('rimel-agua', { title: 'Publicidad del rimel agua' }))

router.get('/mesagge', (req, res) => res.render('mesagge', { title: 'mesagge' }))

router.get('/categorias', (req, res) => res.render('categorias', { title: 'categorias' }))

router.get('/categorias', (req, res) => res.render('categorias', { title: 'categorias' }))

router.get('/categorias-hombre', (req, res) => res.render('categorias-hombre', { title: 'Categorias de hombre' }))

router.get('/categorias-zapatos-hombre', (req, res) => res.render('categorias-zapatos-hombre', { title: 'Categorias de zapatos de hombre' }))

router.get('/categorias-ropa-hombre', (req, res) => res.render('categorias-ropa-hombre', { title: 'Categorias de ropa de hombre' }))

router.get('/categorias-ropa-mujer', (req, res) => res.render('categorias-ropa-mujer', { title: 'Categorias de ropa de mujer' }))

router.get('/categorias-mujer', (req, res) => res.render('categorias-mujer', { title: 'Categorias de mujer' }))

router.get('/categorias-zapatos-mujer', (req, res) => res.render('categorias-zapatos-mujer', { title: 'Categorias de zapatos de mujer' }))

router.get('/categorias-accesorios', (req, res) => res.render('categorias-accesorios', { title: 'categorias de accesorios' }))

router.get('/set-brochas-publicidad', (req, res) => res.render('set-brochas-publicidad', { title: 'Publicidad Set de brochas' }))

router.get('/set-brochas', (req, res) => res.render('set-brochas', { title: 'Set de brochas' }))

router.get('/brocha', (req, res) => res.render('brocha', { title: 'Brocha' }))

router.get('/brocha-publicidad', (req, res) => res.render('brocha-publicidad', { title: 'Publicidad de la Brocha' }))

router.get('/cosmetiquera', (req, res) => res.render('cosmetiquera', { title: 'Cosmetiquera SEYTÚ' }))

router.get('/cosmetiquera-publicidad', (req, res) => res.render('cosmetiquera-publicidad', { title: 'Publicidad de Cosmetiquera SEYTÚ' }))

router.get('/categoria-perfume', (req, res) => res.render('categoria-perfume', { title: 'categoria de perfume' }))

router.get('/perfume-mujer', (req, res) => res.render('perfume-mujer', { title: 'Perfume de Mujer' }))

router.get('/perfume-mujer-publicidad', (req, res) => res.render('perfume-mujer-publicidad', { title: 'Publicidad de Perfume de Mujer' }))

router.get('/perfume-hombre-publicidad', (req, res) => res.render('perfume-hombre-publicidad', { title: 'Publicidad de Perfume de Hombre' }))

router.get('/perfume-hombre', (req, res) => res.render('perfume-hombre', { title: 'Perfume de Hombre' }))

router.get('/sombras', (req, res) => res.render('sombras', { title: 'sombras' }))

router.get('/unias', (req, res) => res.render('unias', { title: 'unias' }))

router.get('/cara', (req, res) => res.render('cara', { title: 'cara' }))

router.get('/mascarilla', (req, res) => res.render('mascarilla', { title: 'mascarilla' }))


export default router
