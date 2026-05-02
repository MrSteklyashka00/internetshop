let products=null;
let b_products = [];

let addBusketNumber=(n)=>{
return '<div class="in_busket_container" id="in_busket_container"><div class="in_busket_plus"id="in_busket_plus">+</div><div class="in_busket_number" id="in_busket_number">'+n+'</div><div class="in_busket_plus"id="in_busket_minus">-</div></div>'
}

let inBusketNumber=(n)=>{
return '<div class="p_busket_container" id="p_busket_container"><div class="p_busket_plus"id="p_busket_plus">+</div><div class="p_busket_number" id="p_busket_number">'+n+'</div><div class="p_busket_plus"id="p_busket_minus">-</div></div>'
}


async function fetchPostData(url, outdata, callbackfunc){
    fetch(url,{
        method:'POST',
        headers:{'Content-Type':'application/json'},
        body: JSON.stringify(outdata)
    })
    .then(response=>response.json())
    .then((data)=>{
        callbackfunc(data);
    })
    .catch((error)=>{
        console.log(error);
    });
}




let modal= document.getElementById('modal');
modal.style.display= 'none';
let closeButton= document.getElementById('close_modal_button');
closeButton.addEventListener('click',closeModal);



console.log('2'+2 - '2');
let a=5;
console.log(10-a);
// let s=prompt('Как вас зовут?');
// console.log('Привет,'+s);
const b=10;
a=20;
// b=200 менять контанту нельзя
a++; //увеличиваем значение переменой а на 1  21   
a--; //уменьшает значение переменой а на 1   20
a=a+5;//увеличеваем переменную на 5   25
a+=5; //то же самое  30
a*=3;//тоже самое что и а= а*3 - увеличение переменной в 3 раза  90
a/=2;//45
let c= a%2;//остаток от деления а(45) на 2
console.log('a = '+ a);
console.log(c);
let m = [10,20,30,45,78,100];//создали масив из 6чисел
console.log(m);//выводим весь масив
console.log(m[1]);//выводим второй элемент массива (нумерация с нуля)
m[2]=35//поменяли значение 3го элемента массива
console.log(m);
m[2]++;
console.log(m);

let x= -5;
if (x >= 0){
    console.log(Math.sqrt(x));
}
else {
    console.log("Нельзя взять корень от отрицательного числа");
}

for(let i=1; i <=10; i++){
    console.log(i);
}

for(let i=0; i<m.length; i++){
    console.log("m["+ i + "]="+ m[i] );//0: 10- сейчас. Сделать m[0]=10
}

let i=10;//ДЗ сделать что бы цикал работал на оборот от 10 до 0
while (i>=0){
    console.log(i*i);
    i--;
}

i=0;
while(2*2==4){ //бесклнечный цикл (условие всегда истинно)
    console.log(i*i);
    i+=2;
    if(i > 5){ //если 1равно 5...
        break;// выходим из цикла принудительно
    }
}

 c=0.1;
 let d = 0.2;
 let e=c+d;
 console.log(e);
 if(e==0.3){
    console.log('ОК');
 }
    else{
        print("не равно");
    }

    function print2(){
        console.log("Кнопка нажата");
    }
 
        function print(text){
        console.log(text);
    }

function sum(a,b){
    return a+b;
}

let sm=sum(5,2)+ sum(10,3) - sum(1,1);
print(sm);

//n! =1*2*3....*n
//s! = 1*2*3*4*5

function fact(n){//функция которая вычисляет факториал числа
    let res=1;
    for(let x=1; x<=n; x++){
        res *=x //res = res * x
    }
    return res;
}

print(fact(100));

//DOM-дерево

//находим элемаент с id product_name и сохраняем его в перемунную element
let element = document.getElementById('product_name');
element.innerHTML=" другой телевизор";

let count=0;
function createNewcard(){
    let main = document.getElementById('main');
        let card = document.getElementById('card');
        let newCard= card.cloneNode(true);//клонируем объект (карточку товара)
        newCard.id='card_'+count++;//card_15
        main.append(newCard);
}

let product={ 
    'name':"Монитор &laquo;ZALMAN&raquo;",
    'desc': "Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, repudiandae debitis!",
    'price':'30000',
    'path':"addd.webp",
    'id':0,
}
print(product);

function createCard(name,desc,price,img,id){
        let main = document.getElementById('main');
        let card = document.getElementById('card');
        let newCard= card.cloneNode(true);
        newCard.style.display='block';
        newCard.childNodes[1].style.background="url("+ img+") center /cover  no-repeat";
        newCard.childNodes[3].innerHTML=name;
        newCard.childNodes[5].innerHTML=desc;
        newCard.childNodes[7].innerHTML='<b>Цена: <b>' + price +' р.';
        if(id in b_products)
            newCard.childNodes[9].innerHTML=inBusketNumber(b_products[id]);
        newCard.childNodes[9].id='button'+id;
        newCard.childNodes[9].onclick=function buttonckick(){
        addToBusket(id);
        }
        newCard.id='card_'+id;
        newCard.onclick=function cardClick(e){
            if(e.target.className!='product_buy' && e.target.className !='p_busket_plus' && e.target.className !='p_busket_number')
            showModal(name,desc,price,img,id);
        else if (e.target.className=='product_buy'){
            fetchPostData('/basket/addtobasket',{'prouct_id':id},refreshQuantity);
        }
        else if (e.target.className=='p_basket_plus'){
            if(e.target.id=='p_basket_plus')
                  fetchPostData('/basket/addtobasket',{'prouct_id':id},refreshQuantity);
                else            
                 fetchPostData('/basket/deletefrombasket',{'prouct_id':id},refreshQuantity);

        }
        }

       main.append(newCard);
}

let refreshQuantity=(d)=>{
    if(d['status']=='OK'){
        let id=d['id'];
        let el=document.getElementById('Button_'+id);
        if(el && d['quantity']) {
            el.innerHTML=inBusketNumber(d['quantity']);
            b_products[id]= d['quantity'];
        }
        else el.innerHTML='Купить';
    }
    else alert('Ошибка при добавление в корзину');
}

function addToBusket(id){
    print(id);
    let mb = document.getElementsByClassName('modal_buy');
    if (mb) {
        mb=mb[0];
        mb.innerHTML=addBusketNumber(1);
    }
}

function showModal(name='',desc='',price='',img='',id = null){
    modal.style.display='block';
    modal_image.style.background='url('+ img +') center / contain no-repeat';
    modal_product_name.innerHTML = name;
    modal_text.innerHTML=desc;
    modal_price.innerHTML='Цена: <b>' + price + ' р. </b>';
    let modalBuy = document.getElementsByClassName('modal_buy');
    modalBuy=(modalBuy)? modalBuy[0]:null;
    if(modal_buy) modalBuy.id='modal_buy_' + id;
}

function closeModal(){
    modal.style.display = 'none';

}

let showProds=(data)=>{
    if(data['status']=='OK'){
        products=data['prods'];
        b_products=data['basket'];
        for(let d of products){
            let pImg='/img/001.jpg';
            if(d['img'])
                pImg='/public/images/'+d['img'];
            createCard(d['name'],d['description'],d['price'],pImg,d['id']);
        }
    }else print('Ошибка получения данных о продуктах');
}

fetchPostData('/shop/getproducts',{'limit':-1,'offset':0},showProds);




// createCard(product.name, product.desc, product.price, product.path, product.id);
// createCard('Монитор &laquo;samsung&raquo;','Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ducimus dignissimos vitae animi tenetur similique praesentium, nisi libero. Deleniti, nihil.', 15000 ,'samsung-f24t450fqi-0-v1.jpg',110);
// createCard('Монитор &laquo;msi&raquo;№'+ i,'Монитор MSI PRO MP273A оборудован 27-дюймовым экраном IPS FullHD с безрамочным дизайном. Это обеспечивает реалистичность изображения и концентрацию на выполнении задач. Специальные технологии подавляют мерцание экрана и снижают интенсивность синего света, что уменьшает зрительную усталость при просмотре. Матовое покрытие устраняет световые блики.Монитор MSI PRO MP273A оснащен видеоразъемами DisplayPort, HDMI и VGA. Акустическая система с двумя динамиками мощностью по 3 Вт воспроизводит чистый звук. Конструкция настольной подставки обеспечивает простое крепление и снятие без инструментов. Крепление стандарта VESA предусматривает фиксацию мини-ПК и использование монитора в качестве моноблока. Слот в подставке может использоваться для размещения телефона и аксессуаров.', 15000 ,'001.webp',460);
// createCard('Монитор &laquo;ASrock&raquo;','Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequatur excepturi laboriosam officia, quidem sequi rem non quaerat eligendi magnam totam aliquid enim fugit maiores suscipit sint eaque autem ullam tempore tempora repellat. Tempore fugit cupiditate quaerat repellendus aliquid ut.', 50000 ,'i.webp',230);
// for(let i=1; i<=10; i++)
//     createCard('Монитор &laquo;msi&raquo;№'+ i,'Какое то описание', 15000 ,'samsung_F8500.webp',i);

let modal_buy = document.getElementsByClassName("modal_buy")[0];
modal_buy.addEventListener('click',buy);

function buy(e){
    let el=e.target;
   let el_id=el.id
   let id=el_id.split('_')[2];
   if(el_id=='in_busket_minus'){
    in_busket_number.innerHTML--;
    if(in_busket_number.innerHTML==0)
        document.getElementsByClassName('modal_buy')[0].innerHTML='Купить';
   }else 
   if (el_id=='in_busket_plus')
 in_busket_number.innerHTML++;
else if(el.innerHTML =='Купить')
    el.innerHTML= addBusketNumber(1);
//alert(id);
}