/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */



function addToCart(itemId){
    console.log("js - addToCart()");
    $.ajax({
	type: 'POST',
	async: false,
	url: "/shopPHP/cart/addtocart/" + itemId + '/',
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type':'application/json'
        },
	dataType: 'json',
	success: function(data){
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);
                
                $('#addCart_'+ itemId).hide();
                $('#removeCart_'+ itemId).show();
            }
        }
    });    
}


function removeFromCart(itemId){
    console.log("js - removeFromCart("+itemId+")");
    $.ajax({
	type: 'POST',
	async: false,
	url: "/shopPHP/cart/removefromcart/" + itemId + '/',
        headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type':'application/json'
        },
        dataType: 'json',
	success: function(data){
            if(data['success']){
                
                $('#cartCntItems').html(data['cntItems']);
                
                $('#addCart_'+ itemId).show();
                $('#removeCart_'+ itemId).hide();
            }
	}
    });    
}