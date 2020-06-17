<template>
	<div class="cart">
        <p>Cart({{ cart }})</p>
    </div>
</template>

<script>

    export default {
    	name: 'cart',
    	data: function(){
    		return {
    			cart: 0,
    		}
    	},
    	methods:{
    		updateCart(){
    			this.cart += 1
    		}
    	}
    }
</script>

<style>

  .cart {
    margin-right: 25px;
    float: right;
    border: 1px solid #d8d8d8;
    padding: 5px 20px;
  }

</style>