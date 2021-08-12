import Swal from "sweetalert2";
import "../bootstrap";

require("../modenizer");

if (Modernizr.cssanimations) {
    // supported
    // Swal.fire({
    //     icon: 'success',
    //     title: 'Nice',
    //     text: 'Your browser is support the animation feature',
    // });
    console.log("Yess!!");
} else {
    alert("Your device is not support the animatmation");
}
