
const pages = document.querySelectorAll(".page");
let currentPage = 0;

function showPage(index) {
  pages[currentPage].classList.add("hidden");
  pages[index].classList.remove("hidden");
  currentPage = index;
  textarea.value = localStorage.getItem(`text-${index}`);
}

const nextButton = document.getElementById("next-page");
nextButton.addEventListener("click", function() {
    currentPage = (currentPage + 1) % pages.length;
    showPage(currentPage);
    localStorage.setItem("currentPage", currentPage);
});
const prevButton = document.getElementById("prev-page");
prevButton.addEventListener("click", function() {
    currentPage = (currentPage - 1 + pages.length) % pages.length;
    showPage(currentPage);
    localStorage.setItem("currentPage", currentPage);
});

function showPage(index) {
    pages.forEach((page) => {
        page.classList.add("hidden");
    });
    pages[index].classList.remove("hidden");
    localStorage.setItem("currentPage", index);
    textarea.value = localStorage.getItem(`text-${index}`);
}
// get the textarea element
const textarea = document.querySelector("textarea");

// check if there is any saved current page in local storage
if (localStorage.getItem("currentPage")) {
    currentPage = localStorage.getItem("currentPage");
} else {
    currentPage = 0;
}

// check if there is any saved text in local storage
if (localStorage.getItem(`text-${currentPage}`)) {
    textarea.value = localStorage.getItem(`text-${currentPage}`);
}

// call the showPage function with the currentPage variable
showPage(currentPage);

// add event listener to the textarea to save the text when it changes
textarea.addEventListener("input", function() {
    localStorage.setItem("currentPage", currentPage);
    localStorage.setItem(`text-${currentPage}`, textarea.value);
});


