$('#fade').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});

let productsCardsObj = [
    {
        image: './images/503f5300-56b8-47dc-bd5d-4461cbbec26d-1-1200x900.jpg',
        name:"Сеты",
        title: "Chef's set",
        description: "Уми Ролл, Филадельфия манго, Крейзи ролл, Делюкс ролл, Спайси креветка 1140 г.",
        price: 3100,
        countProduct: 0,
    },
    {
        image: './images/503f5300-56b8-47dc-bd5d-4461cbbec26d-1-1200x900.jpg',
        name:"Сеты",
        title: "Chef's set",
        description: "Уми Ролл, Филадельфия манго, Крейзи ролл, Делюкс ролл, Спайси креветка 1140 г.",
        price: 3100,
        countProduct: 0,
    },
]

let outCard = ''

for(let i = 0; i < productsCardsObj.length; i++) {
    outCard += `<div style="max-width: 407px;" class="mx-2 my-2"><div style="background-image: url(${productsCardsObj[i].image}); background-size: cover;width: 100%; height:300px;"></div><button onclick="indexCard(event,${i})" class="to-order">Заказать</button><div style="background-color:#f7f7f7; padding: 20px 20px;" class="d-flex flex-column"><span style="color: rgba(0, 0, 0, 0.4);font-size: 14px;font-weight: 400;">${productsCardsObj[i].name}</span><span style="font-size: 14.7px;">${productsCardsObj[i].title}</span><span style="font-size: 14.7px;">- ${productsCardsObj[i].countProduct == 0 ? productsCardsObj[i].price : productsCardsObj[i].price * productsCardsObj[i].countProduct}</span><p style="font-size: 14px;">${productsCardsObj[i].description}</p></div></div>`
}

document.getElementById('cardProductionsBlock').innerHTML = outCard

let order = []


function indexCard(event, i) {
    productsCardsObj[i].countProduct = 1
    if (event.target.classList.contains('to-order')) {
        event.target.classList.add('to-count')
        event.target.classList.remove('to-order')
        event.target.innerHTML = `<div style="width:20%; height:100%;display: flex;align-items: center;justify-content: center;" onclick="countDic(${i})"><i class="fas fa-minus"></i></div><span>${productsCardsObj[i].countProduct}</span><div  onclick="countInc(${i})" style="width:20%; height:100%;display: flex;align-items: center;justify-content: center;"><i class="fas fa-plus"  id="countInc"></i></div>`
        event.target.id = "countBtn"
        order.push(productsCardsObj[i])
        localStorage.setItem('order',JSON.stringify(order))
    }
}

let a = 0

function countDic(i) {
    a = a - 1
    console.log(a)
}

function countInc(i) {
    a = a + 1
    console.log(a)
}














// let a = document.getElementById('orderBtn')

{/* <div style="max-width: 407px;" class="mx-2 my-2">
<div style="background-image: url(./images/503f5300-56b8-47dc-bd5d-4461cbbec26d-1-1200x900.jpg); background-size: cover;width: 100%; height:300px;"></div>
<button id="orderBtn" class="to-order">Заказать</button>
<div style="background-color:#f7f7f7; padding: 20px 20px;" class="d-flex flex-column">
<span style="color: rgba(0, 0, 0, 0.4);font-size: 14px;
font-weight: 400;">Современные роллы</span>
<span style="font-size: 14.7px;">Бонито ролл</span>
<span style="font-size: 14.7px;">- 350</span>
<p style="font-size: 14px;">Жареная кожа лосося, стружка тунца, огурцы, рис, нори, соус спайси
    200 г.</p>
</div>
</div> */}


// document.getElementById('countDic').onclick = () => {
//     countProduction--
// }
// document.getElementById('countInc').onclick = () => {
//     countProduction++
// }



// document.querySelectorAll('.to-order')[0].onclick = (event) => {
//     console.log('o')
//     // if (event.target.classList.contains('to-order')) {
//     //     event.target.classList.add('to-count')
//     //     event.target.classList.remove('to-order')
//     //     // event.target.innerHTML = `<i class="fas fa-minus" id="countDic"></i><span>${countProduction}</span><i class="fas fa-plus" id="countInc"></i>`
//     //     event.target.id = "countBtn"
//     // }
// }


