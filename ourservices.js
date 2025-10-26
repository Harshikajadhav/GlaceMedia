document.addEventListener("DOMContentLoaded", () => {
  const serviceCards = document.querySelectorAll(".service-card");

  serviceCards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
      // Expand the hovered card
      serviceCards.forEach((c) => c.classList.remove("expanded"));
      card.classList.add("expanded");
    });

    card.addEventListener("mouseleave", () => {
      // Collapse all cards back to normal
      card.classList.remove("expanded");
    });
  });
});
