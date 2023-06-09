window.addEventListener("load", function () {
  const secondary_images = document.querySelectorAll(".sub_image");
  const main_image = document.getElementById("main_image");

  secondary_images.forEach(function (img) {
    img.addEventListener("click", function (event) {
      const image_url = event.target.src;

      if (image_url !== main_image.src) {
        main_image.style.opacity = 0;

        setTimeout(function () {
          main_image.src = image_url;
          main_image.style.opacity = 1;
        }, 400);
      }
    });
  });
});
