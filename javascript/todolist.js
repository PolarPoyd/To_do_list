const addBtn = document.querySelector("#addBtn");
const noteGrid = document.querySelector("#noteGrid");
const newTask = document.querySelector("#newTask");
const addTask = document.querySelector("addTask");
const modifBtn = document.querySelectorAll(".modifBtn");
const deleteBtn = document.querySelector("#deleteBtn");




modifBtn.forEach(element => {
    element.addEventListener("click", (e) => {
        e.preventDefault();
        var idTask = e.target.id.split('_')[1]; // .split ('_') permet grace a l'underscore d'aller récuperer ce qui se trouve derrière
        var pTask = document.getElementById("pTask_" + idTask);
        var modifBtnn = document.getElementById("modifBtn_" + idTask);
        var validBtn = document.getElementById("validBtn_" + idTask);
        var modif = document.getElementById("modif_" + idTask);
        pTask.classList.remove('pas-cacher'); // retirer la class pas-cacher et ajouter class cacher
        pTask.classList.add("cacher");
        modifBtnn.classList.remove("pas-cacher"); //retirer la class pas-cacher et ajouter class cacher
        modifBtnn.classList.add("cacher");
        validBtn.classList.remove("cacher"); // retirer la class cacher et ajouter la class pas-cacher
        validBtn.classList.add("pas-cacher");
        modif.classList.remove("cacher"); // retirer la class cacher et ajouter la class pas-cacher
        modif.classList.add("pas-cacher");






        console.log(document.getElementById("#pTask_" + idTask)); // en l'occurence modifBtn
    })

});






// je charge le contenu du localstorage dans la grid
//noteGrid.innerHTML = localStorage.getItem("noteGrid")

// Je créer un evenement sur le click du addBtn qui ajoute une nouvelle carte(nouvelle note) avec tous les éléments créer initialement 

// addBtn.addEventListener('click', function(e) {
//     // faire apparaitre une nouvelle card 
//     e.preventDefault()
//     const newCard = document.createElement("div");
//     newCard.className = "noteCard";
//     noteGrid.appendChild(newCard);



//     // faire apparaitre le paragraphe

//     const newText = document.createElement("div");
//     newText.className = "text";
//     newCard.appendChild(newText);
//     const newP = document.createElement("p");
//     newP.className = "noteText";
//     newText.appendChild(newP);

//     //newP.textContent = "Merci le js maggle"
//     newP.textContent = newTask.value;
//     newTask.value = "";

//     // faire apparaitre les boutons
//     const newButtons = document.createElement("div"); //   je déclare ma variable initalement créer en html et  je lui demande je lui créer un element
//     newButtons.className = "buttons"; // variable.(sa class ou son id) = "sa balise html"
//     newCard.appendChild(newButtons); // element parent => je lui donne => element enfant

//     const modifBtn = document.createElement("button");
//     modifBtn.id = "modifBtn";
//     newButtons.appendChild(modifBtn);
//     const newContent = document.createTextNode("K")
//     modifBtn.appendChild(newContent)


//     //const imgModif = document.createElement("img");
//     //imgModif.src = "./assets/bouton-modifier.png";
//     //imgModif.className = "modif-logo";
//     //modifBtn.appendChild(imgModif);

//     modifBtn.addEventListener('click', () => {

//         newP.textContent = "";
//         newButtons.remove();
//         modifBtn.remove();

//         const edit = document.createElement("input");
//         edit.className = "modifTask";
//         newCard.appendChild(newText);
//         newText.appendChild(newP);
//         newP.className = "noteText";
//         newP.appendChild(edit);
//         newCard.appendChild(newButtons);
//         const validBtn = document.createElement("button");
//         validBtn.id = "modifBtn";
//         validBtn.textContent = "G";
//         newButtons.appendChild(validBtn);
//         newButtons.appendChild(deleteBtn);

//         validBtn.addEventListener('click', () => {
//             edit.remove();
//             newCard.appendChild(newText);
//             newText.appendChild(newP);
//             newP.textContent = edit.value;
//             newButtons.remove();
//             newCard.appendChild(newButtons);
//             newButtons.appendChild(modifBtn);
//             newButtons.appendChild(deleteBtn);
//             validBtn.remove();
//         });

//     });

//     const deleteBtn = document.createElement("button");
//     deleteBtn.id = "deleteBtn";
//     newButtons.appendChild(deleteBtn);
//     const newContentBtn = document.createTextNode("E")
//     deleteBtn.appendChild(newContentBtn)

//     //const imgDelete = document.createElement("img");
//     //imgDelete.src = "./assets/corbeille.png";
//     //imgDelete.className = "supp-logo";
//     //deleteBtn.appendChild(imgDelete);

//     deleteBtn.addEventListener('click', () => {
//         newCard.remove()
//     });

//     //localStorage.setItem("noteGrid", noteGrid.innerHTML)

// });


// const switchTheme = document.querySelector("#theme")
// const pageBody = document.querySelector("body")
// const themeName = document.querySelector(".theme-name")

// switchTheme.onclick = () => {
//     if (pageBody.classList.contains("dark")) {
//         pageBody.classList.remove("dark")
//         themeName.textContent = "dark"
//     } else {
//         pageBody.classList.add("dark")
//         themeName.textContent = "cloud"
//     }

// }


// // a terminer 
// //localStorage.setItem("tasks",newTask.value); // Je sauvegarde ma liste sur le cache du navigateur
// //newTask.value=localStorage.getItem("tasks");//  Je récupére ma liste sauvegardée
// // a terminer
// // Voir pour tenter de créer des copie de  ma div noteCard et modifier l'intérieur