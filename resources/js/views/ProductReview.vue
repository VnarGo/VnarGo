<template>
	<div class="product-review">
		<form class="review-form" @submit.prevent="onSubmit">

			<p>
				<label for="name">Name:</label>
				<input id="name" v-model="name">
			</p>

			<p>
				<label for="review">Review:</label>
				<textarea id="review" v-model="review" required=""></textarea>
			</p>

			<p>
				<label for="rating">Rating:</label>
				<select id="rating" v-model.number="rating">
					<option>5</option>
					<option>4</option>
					<option>3</option>
					<option>2</option>
					<option>1</option>
				</select>
			</p>

			<p>
				<input type="submit" value="Submit" >
			</p>
		</form>
	</div>
</template>

<script>
	export default {
		name: 'product-review',
		data: function() {
	        return {
				name: null,
				review: null,
				rating: null
			}
		},
		methods:{
			onSubmit(){
				let productReview = {
					name: this.name,
					rating: this.rating,
					review: this.review
				}
				this.$emit('review-submitted', productReview)
				this.name = null
				this.rating = null
				this.review = null
			}
		}
	}
</script>

<style>
	.review-form {
	    width: 400px;
	    padding: 20px;
	    margin: 40px;
	    border: 1px solid #d8d8d8;
	}
  
	input {
		width: 100%;  
		height: 25px;
		margin-bottom: 20px;
	}

	textarea {
	    width: 100%;
	    height: 60px;
	}
</style>