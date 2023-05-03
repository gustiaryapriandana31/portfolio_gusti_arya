// Typeit.js
document.addEventListener("DOMContentLoaded", function () {
  new TypeIt("#greeting", {
  }).go();
});

document.addEventListener("DOMContentLoaded", function () {
  const instance = new TypeIt("#namaku", {
    speed: 120,
  })

  instance.pause(500)
  .move(-2)
  .type("a")
  .move(null, { to: "START", instant: true, delay: 300 })
  .move(-1, { delay: 200 })
  .delete(1)
  .type("M. ", { delay: 225 })
  .go();
});