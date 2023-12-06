const btns = document.querySelectorAll(".btn");
const books =document.querySelectorAll(".books");

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', (e)=>{
        e.preventDefault();
        const filter = e.target.dataset.filter;
        console.log(filter)
    })
}

