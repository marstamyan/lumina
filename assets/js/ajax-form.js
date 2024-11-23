;(function () {
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".modal-form")
    const loader = form.querySelector(".modal-form__loader")
    const messageBox = form.querySelector(".modal-form__message")

    const ajaxData = my_ajax_object
    const ajaxurl = ajaxData.ajaxurl
    const nonce = ajaxData.nonce
    const successMessage =
      ajaxData.success_message || "Form submitted successfully!"
    const errorMessage = ajaxData.error_message || "Something went wrong"

    form.addEventListener("submit", function (e) {
      e.preventDefault()

      loader.style.display = "block"
      messageBox.style.display = "none"

      const formData = new FormData(form)
      formData.append("nonce", nonce)

      setTimeout(() => {
        fetch(ajaxurl, {
          method: "POST",
          body: formData,
        })
          .then((response) => {
            if (!response.ok) {
              throw new Error("Network response was not ok")
            }
            return response.json()
          })
          .then((data) => {
            loader.style.display = "none"
            if (data.success) {
              form.reset()
              messageBox.textContent = successMessage
              messageBox.style.color = "green"
            } else {
              messageBox.textContent = data.data || errorMessage
              messageBox.style.color = "red"
            }
            messageBox.style.display = "block"
          })
          .catch((error) => {
            loader.style.display = "none"
            messageBox.textContent = `${errorMessage}: ${error.message}`
            messageBox.style.color = "red"
            messageBox.style.display = "block"
          })
      }, 1000)
    })
  })
})()
