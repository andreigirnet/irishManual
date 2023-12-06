@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper"
         x-data="{
         cartObject:'',
         cartGetItems: function(){
            axios.get('/cart/get').then(response => {
                this.cartObject = response.data
                this.cartTotal = response.data.total
                this.cartSubTotal = response.data.items_subtotal
                this.cartTotalQty = response.data.quantities_sum
                this.cartItems = response.data.items
                if(this.cartTotalQty>9){
                this.showDiscount=true
                 }else{
                 this.showDiscount=false
                }
            }).catch(error => {
                console.error(error);
            });
         },
         cartTotal: 0,
         cartSubTotal: 0,
         discount: 10,
         showDiscount: false,
         cartTotalQty:0,
         cartItems:[],
         addQty: function(id){
            this.cartTotalQty+=1;
            axios.put('/cart/update/' + id,
            {
            quantity: this.cartTotalQty
            }).then(response => {
	            this.checkSale()
            }).catch(error => {
                console.error(error);
            });
         },
         subQty: function(id){
            if(this.cartItems[id].quantity>1){
                this.cartTotalQty-=1;
                axios.put('/cart/update/' + id,
                {
                quantity: this.cartTotalQty
                }).then(response => {
                   this.checkSale()
                }).catch(error => {
                    console.error(error);
                });
            }
         },
         deleteItem: function(id){
            axios.delete('/cart/delete/' + id).then(response => {
                }).catch(error => {
                    console.error(error);
                });
                window.location.reload()
         },
         checkSale: function(){
            if(this.cartTotalQty>9){
                axios.post('/cart/add/discount')
                .then(response => {
                this.showDiscount=true
                this.cartGetItems()
                }).catch(error => {
                    console.error(error);
                });
            }else{
                 axios.post('/cart/clear/discount')
                .then(response => {
                this.showDiscount=false
                this.cartGetItems()
                }).catch(error => {
                    console.error(error);
                });
            }
         }
         }" x-init="cartGetItems" style="row-gap: 20px">
        <div class="adminHomePageTitle">Your Basket</div>
        @if(!Cart::isEmpty())
        <table class="styled-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Cost</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <template x-for="(cartItem, index) in cartItems">
                <tr id="cartTableRow" class="cartRow" style="color: black">
                    <td id="cartId" x-text="cartItem.id"></td>
                    <td id="itemName" x-text="cartItem.title"></td>
                    <td id="itemCost" x-text="cartItem.price"></td>
                    <td class="qtyContainer">
                        <img class="qtyIcon" id="subQty" @click="subQty(index)"  src="{{asset('images/icons/minus.png')}}" alt="">
                        <input class="qtyInput" id="itemQty" x-model="cartItem.quantity" x-on:change="updateQty" type="number" min="0">
                        <img class="qtyIcon" id="addQty" @click="addQty(cartItem.hash)"  src="{{asset('images/icons/plus.png')}}" alt="">
                    </td>
                    <td>
                        <button class="deleteIcon" @click="deleteItem(cartItem.hash)"><img class="qtyIcon" src="{{asset('images/icons/bin.png')}}" alt=""></button>
                    </td>
                </tr>
            </template>
            </tbody>
        </table>
        <div class="goToCheckOutContainer">
            <div class="checkout">
                <div class="noticeDiscount">
                    <div class="noticeDiscountHeader">Notice</div>
                    <div class="noticeText">Please note that we offer a 10% discount on purchases of 10 or more courses by a company or employer.<br>
                        Our payment system will automatically apply the discount when you add the required number of courses to your cart.
                    </div>
                </div>
                <div >
                    <div class="noticeDiscountHeader">For Your Attention</div>
                    <div class="noticeText">Before proceeding with the payment, please double-check that the selected course/courses and quantities are correct.<br>
                        If, by mistake, you have added extra courses to your basket that you do not need, kindly remove those items from your basket and begin again with the correct selection.
                    </div>
                </div>
                <div class="goToCheckOutWrap">
                    <div class="cartSubTotal" style="color: black">
                        <div class="totalText">Cart Sub-Total:</div>
                        <div class="totalValue" x-text="cartSubTotal"></div>
                        <div class="euro">€</div>
                    </div>
                    <div class="discount" x-show="showDiscount">
                        <div class="totalText" style="color: red; font-weight: 600">Discount:</div>
                        <div class="totalValue" style="color: red; font-weight: 600" x-text="discount"></div>
                        <div class="euro" style="color: red; font-weight: 600">%</div>
                    </div>
                    <div class="cartTotal" style="color: black">
                        <div class="totalText">Cart Total:</div>
                        <div class="totalValue" x-text="cartTotal"></div>
                        <div class="euro">€</div>
                    </div>
                    <div class="checkOutMessage"></div>
                    <a href="/" x-bind:href="cartTotalQty>0 ? '/checkout' : '/cart'" class="linkCheckOut"><button class="adminButton" type="submit">Check Out</button></a>
                </div>
            </div>
        </div>
        <div class="checkoutAlert">
            <div class="boughtItemsInfo"></div>
            <div class="cardDetails">

            </div>
        </div>
        @else
            <div class="textAdmin">No items in the cart</div>
            <a href="/home" class="sale-button" >Buy a course here</a>
        @endif
    </div>

    <script src="{{asset('js/cart.js')}}" defer></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
