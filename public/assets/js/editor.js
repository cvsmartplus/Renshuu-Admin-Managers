// Editor Js Start
const quill = new Quill("#editor", {
    modules: {
        syntax: true,
        toolbar: "#toolbar-container",
    },
    placeholder: "tuliskan deskripsi artikel...",
    theme: "snow",
});

const form = document.querySelector('form');
    form.onsubmit = function () {
        document.getElementById('content-input').value = quill.root.innerHTML;
};

const quill1 = new Quill("#editor1", {
    modules: {
        syntax: true,
        toolbar: "#toolbar1-container",
    },
    placeholder: "Compose an epic...",
    theme: "snow",
});
// Editor Js End