<template>
	<div>
		<span 	
			class="tab"
			:class="{ activeTab: selectedTab === tab}"
			v-for="(tab, index) in tabs" 
			:key="index"
			@click="selectedTab =tab">
					{{tab}}
		</span>

		<div v-show="selectedTab === 'Reviews'">
            <p v-if="!reviews.length">There are no reviews yet.</p>
            <ul>
                <li v-for="review in reviews">
                    <p>{{ review.name }}</p>
                    <p>{{ review.rating }}</p>
                    <p>{{ review.review }}</p>
                    
                </li>
            </ul>
        </div>

        <product-review
        	v-show="selectedTab === 'Make a review'">		
        </product-review>

	</div>
</template>

<script>
	export default{
		props:{
			reviews:{
				type: Array,
				required: true

			}
		},
		name: 'product-tabs',
		data(){
			return{
				tabs: [
					'Reviews',
					'Make a review'
				],
				selectedTab: 'Reviews'
			}
		}

	}

</script>

<style>
	.tab {
	    margin-left: 20px;
	    cursor: pointer;
	  }

  	.activeTab {
	    color: #16C0B0;
	    text-decoration: underline;
	  }

</style>