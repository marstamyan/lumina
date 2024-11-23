;(function () {
  const burgerMenu = document.querySelector("#burger-menu")
  const headerNav = document.querySelector(".header-nav")
  if (burgerMenu) {
    burgerMenu.addEventListener("click", function () {
      this.classList.toggle("show")
      this.classList.toggle("clicked")
      headerNav.classList.toggle("opened")
    })
  }

  //contact form
  const inputFields = document.querySelectorAll(".js-input")

  inputFields.forEach((input) => {
    input.addEventListener("keyup", function () {
      if (this.value) {
        this.classList.add("not-empty")
      } else {
        this.classList.remove("not-empty")
      }
    })
  })

  //blog cards link
  const blogCards = document.querySelectorAll(".blog__card")

  if (blogCards.length > 0) {
    blogCards.forEach((card) => {
      card.addEventListener("click", function (event) {
        if (!event.target.classList.contains("blog__card-category")) {
          const selectedText = window.getSelection().toString()

          if (selectedText.length === 0) {
            window.location.href = this.getAttribute("data-link")
          }
        }
      })
    })
  }

  // swiper
  const swiper = new Swiper(".testimonials-slider", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true,
    spaceBetween: 5,
    breakpoints: {
      1200: {
        slidesPerView: 2.5,
        spaceBetween: 24,
      },
      992: {
        slidesPerView: 2,
        centeredSlides: true,
      },
      768: {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 24,
      },
      320: {
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 24,
      },
    },
  })

  // modal
  const showBtn = document.querySelector(".show-modal")
  const maskModal = document.querySelector(".mask-modal")
  const modal = document.querySelector(".modal")
  const closeBtn = document.querySelector(".close-modal")

  showBtn.addEventListener("click", () => {
    maskModal.classList.add("mask-active")
    modal.classList.add("modal-active")
  })

  closeBtn.addEventListener("click", closeModal)
  maskModal.addEventListener("click", closeModal)

  function closeModal() {
    maskModal.classList.remove("mask-active")
    modal.classList.remove("modal-active")
  }

  document.addEventListener("keyup", (e) => {
    if (e.keyCode == 27) closeModal()
  })
})()
