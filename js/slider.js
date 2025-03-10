export function slider() {
  gsap.registerPlugin(Draggable, InertiaPlugin);

  const slideDelay = 1.5;
  const slideDuration = 0.3;
  const snapX;

  const slides = document.querySelectorAll(".testomonial__card");
  const autoPlayLimit = slides.length * 2;
  const autoPlayCount = 0;
  const progressWrap = gsap.utils.wrap(0, 1);

  const numSlides = slides.length;

  gsap.set(slides, {
    backgroundColor:
      "random([red, blue, green, purple, orange, yellow, lime, pink])",
    xPercent: (i) => i * 100,
  });

  const wrap = gsap.utils.wrap(-100, (numSlides - 1) * 100);
  const timer = gsap.delayedCall(slideDelay, autoPlay);

  const animation = gsap.to(slides, {
    xPercent: "+=" + numSlides * 100,
    duration: 1,
    ease: "none",
    paused: true,
    repeat: -1,
    modifiers: {
      xPercent: wrap,
    },
  });

  const proxy = document.createElement("div");
  const slideAnimation = gsap.to({}, {});
  const slideWidth = 0;
  const wrapWidth = 0;
  resize();

  const draggable = new Draggable(proxy, {
    trigger: ".slides-container",
    inertia: true,
    onPress: updateDraggable,
    onDrag: updateProgress,
    onThrowUpdate: updateProgress,
    snap: {
      x: snapX,
    },
  });

  window.addEventListener("resize", resize);

  prevButton.addEventListener("click", function () {
    animateSlides(1);
  });

  nextButton.addEventListener("click", function () {
    animateSlides(-1);
  });

  function updateDraggable() {
    timer.restart(true);
    slideAnimation.kill();
    this.update();
  }

  function animateSlides(direction) {
    timer.restart(true);
    slideAnimation.kill();

    const x = snapX(gsap.getProperty(proxy, "x") + direction * slideWidth);

    slideAnimation = gsap.to(proxy, {
      x: x,
      duration: slideDuration,
      onUpdate: updateProgress,
    });
  }

  function autoPlay() {
    if (draggable.isPressed || draggable.isDragging || draggable.isThrowing) {
      timer.restart(true);
    } else {
      autoPlayCount++;
      if (autoPlayCount < autoPlayLimit) {
        animateSlides(-1);
      }
    }
  }

  function updateProgress() {
    animation.progress(progressWrap(gsap.getProperty(proxy, "x") / wrapWidth));
  }

  function resize() {
    const norm = gsap.getProperty(proxy, "x") / wrapWidth || 0;

    slideWidth = slides[0].offsetWidth;
    wrapWidth = slideWidth * numSlides;
    snapX = gsap.utils.snap(slideWidth);

    gsap.set(proxy, {
      x: norm * wrapWidth,
    });

    animateSlides(0);
    slideAnimation.progress(1);
  }
}
