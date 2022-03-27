const qualifications_uf = document.getElementById("quaulifications_uf").innerText;
// console.log(qualifications_uf);

const qualifications_list = qualifications_uf.split('• ').filter(n => n.length > 0).map(n => `<li> ${n} </li><br>`);
qualification_bullets = '<ul>' + qualifications_list.join('') + '</ul>';

qualifications.innerHTML = qualification_bullets;
