
//project 1
const print_button = document.getElementById("print_button");
const resume_div = document.querySelector(".resume-page");

print_button.addEventListener("click", ()=>{
});

const project_details5a = document.getElementById("project_details5a");
const project_details5a_hidden = document.getElementById("project_details5a_hidden").value;
//project 2
const project_details5b = document.getElementById("project_details5b");
const project_details5b_hidden = document.getElementById("project_details5b_hidden").value;
//project 3
const project_details5c = document.getElementById("project_details5c");
const project_details5c_hidden = document.getElementById("project_details5c_hidden").value;

//Skills
const skills_details = document.getElementById("skills_details");
const skills_details_hidden = document.getElementById("skills_details_hidden").value;


function getBullet(qualifications_uf, qualifications){

// console.log(qualifications_uf);

    const qualifications_list = qualifications_uf.split('• ').filter(n => n.length > 0).map(n => `<li> ${n} </li><br>`);
    qualification_bullets = '<ul>' + qualifications_list.join('') + '</ul>';

    qualifications.innerHTML = qualification_bullets;
    console.log(qualification_bullets);

}

getBullet(project_details5a_hidden, project_details5a);
getBullet(project_details5b_hidden, project_details5b);
getBullet(project_details5c_hidden, project_details5c);
getBullet(skills_details_hidden, skills_details);

console.log("hi");