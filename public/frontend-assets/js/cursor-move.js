

(function($) {
    "use strict";

    $(document).ready( function() {




        const projectThumb = document.querySelectorAll(".project-thumb");

        function followImageCursor(event, projectThumb) {
            const contentBox = projectThumb.getBoundingClientRect();
            const dx = event.clientX - contentBox.x;
            const dy = event.clientY - contentBox.y;
            projectThumb.children[2].style.transform = `translate(${dx}px, ${dy}px) rotate(0)`;
        }
        
        projectThumb.forEach((item, i) => {
            item.addEventListener("mousemove", (event) => {
                setInterval(followImageCursor(event, item), 1000);
            });
        });
        



    }); // End Document Ready Function
   

})(jQuery); // End jQuery

