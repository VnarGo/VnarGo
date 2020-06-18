<template>
	<div class="cart">
        <p>Cart({{ cart }})</p>
    </div>
</template>

<script>

    import { bus } from '../app.js'

    export default {
    	name: 'cart',
    	data: function(){
    		return {
    			cart: 0,
    		}
    	},
    	methods:{
    		updateCart_plus(){
    			this.cart += 1
    		},
            updateCart_minus(){
                this.cart -= 1
            }
    	},
        created(){
            bus.$on('add-to-cart',this.updateCart_plus),
            bus.$on('remove-from-cart',this.updateCart_minus)
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