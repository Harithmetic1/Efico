<template>
	<div>
		<div class="card card-deck mb-3 mx-auto" style="max-width: 90%;" v-for="eachNews in news" v-bind:key="eachNews.id">
	        <div class="row no-gutters">
	            <div class="col-md-4">
	                <img src="template/Business_SVG 2.png" class="card-img" alt="...">
	            </div>
	          	<div class="col-md-8">
		            <div class="card-body">
			              <h5 class="card-title">{{ eachNews.title }}</h5>
			              <p class="card-text">{{ eachNews.body }}</p>
			              <!-- <a href="/news/" class="card-link">More</a> -->
			              <p class="card-text"><small class="text-muted">{{ eachNews.author }}</small></p>
		            </div>
	          	</div>      
	        </div>
	    </div>
	    <nav>
			<ul class="pagination">
				<li class="page-item" v-bind:class="[{disabled: !pagination.prev_page_url}]"><a href="#" class="page-link" @click="fetchTeachers(pagination.prev_page_url)">Previous</a></li>
				<li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a></li>
				<li class="page-item" v-bind:class="[{disabled: !pagination.next_page_url}]"><a href="#" class="page-link" @click="fetchTeachers(pagination.next_page_url)">Next</a></li>
			</ul>
		</nav>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				news: [],
				pagination: {},
			}
		},

		created() {
			this.getNews();
		},

		methods: {
			getNews() {
				fetch('/api/news')
					.then(res => res.json())
					.then(res => {
						this.news = res.data;
						this.makePagination(res.meta, res.links);
					})
			},
			makePagination(meta, links) {
				let pagination = {
					current_page: meta.current_page,
					last_page: meta.last_page,
					next_page_url: links.next,
					prev_page_url: links.prev
				}
				this.pagination = pagination;
			},
		}
	}
</script>