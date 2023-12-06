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
        "<button class='flex justify-center items-center bg-gradient-to-b from-amber-500 to-zinc-600 rounded-[30px] text-3xl w-[196px] h-[55px] text-white mr-5' onclick='filterItems("+(id)+`)'>${name}</button>`
    )
}).join('');

const product = [
{
    id: 8,
    image: '../Icons/couvertures/shutterisland.jpg',
    title: 'Shutter Island',
    category: 'Polar'
},
{
    id: 2,
    image: '../Icons/couvertures/la-ferme-des-animaux.jpeg',
    title: 'La ferme des animaux',
    category: 'Classique'
},
{
    id: 2,
    image: '../Icons/couvertures/odysseHomere.jpg',
    title: "L'odysse d'Homere",
    category: 'Classique'
},
{
    id: 7,
    image: '../Icons/couvertures/harrypotteretleprisonnierdaskaban.jpg',
    title: 'Harry potter 3',
    category: 'Fantastique'
},
{
    id: 2,
    image: '../Icons/couvertures/1984.jpg',
    title: '1984',
    category: 'Classique'
},
{
    id: 3,
    image: '../Icons/couvertures/asterixetobelix.jpg',
    title: 'Asterix et obelix',
    category: 'BD'
},
{
    id: 7,
    image: '../Icons/couvertures/hungerGamestome1.jpg',
    title: 'Hunger Games',
    category: 'Fantastique'
},
{
    id: 5,
    image: '../Icons/couvertures/Tourne-la-page.jpg',
    title: 'Tourne la page',
    category: 'Biographie'
},
{
    id: 5,
    image: '../Icons/couvertures/Ma-vie-sans-gravite.jpg',
    title: 'Ma vie dans gravite',
    category: 'Biographie'
},
{
    id: 4,
    image: '../Icons/couvertures/one-piece-tome-1.jpg',
    title: 'One piece',
    category: 'Manga'
},
{
    id: 3,
    image: '../Icons/couvertures/lucky-luke.jpg',
    title: 'Lucky Luke',
    category: 'BD'
},
{
    id: 2,
    image: '../Icons/couvertures/vendredi-ou-la-vie-sauvage.jpg',
    title: 'Vendredi ou la vie sauvage',
    category: 'Classique'
},
{
    id: 6,
    image: '../Icons/couvertures/tom-et-nana.jpg',
    title: 'Tom-Tom et Nana',
    category: 'Enfant'
},
{
    id: 4,
    image: '../Icons/couvertures/snk-tome-1.jpg',
    title: 'Attaque des titans',
    category: 'Manga'
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
        var{image, title} = item;
        return(
            `<div class="flex flex-col justify-center items-center">
            <img class="w-[100px]" src=${image}></img>
            <div class="flex justify-center items-center text-xl text-white bg-gradient-to-br from-amber-500">
            <h1>${title}</h1>
            </div>
            </div>`)

    }).join('');
}
displayItem(categories);