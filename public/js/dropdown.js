document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".block").forEach(block => {
        block.addEventListener("click", () => {
            const answer = block.querySelector(".answer");
            const isActive = block.classList.toggle("active");
            answer.style.maxHeight = isActive ? `${answer.scrollHeight}px` : "0";
        });
    });
});
