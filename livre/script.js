// const btns = document.querySelectorAll(".btn");
// const books =document.querySelectorAll(".books");

// for (let i = 0; i < btns.length; i++) {
//     btns[i].addEventListener('click', (e)=>{
//         e.preventDefault();
//         const filter = e.target.dataset.filter;
//         console.log(filter)
//     })
// }

const btns=[
{
    id: 1,
    name: 'All'
},
{
    id: 2,
    name: 'Classique'
},
{
    id: 3,
    name: 'Bd'
},
{
    id: 4,
    name: 'Manga'
},
{
    id: 5,
    name: 'Biographie'
},
{
    id: 6,
    name: 'Enfant'
},
{
    id: 7,
    name: 'Fantastique'
},
{
    id: 8,
    name: 'Polar'
},
]

const filters = [...new Set(btns.map((btn)=>
    {return btn}))]

document.getElementById('btns').innerHTML=filters.map((btn)=>{
    var {name, id} = btn;
    return(
        "<button class='flex justify-center items-center bg-gradient-to-b from-amber-500 to-zinc-500 rounded-[30px] text-3xl w-[196px] h-[55px] text-white mr-5' onclick='filterItems("+(id)+`)'>${name}</button>`
    )
}).join('');

const product = [
{
    id: 8,
    image: '../Icons/couvertures/shutterisland.jpg',
    title: 'Shutter Island',
    category: 'Polar',
    grade: '4.8/5',
    link: './shutter-island/'
},
{
    id: 2,
    image: '../Icons/couvertures/la-ferme-des-animaux.jpeg',
    title: 'La ferme des animaux',
    category: 'Classique',
    grade: '4.8/5',
    link: '#'
},
{
    id: 2,
    image: "../Icons/couvertures/l'odysee-d'homere.jpg",
    title: "L'odysse d'Homere",
    category: 'Classique',
    grade: '4.8/5',
    link: '#'
},
{
    id: 7,
    image: '../Icons/couvertures/harrypotteretleprisonnierdaskaban.jpg',
    title: 'Harry potter 3',
    category: 'Fantastique',
    grade: '4.8/5',
    link: './harrypotter/'
},
{
    id: 2,
    image: '../Icons/couvertures/1984.jpg',
    title: '1984',
    category: 'Classique',
    grade: '4.8/5',
    link: './1984/'
},
{
    id: 3,
    image: '../Icons/couvertures/asterixetobelix.jpg',
    title: 'Asterix et obelix',
    category: 'BD',
    grade: '4.8/5',
    link: '#'
},
{
    id: 2,
    image: '../Icons/couvertures/vendredi-ou-la-vie-sauvage.jpg',
    title: 'Vendredi ou la vie sauvage',
    category: 'Classique',
    grade: '4.8/5',
    link: './vendredi/'
},

{
    id: 5,
    image: '../Icons/couvertures/Tourne-la-page.jpg',
    title: 'Tourne la page',
    category: 'Biographie',
    grade: '4.8/5',
    link: './tournelapage/'
},
{
    id: 5,
    image: '../Icons/couvertures/Ma-vie-sans-gravite.jpg',
    title: 'Ma vie dans gravite',
    category: 'Biographie',
    grade: '4.8/5',
    link: './sansgravite/'
},
{
    id: 4,
    image: '../Icons/couvertures/one-piece-tome-1.jpg',
    title: 'One piece',
    category: 'Manga',
    grade: '4.8/5',
    link: '#'
},
{
    id: 3,
    image: '../Icons/couvertures/lucky-luke.jpg',
    title: 'Lucky Luke',
    category: 'BD',
    grade: '4.8/5',
    link: '#'
},
{
    id: 7,
    image: '../Icons/couvertures/hungerGamestome1.jpg',
    title: 'Hunger Games',
    category: 'Fantastique',
    grade: '4.8/5',
    link: '#'
},
{
    id: 6,
    image: '../Icons/couvertures/tom-et-nana.jpg',
    title: 'Tom-Tom et Nana',
    category: 'Enfant',
    grade: '4.8/5',
    link: '#'
},
{
    id: 4,
    image: '../Icons/couvertures/snk-tome-1.jpg',
    title: 'Attaque des titans',
    category: 'Manga',
    grade: '4.8/5',
    link: '#'
},
];

const categories = [...new Set(product.map((item)=>
    {return item}))]

const filterItems = (a)=>{
    const filterCategories = categories.filter(item);
    function item(value){
        if(value.id==a){
            return(
                value.id
            )
        }
    }
    displayItem(filterCategories)
}

const displayItem = (items) => {
    document.getElementById('root').innerHTML = items.map((item)=>
    {
        var{image, title, grade, category, link} = item;
        return(
            `<a href="${link}">
            <div class="flex flex-col justify-center items-center h-[500px] mr-[100px]">
            <img class="h-[250px]" src=${image}></img>
            <div class="flex justify-center items-center mt-5">
            <div class="flex  justify-center items-center w-[250px] bg-gradient-to-br from-amber-500 rounded-[30px]">
            <h1 class="text-center text-2xl text-white  m-2">${title}</h1>
            </div>
            </div>
            <div class="flex justify-start items-start w-full  mt-2 ">
            <div class="flex w-[70%] bg-gradient-to-br from-amber-500 rounded-[30px] justify-center items-center">
            <h1 class="text-2xl text-white">${category}</h1>
            </div>
            </div>
            <div class="flex flex-row justify-end items-end w-full mt-2">
            <div class="flex flex-row bg-gradient-to-br rounded-[30px] from-amber-500 w-[85px]">
            <img src="../Icons/star.png" class="w-[30px]">
            <h1 class="text-xl text-white ">${grade}</h1>
            </div>
            </div>
            </div>
            </a>`)


    }).join('');
}
displayItem(categories);