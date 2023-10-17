window.addEventListener('load',() =>{
    const form = document.querySelector("new-project-form");
    const input = document.querySelector("new-project-input");
    const list = document.querySelector("project");

    form.addEventListener('submit', (e)=>{
        e.preventDefault();

        const project = input.value;

        if(!project){
            alert("Please fill out the project name!")
            return;
        }

        const project_el = document.createElement("div");
        project_el.classList.add("project-list");

        project_content_el.classList.add("project-content");
        project_content_el.innerText = project;

        project_el.appendChild(project_content_el);

        list.appendChild(project_el)

    })
})