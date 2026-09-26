const menuToggle = document.querySelector('.menu-toggle')
const navigation = document.querySelector('#primary-navigation')

if (menuToggle && navigation) {
    menuToggle.addEventListener('click', () => {
        const isOpen = navigation.classList.toggle('nav-open')
        menuToggle.setAttribute('aria-expanded', String(isOpen))
        menuToggle.setAttribute('aria-label', isOpen ? 'Tutup menu' : 'Buka menu')
        menuToggle.innerHTML = '<svg class="icon" width="22" height="22" viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-' + (isOpen ? 'x' : 'menu') + '"></use></svg>'
    })

    navigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            navigation.classList.remove('nav-open')
            menuToggle.setAttribute('aria-expanded', 'false')
            menuToggle.setAttribute('aria-label', 'Buka menu')
            menuToggle.innerHTML = '<svg class="icon" width="22" height="22" viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-menu"></use></svg>'
        })
    })
}

const galleryImages = [...document.querySelectorAll('[data-gallery-image]')]
const lightbox = document.querySelector('.lightbox')
const lightboxImage = lightbox?.querySelector('.lightbox-figure img')
const lightboxCaption = lightbox?.querySelector('.lightbox-figure figcaption')
let activeImageIndex = -1
let lastFocusedImage = null

function showImage(index) {
    if (!lightbox || !lightboxImage || !lightboxCaption || galleryImages.length === 0) return
    activeImageIndex = (index + galleryImages.length) % galleryImages.length
    const trigger = galleryImages[activeImageIndex]
    lightboxImage.src = trigger.dataset.galleryImage
    lightboxImage.alt = trigger.dataset.galleryAlt || ''
    lightboxCaption.innerHTML = (trigger.dataset.galleryLabel || '') + '<span>' + (activeImageIndex + 1) + ' / ' + galleryImages.length + ' · Foto ilustrasi</span>'
}

function openLightbox(index, trigger) {
    if (!lightbox) return
    lastFocusedImage = trigger
    showImage(index)
    lightbox.hidden = false
    lightbox.setAttribute('aria-hidden', 'false')
    document.body.style.overflow = 'hidden'
    lightbox.querySelector('.modal-close')?.focus()
}

function closeLightbox() {
    if (!lightbox) return
    lightbox.hidden = true
    lightbox.setAttribute('aria-hidden', 'true')
    document.body.style.overflow = ''
    lastFocusedImage?.focus()
}

galleryImages.forEach((image, index) => image.addEventListener('click', () => openLightbox(index, image)))

lightbox?.querySelector('.modal-close')?.addEventListener('click', closeLightbox)
lightbox?.querySelector('.lightbox-prev')?.addEventListener('click', (event) => {
    event.stopPropagation()
    showImage(activeImageIndex - 1)
})
lightbox?.querySelector('.lightbox-next')?.addEventListener('click', (event) => {
    event.stopPropagation()
    showImage(activeImageIndex + 1)
})
lightbox?.addEventListener('click', (event) => {
    if (event.target === lightbox) closeLightbox()
})
lightbox?.querySelector('.lightbox-figure')?.addEventListener('click', (event) => event.stopPropagation())

window.addEventListener('keydown', (event) => {
    if (lightbox?.hidden === false) {
        if (event.key === 'Escape') closeLightbox()
        if (event.key === 'ArrowRight') showImage(activeImageIndex + 1)
        if (event.key === 'ArrowLeft') showImage(activeImageIndex - 1)
    }
    if (event.key === 'Escape' && navigation?.classList.contains('nav-open')) {
        navigation.classList.remove('nav-open')
        menuToggle?.setAttribute('aria-expanded', 'false')
        menuToggle?.setAttribute('aria-label', 'Buka menu')
    }
})

document.querySelectorAll('[data-contact-demo]').forEach((form) => {
    form.addEventListener('submit', (event) => {
        event.preventDefault()
        const feedback = form.querySelector('.form-feedback')
        if (feedback) feedback.hidden = false
        form.reset()
    })
})
