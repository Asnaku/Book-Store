$(".btnedit").click(e=>{
    //console.log("icon clicked..!");
    let textvalues = displayData(e);
    //console.log(textvalues);
    let id = $("input[name*='book_id']");
    let bookname = $("input[name*='book_name']");
    let bookpublisher = $("input[name*='book_publisher']");
    let bookprice = $("input[name*='book_price']");

    id.val(textvalues[0]);
    bookname.val(textvalues[1]);
    bookpublisher.val(textvalues[2]);
    bookprice.val(textvalues[3]);
    //bookprice.val(textvalues[3],replace("$",""));    
});


function displayData(e){
let id = 0;
const td = $("#tbody tr td"); //select table data html 

let textvalues = [];

for(const value of td){
    if(value.dataset.id == e.target.dataset.id){
        textvalues[id++] = value.textContent;
        // console.log(e.target.dataset.id);
        // console.log(value);
    }
}
return textvalues;
}