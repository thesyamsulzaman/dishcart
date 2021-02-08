

document.addEventListener("DOMContentLoaded", () => {

  (function() {
    const exitButton = document.querySelector(".exit-button");
    const nameButton = document.querySelector(".profile-card-toggle");
    const profileCard = document.querySelector(".profile-card");

    nameButton.addEventListener('click', function(e) {
      profileCard.classList.toggle("active");
    });

    exitButton.addEventListener('click', function(e) {
      profileCard.classList.remove("active");
    })
  })();

  // Lazy load images
  (function () {
    const images = document.querySelectorAll("img");
    const imgOptions = {
      threshold: 0,
      rootMargin: "0px 0px -500px 0px"
    };
    const imgObserver = new IntersectionObserver((entries, imageObserver) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          return;
        } else {
          preloadImage(entry.target);
          imgObserver.unobserve(entry.target);
        }
      });
    }, imgOptions);

    images.forEach(image => {
      imgObserver.observe(image);
    });

    function preloadImage(img) {
      const src = img.getAttribute("img");
      if (!src) {
        return;
      }
      img.src = src;
    }
  })();
});
