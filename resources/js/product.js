document.addEventListener("DOMContentLoaded", function () {
    const lists = document.querySelectorAll(".drop");
    dropList(lists);

    function dropList(els) {
        els.forEach((el) => {
            // Add "show" class to the dropdown initially
            el.classList.add("show");

            // Adjust max-height to show the dropdown content
            let content = el.nextElementSibling;
            if (content) {
                content.style.maxHeight = content.scrollHeight + "px";
            }

            // Add click event listener to toggle dropdown visibility
            el.addEventListener("click", (e) => {
                e.currentTarget.classList.toggle("show");
                let content = e.currentTarget.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });
    }

    
});


